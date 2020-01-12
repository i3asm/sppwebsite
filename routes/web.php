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
Route::post('dashboard','ArchiveController@store');
Route::get('dashboard','ArchiveController@edit');
Route::put('dashboard','ArchiveController@update');

//Route::get('dashboard/addArchive','ArchiveController@create');


////test the url variables.
//Route::get('requestName', function () {
//    return view('welcome', [
//        'name' => request('name'),
//        'ID' => request('ID'),
//        'age' => request('age')
//    ]);
//});
