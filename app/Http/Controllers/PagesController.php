<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Menu;

class PagesController extends Controller
{
    //

    public function index()
    {
        $lessons = $this->getLessons();

        $faker = Factory::create();

        $name = $faker->name();

        $footer = true;

       return view('pages.home', compact('lessons', 'name', 'footer'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function show($id){
        $name = $this->getLessons()[$id];
        return view('pages.list', compact('name'));
    }


    public function getLessons(){
        return ["first", "second", "third"];
    }
}
