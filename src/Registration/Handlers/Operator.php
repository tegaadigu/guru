<?php

namespace guru\Registration\Handlers;

use App\User;
use guru\Registration\Registration;
use Illuminate\Auth\AuthServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class Operator extends Registration
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
            User::create($registrationData);
            if($this->login(
                [
                    'email' => $registrationData['email'],
                    'password' => $oldPassword,
                    'type' => $registrationData['type']
                ]
            )){
                $data['success'] = 1;
                $data['url'] = $this->getRedirectUrl();
            }
            else {
                $data = ['success' => 0, 'errors' => ['email' => 'User Credentials not recognized']];
            }
        }

        return response()->json($data);
    }
}
