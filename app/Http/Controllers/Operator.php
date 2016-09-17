<?php

namespace App\Http\Controllers;

use App\User;
use guru\Registration\Operator\Handler;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class Operator extends Controller
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::viaRemember()) {
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

        $handler = new Handler(url('/operator/dashboard'));

        return $handler->register($data);

    }

    public function dashboard()
    {
        dd('yooo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
