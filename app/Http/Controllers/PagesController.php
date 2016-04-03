<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Menu;

class PagesController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $footer = true;

        $name = 'Tega Adigu';

       return view('pages.home', compact('name', 'footer'));
    }
}
