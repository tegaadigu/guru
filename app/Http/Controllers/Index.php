<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Menu;

class Index extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (Auth::check()) {
            return view('home.dashboard', ['user' => Auth::user()]);
        }

        return view('home.index', ['name' => "Tega Adigu"]);
    }
}
