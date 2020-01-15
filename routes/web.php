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

Auth::routes();

Route::post('dashboard','ArchiveController@store');
Route::put('dashboard','ArchiveController@update');
Route::delete('dashboard','ArchiveController@destroy');
Route::get('dashboard', 'HomeController@index')->name('home');
