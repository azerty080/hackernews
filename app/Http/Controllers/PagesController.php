<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{



    public function instructies()
    {
    	return view('instructies');
    }


    public function login()
    {
    	return view('login');
    }


    public function register()
    {
    	return view('register');
    }
}
