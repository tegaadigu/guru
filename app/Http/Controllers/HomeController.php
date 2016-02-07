<?php

namespace APP\Http\Controllers;

USE Illuminate\Routing\Controller;
/**
 * Created by PhpStorm.
 * User: tega
 * Date: 11/01/2016
 * Time: 12:45 AM
 */

Class HomeController extends Controller
{
    public function index()
    {
       // echo "hi hi";
       // die;
        return view('welcome');
    }
}