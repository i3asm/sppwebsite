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

Route::get('archive', 'HomeController@index');

////test the uri variables.
//Route::get('requestName', function () {
//    return view('welcome', [
//        'name' => request('name'),
//        'ID' => request('ID'),
//        'age' => request('age')
//    ]);
//});

Auth::routes();

Route::get('dashboard', 'HomeController@index')->name('home');
Route::post('dashboard','HomeController@store');
Route::put('dashboard','HomeController@update');
Route::delete('dashboard','HomeController@destroy');
