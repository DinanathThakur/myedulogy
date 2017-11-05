<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home::home.index');
    }

    public function login()
    {
        die("login page");
        // return view('home::home.login');
    }

    public function register()
    {
        die("register page");
        // return view('home::home.register');
    }

    public function logout()
    {
        die("logout");
        // return view('home::home.logout');
    }

    public function cart()
    {
        die("cart page");
        // return view('home::home.logout');
    }

}
