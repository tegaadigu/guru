<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Customer extends Controller
{
    public function __construct()
    {
        $this->middleware('customerNav');
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.dashboard', ['user' => Auth::user()]);
    }

    /***
     * Display transit route option
     */
    public function transit()
    {
        return view('customer.transit', ['user' => Auth::user()]);
    }

    public function transitResult()
    {
        return view('customer.transitresult', ['user' => Auth::user()]);
    }
}
