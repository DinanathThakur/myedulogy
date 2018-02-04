<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Modules\Home\Entities\User;

class AdminController extends Controller
{

    public function login(Request $request)
    {
        // dd($request->all());

        if (Session::has('admin') || $request->session()->has('admin')) {
            return redirect('/admin/dashboard');
        }
        if ($request->isMethod('post')) {
            $email = $request->input('email');
            $password = $request->input('password');

            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ], ['email.required' => 'Please enter email-id',
                'password.required' => 'Please enter a password']
            );
            if (Auth::attempt(['email' => $email, 'password' => $password])) {

                $objModelUsers = User::getInstance();
                $adminDetails = $objModelUsers->getUserById(Auth::id()); //THIS IS TO GET THE MODEL OBJECT

                if ($adminDetails->role == 1) {

                    Session::put('admin', $adminDetails->toArray());
                    return redirect('/admin/dashboard');
                } else {
                    return redirect('/admin')->withErrors([
                        'errMsg' => 'Invalid credentials.',
                    ]);
                }

            } else {
                return redirect('/admin')->withErrors([
                    'errMsg' => 'Invalid credentials.',
                ]);
            }
        }
        return view('admin::home.login');
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('admin');
        return redirect('/admin');
    }

    public function dashboard(Request $request)
    {
        return view('admin::admin.dashboard');
    }
    public function manageCourse(Request $request)
    {
        return view('admin::course.index');
    }
    public function manageCategory(Request $request)
    {
        return view('admin::category.index');
    }

}
