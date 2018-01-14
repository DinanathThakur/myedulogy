<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Home\Http\Controllers'], function () {

	Route::get('/', 'HomeController@index');
    Route::any('/about-us', 'HomeController@aboutUs');
    Route::any('/contact-us', 'HomeController@contactUs');
    Route::any('/accreditation', 'HomeController@accreditation');
    Route::any('/test-paypal', 'HomeController@testPayPal');
    Route::any('/register', 'HomeController@register');
    Route::any('/success', 'HomeController@success');
    Route::any('/login', 'HomeController@login');
    Route::get('/logout', 'HomeController@logout');
    Route::get('/course/{courseID}', 'CourseController@index');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/my-profile', 'UserController@myProfile');
        Route::get('/cart', 'UserController@cart');
    });
});
