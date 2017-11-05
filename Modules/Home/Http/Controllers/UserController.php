<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function myProfile()
    {
        return view('home::user.my-profile');
    }

    public function cart()
    {
        return view('home::user.cart');
    }
}
