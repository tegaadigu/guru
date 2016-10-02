<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use guru\Registration\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Menu;

class Index extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->type == User::OPERATOR) {
                return redirect()->intended(url('operator'));
            } elseif (Auth::user()->type == User::CUSTOMER) {
                return redirect()->intended(url('customer'));
            } else {
                return view('home.dashboard', ['user' => Auth::user()]);
            }
        }

        return view('login', ['name' => "Tega Adigu"]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function signIn()
    {
        $data['type'] = Input::get('accountType');
        $data['email'] = Input::get('email');
        $data['password'] = Input::get('password');

        $response = ['success' => 0, 'errors' => ['email' => 'User Credentials not recognized']];
        $loginObject = Factory::createRegistrationType($data['type'], auth());

        if ($loginObject->login($data)) {
            $response['success'] = 1;
            $response['url'] = $loginObject->getRedirectUrl();
        }


        return response()->json($response);
    }
}
