<?php

Route::group(['namespace' => 'Modules\Home\Http\Controllers'], function () {

    Route::get('/login', 'HomeController@login');
    Route::get('/register', 'HomeController@register');
    Route::get('/logout', 'HomeController@logout');

    Route::group(['middleware' => 'web'], function () {
        Route::get('/', 'HomeController@index');
        Route::get('/cart', 'HomeController@cart');

        Route::get('/course/{courseID}', 'CourseController@index');
    });
});
