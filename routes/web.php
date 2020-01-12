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

//test wildcards
//any word after news/ will be handled by the controller
//this is just something I wanted test
//    Route::get('archive/{post}', 'archiveController@show');

Route::get('archive', 'ArchiveController@index');

//test the url variables.
Route::get('requestName', function () {
    return view('welcome', [
        'name' => request('name'),
        'ID' => request('ID'),
        'age' => request('age')
    ]);
});
