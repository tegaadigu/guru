<?php

namespace guru\Registration\Operator;

use App\Models\Operator;
use App\User;
use guru\Registration\Registration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Handler extends Registration
{
    const RULES = [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|confirmed|min:5',
    ];

    const INDIVIDUAL = 1;
    const CORPORATE = 2;

    /**
     * @param array $registrationData
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(array $registrationData)
    {
        $data = ['success' => 1];
        $validator = Validator::make($registrationData, self::RULES);

        if ($validator->fails()) {
            $data['success'] = 0;
            $data['errors'] = $validator->getMessageBag()->toArray();
        } else {
            $oldPassword = $registrationData['password'];
            $registrationData['password'] = Hash::make($registrationData['password']);
            $user = User::create($registrationData);
            Operator::create(['account_type', $registrationData['account_type'], 'user_id' => $user->id]);

            return $this->login(
                [
                    'email' => $registrationData['email'],
                    'password' => $oldPassword,
                ]
            );
        }

        return response()->json($data);
    }

    /**
     * @param array $credentials
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(array $credentials)
    {
        $data = ['success' => 0, 'url' => ''];

        if (Auth::attempt(
            [
                'email' => $credentials['email'],
                'password' => $credentials['password'],
            ],
            true)
        ) {
            $data['success'] = 1;
            $data['url'] = $this->getRedirectUrl();
        }


        return response()->json($data);
    }
}
