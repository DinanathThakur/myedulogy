<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Modules\Home\Entities\User;
use Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home::home.index');
    }

    public function login(Request $request)
    {

        if (Session::has('user') || $request->session()->has('user')) {
            return redirect('/my-profile');
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
                $userDetails = $objModelUsers->getUserById(Auth::id()); //THIS IS TO GET THE MODEL OBJECT

                if ($userDetails->role == 2) {

                    Session::put('user', $userDetails->toArray());
                    return redirect('/my-profile');
                } else {
                    return redirect('/login')->withErrors([
                        'errMsg' => 'Invalid credentials.',
                    ]);
                }

            } else {
                return redirect('/login')->withErrors([
                    'errMsg' => 'Invalid credentials.',
                ]);
            }
        }
        return view('home::home.login');
    }

    public function register(Request $request)
    {
        if (Session::has('user')) {
            return redirect('/my-profile');
        }

        if ($request->isMethod('post')) {

            $rules = array(
                'firstName' => 'required|max:255',
                'lastName' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required',
//                'password_confirm' => 'required|same:password',
                //                'terms_and_policy' => 'accepted'
            );

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return Redirect::back()
                    ->withErrors($validator)
                    ->withInput();
            } else {
                try {
                    $user = User::create([
                        'firstName' => $request['firstName'],
                        'lastName' => $request['lastName'],
                        'email' => $request['email'],
                        'password' => bcrypt($request['password']),
                        'role' => 2,
                        'userName' => $request['userName'],
                        'profilePic' => '/assets/images/avatar-placeholder.jpg',
                    ]);
                    if ($user) {
                        Auth::login($user);
                        $objModelUsers = User::getInstance();
                        $userDetails = $objModelUsers->getUserById(Auth::id());
                        Session::put('user', $userDetails['original']);
                        return redirect()->intended('/my-profile');
                    } else {
                        return Redirect::back()
                            ->withErrors('Something went wrong, please try again.')
                            ->withInput();
                    }
                } catch (\Exception $ex) {
                    return Redirect::back()
                        ->withErrors($ex->getMessage())
                        ->withInput();
                }

            }
        }
        return view("home::home.register");
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('/');
    }

    public function cart()
    {
        die("cart page");
        // return view('home::home.logout');
    }

}
