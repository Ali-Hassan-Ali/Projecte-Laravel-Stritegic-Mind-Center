<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('index');

Route::get('/login', function () {
    return view('auth.login');
});/*return view Login*/

Route::get('/register', function () {
    return view('auth.register');
});/*return view Register*/


Route::get('AllCourse', 'HomeController@AllCourse')->name('AllCourse');

Auth::routes();

Route::post('new', 'HomeController@new')->name('new');
Route::group(['middleware'=>'auth'] ,function() {
    Route::get('profile', 'HomeController@profile')->name('profile');
    Route::get('logoute', 'HomeController@logoute')->name('logoute');
    Route::get('EditUsers/{id}', 'HomeController@edituser')->name('EditUsers');
    //    Route::get('classroom', 'HomeController@classroom')->name('classroom');
//    Route::resource('ClassRooming', 'ClassRoomController');
    Route::resource('comment', 'CommentController');
    Route::resource('users', 'UsersController');

});/*end of Route Group Home Pages*/

