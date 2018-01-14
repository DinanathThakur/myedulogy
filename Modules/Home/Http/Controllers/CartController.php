<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Routing\Controller;

class CartController extends Controller
{

    public function index($courseID)
    {
        return view('home::course.index');
    }

}
