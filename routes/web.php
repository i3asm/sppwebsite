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

//test the controllers
Route::get('news/{post}', 'news@show');

//test the url variables.
Route::get('requestName', function () {
    return view('welcome', [
        'name' => request('name'),
        'ID' => request('ID'),
        'age' => request('age')
    ]);
});
