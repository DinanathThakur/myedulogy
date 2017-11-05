<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Home\Http\Controllers'], function () {

	Route::get('/', 'HomeController@index');
    Route::any('/register', 'HomeController@register');
    Route::any('/login', 'HomeController@login');
    Route::get('/logout', 'HomeController@logout');
    Route::get('/course/{courseID}', 'CourseController@index');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/my-profile', 'UserController@myProfile');
        Route::get('/cart', 'UserController@cart');
    });
});
