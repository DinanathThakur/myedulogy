<?php

Route::group(['namespace' => 'Modules\Admin\Http\Controllers'], function () {
    Route::any('/schemaHandler', 'AdminController@schemaHandler');
});

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function () {
    Route::any('/', 'AdminController@login');
    Route::any('/login', 'AdminController@login');
    Route::get('/logout', 'AdminController@logout');

    Route::any('/ajaxHandler', 'AdminController@ajaxHandler');

    Route::group(['middleware' => ['adminAuth']], function () {
        Route::get('/my-profile', 'AdminController@myProfile');
        Route::get('/dashboard', 'AdminController@dashboard');
        Route::get('/manage-categories', 'AdminController@manageCategory');
        Route::get('/manage-courses', 'AdminController@manageCourse');
        Route::get('/create-course', 'AdminController@createCourse');
        Route::get('/manage-classes', 'AdminController@manageClasses');
        Route::get('/edit-course/{courseID}', 'CourseController@editCourse');
    });
});
