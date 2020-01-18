<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home page
Route::get('/', function () {
    return view('welcome');
});

Route::get('archive', 'ArchiveController@index');

////test the uri variables.
//Route::get('requestName', function () {
//    return view('welcome', [
//        'name' => request('name'),
//        'ID' => request('ID'),
//        'age' => request('age')
//    ]);
//});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('dashboard', 'HomeController@index')->name('home');
Route::post('dashboard','HomeController@store')->name('home.store');
Route::put('dashboard/{id}','HomeController@update')->name('home.update');
Route::get('dashboard/{id}','HomeController@destroy')->name('home.delete');
