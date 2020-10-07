<?php

use Illuminate\Support\Facades\Route;

//Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
//    function () {

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

    Route::get('/', 'WelcomeController@index')->name('welcome');

    //category routes
    Route::resource('categories', 'CategoryController')->except(['show']);

    //product routes
    Route::resource('course', 'CourseController')->except(['show']);

    //Student routes
    Route::resource('student', 'StudentController');

    //teacher routes
    Route::resource('teacher', 'TeacherController');

    //classroom routes
    Route::resource('classroom', 'ClassRoomController');

    //file routes
    Route::resource('file', 'FileController')->except(['show']);

    //user routes
    Route::resource('users', 'UserController');

    Route::group(['namespace' => 'Settings'], function () {

        //slider routes
        Route::resource('slider', 'SliderController')->except(['show']);

        //poster routes
        Route::resource('poster', 'PosterController')->except(['show']);

        //trainer routes
        Route::resource('trainer', 'TrainerController')->except(['show']);

        //calender routes
        Route::resource('calender', 'CalenderController')->except(['show']);

        //event routes
        Route::resource('event', 'EventController')->except(['show']);

    });/*end of namespace Settings*/

});//end of dashboard routes


//    });


