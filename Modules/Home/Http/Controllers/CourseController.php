<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Modules\Home\Entities\User;
use Validator;

class CourseController extends Controller
{

    private $courses = [
        1 => ['category' => 'classroom', 'currency' => 'USD', 'price' => 1599.000],
        2 => ['category' => 'classroom', 'currency' => 'USD', 'price' => 12999.000],
    ];
    public function index($courseID)
    {
        return view('home::course.index');
    }

    

}
