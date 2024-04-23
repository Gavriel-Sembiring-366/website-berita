<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function welcome(){

        // logic 
        return view('welcome');
    }

    public function login(){
        return view('login');
    }

    public function signup(){
        return view('signup');
    }

    public function news(){
        return view('news');
    }
}
