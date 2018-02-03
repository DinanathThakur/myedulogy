<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function () {
    Route::any('/', 'AdminController@login');
    Route::any('/login', 'AdminController@login');
    Route::get('/logout', 'AdminController@logout');

    Route::any('/ajaxHandler', 'AdminController@ajaxHandler');

    Route::get('/dashboard', 'AdminController@dashboard');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/my-profile', 'AdminController@myProfile');
    });
});
