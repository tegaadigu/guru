<?php

namespace App\Http\Controllers;

use App\User;
use guru\Registration\Handlers\Operator as RegistrationOperator;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class Operator extends Controller
{
    public function __construct()
    {
        $this->middleware('authOperator');
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            return view('operator.dashboard', ['user' => Auth::user()]);
        }

        return view('operator.register');
    }

    /**
     * Registeration function..
     */
    public function register()
    {
        $data['token'] = Input::get('_token');
        $data['name'] = Input::get('name');
        $data['email'] = Input::get('email');
        $data['password'] = Input::get('password');
        $data['account_type'] = Input::get('account_type');
        $data['password_confirmation'] = Input::get('password_confirmation');
        $data['type'] = User::OPERATOR;

        $handler = new RegistrationOperator(url('/operator/dashboard'), auth());

        return $handler->register($data);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function dashboard()
    {
        if (Auth::check() == false) {
            return redirect()->intended(url('operator'));
        }
        return view('operator.dashboard', ['user' => Auth::user()]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->intended(url('operator/login'));
    }

    /**
     * This refers to the actual login page
     */
    public function login()
    {
        return view('operator.login');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function signIn()
    {
        $data['email'] = Input::get('email');
        $data['password'] = Input::get('password');

        $handler = new Operator(url('/operator/dashboard'));

        return $handler->login($data);
    }
}
