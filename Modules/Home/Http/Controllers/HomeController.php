<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Modules\Home\Entities\Classes;
use Modules\Home\Entities\User;
use Validator;

class HomeController extends Controller
{

    private $cookieName = 'cartDetails';
    private $courses = [
        'c-1' => ['name' => 'PMP 4 days', 'category' => 'classroom', 'currency' => 'USD', 'price' => 5.000],
        'c-2' => ['name' => 'PMP 1 month', 'category' => 'classroom', 'currency' => 'USD', 'price' => 12.000],
        'c-3' => ['name' => 'PMP 1 year', 'category' => 'classroom', 'currency' => 'USD', 'price' => 50.000],
    ];

    public function index(Request $request)
    {
        return view('home::home.index');
    }

    public function aboutUs(Request $request)
    {
        return view('home::home.about-us');
    }

    public function testPayPal(Request $request)
    {
        return view('home::home.test-paypal');
    }

    public function success(Request $request)
    {
        Storage::disk('local')->put(microtime(true) . '.json', json_encode($request->all()));
        unset($_COOKIE[$this->cookieName]);
        return view('home::home.payment-response');
    }

    public function payment(Request $request)
    {
        $cartDetails = isset($_COOKIE[$this->cookieName]) ? json_decode($_COOKIE[$this->cookieName], true) : [];
        $finalData = [];
        $finalPrice = $price = 0;
        if (!empty($cartDetails)) {
            $courseIDs = array_keys($cartDetails);
            $classList = Classes::getInstance()->getAllClassesWhereIdIn($courseIDs)->all();
            $classList = array_combine(array_column($classList, 'id'), $classList);

            foreach ($cartDetails as $courseID => $quantity) {
                if (isset($classList[$courseID])) {
                    $price = $classList[$courseID]->price;
                    $price = $classList[$courseID]->discountType && time() <= strtotime($classList[$courseID]->offerExpireOn) ? ($classList[$courseID]->discountType == 'F' ? ($classList[$courseID]->price - $classList[$courseID]->discountValue) : ($classList[$courseID]->price - ($classList[$courseID]->price * $classList[$courseID]->discountValue / 100))) : $classList[$courseID]->price;
                    $subTotal = intval($price * $quantity);
                    $finalPrice += $subTotal;
                    $finalData[$courseID] = [
                        'quantity' => $quantity,
                        'name' => $classList[$courseID]->courseName . ' (' . date_diff(date_create($classList[$courseID]->startDate), date_create($classList[$courseID]->endDate), true)->format("%a Days") . ')',
                        'price' => $price,
                        'subTotal' => $subTotal
                    ];
                }
            }
        }

        return view('home::home.payment', ['orderData' => $finalData, 'finalPrice' => $finalPrice]);
    }

    public function contactUs(Request $request)
    {
        return view('home::home.contact-us');
    }

    public function accreditation(Request $request)
    {
        return view('home::home.accreditation');
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
                'email' => 'required|email|max:255|unique:users,email',
                'userName' => 'required|max:255|unique:users,userName',
                'password' => 'required',
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
                        Auth::attempt(['email' => $request['email'], 'password' => $request['password']]);
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
        Auth::logout();
        Session::forget('user');
        return redirect('/');
    }

    public function cart()
    {
        die("cart page");
        // return view('home::home.logout');
    }

    public function ajaxHandler(Request $request)
    {
        $response = ['status' => 'error', 'msg' => 'Something went wrong...', 'data' => null];
        $method = $request['method'];
        switch ($method) {
            case 'addToCart':
                $courseID = $request['id'];
                $cartDetails = isset($_COOKIE[$this->cookieName]) ? json_decode($_COOKIE[$this->cookieName], true) : [];

                $cartDetails = array_merge($cartDetails, [$courseID => isset($cartDetails[$courseID]) ? ($cartDetails[$courseID] + 1) : 1]);
                setcookie($this->cookieName, json_encode($cartDetails), time() + (86400 * 30), "/");
                $response = ['status' => 'success', 'msg' => 'Cart count', 'data' => array_sum($cartDetails)];
                break;

            case 'getCartCount':
                $cartDetails = isset($_COOKIE[$this->cookieName]) ? json_decode($_COOKIE[$this->cookieName], true) : [];
//                if (Auth::check()) {
//                    $count = 0;
//
//                } elseif ($cartDetails = $_COOKIE[$this->cookieName]) {
//                    $cartDetails = json_decode($cartDetails, true);
//                    $count = array_sum($cartDetails);
//                }
                $response = ['status' => 'success', 'msg' => 'Cart count', 'data' => array_sum($cartDetails)];

                break;

            case 'getCartDetails':

                $cartDetails = isset($_COOKIE[$this->cookieName]) ? json_decode($_COOKIE[$this->cookieName], true) : [];


                $finalData = [];
                $finalPrice = $price = 0;
                if (!empty($cartDetails)) {
                    $courseIDs = array_keys($cartDetails);
                    $classList = Classes::getInstance()->getAllClassesWhereIdIn($courseIDs)->all();
                    $classList = array_combine(array_column($classList, 'id'), $classList);

                    foreach ($cartDetails as $courseID => $quantity) {
                        if (isset($classList[$courseID])) {
                            $price = $classList[$courseID]->price;
                            $price = $classList[$courseID]->discountType && time() <= strtotime($classList[$courseID]->offerExpireOn) ? ($classList[$courseID]->discountType == 'F' ? ($classList[$courseID]->price - $classList[$courseID]->discountValue) : ($classList[$courseID]->price - ($classList[$courseID]->price * $classList[$courseID]->discountValue / 100))) : $classList[$courseID]->price;
                            $subTotal = intval($price * $quantity);
                            $finalPrice += $subTotal;
                            $finalData[$courseID] = [
                                'quantity' => $quantity,
                                'name' => $classList[$courseID]->courseName . ' (' . date_diff(date_create($classList[$courseID]->startDate), date_create($classList[$courseID]->endDate), true)->format("%a Days") . ')',
                                'price' => $price,
                                'subTotal' => $subTotal
                            ];
                        }
                    }
                }

                $response = ['status' => 'success', 'msg' => 'Cart details', 'data' => $finalData, 'finalPrice' => $finalPrice];
                break;


            case 'removeFromCart':
                $cid = $request['cid'];

                $cartDetails = isset($_COOKIE[$this->cookieName]) ? json_decode($_COOKIE[$this->cookieName], true) : [];

                unset($cartDetails[$cid]);
                setcookie($this->cookieName, json_encode($cartDetails), time() + (86400 * 30), "/");

                $response = ['status' => 'success', 'msg' => 'Removed from cart', 'data' => array_sum($cartDetails)];

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
