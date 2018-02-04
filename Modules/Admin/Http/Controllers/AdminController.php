<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Modules\Home\Entities\Category;
use Modules\Home\Entities\Course;
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
        $categoryDetails = Category::getInstance()->getRecordsWhere(['status' => 'A'])->all();
        return view('admin::course.index', ['categories' => $categoryDetails]);
    }

    public function manageCategory(Request $request)
    {
        return view('admin::category.index');
    }

    public function ajaxHandler(Request $request)
    {
        $response = ['status' => 'error', 'msg' => 'Something went wrong...', 'data' => null];
        $method = $request['method'];
        switch ($method) {

            case 'createCategory':

                $categoryDetails = Category::create([
                    'category' => $request['category'],
                ]);
                $categoryDetails = Category::getInstance()->getByID($categoryDetails['id']);

                $response = ['status' => 'success', 'msg' => 'Category has been created.', 'data' => $categoryDetails];

                break;
            case 'getAllActiveCategory':

                $categoryDetails = Category::getInstance()->getRecordsWhere(['status' => 'A'])->all();

                $response = ['status' => 'success', 'msg' => 'Category list.', 'data' => $categoryDetails];

                break;

            case 'createCourse':

                $courseDetails = Course::create($request->all());
                $courseDetails = Course::getInstance()->getByID($courseDetails['id']);

                $response = ['status' => 'success', 'msg' => 'Course has been created.', 'data' => $courseDetails];

                break;


            default:
                break;
        }

        header('Content-Type: application/json');

        if (isset($response['status']) && $response['status'] === 'error') {
            header('HTTP/1.1 500 Internal Server error');
        }
        echo json_encode($response);
    }

}
