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

Route::get('/logged', function () {
    return view('auth.afterLogin');
});

Route::get('archive', 'ArchiveController@index')->name('archive');

Auth::routes(['verify' => 'true']);

Route::get('/admin', 'AdminController@edit')->name('admin.edit')->middleware(['verified', 'admin']);
Route::post('/admin','AdminController@store')->name('admin.store')->middleware(['verified', 'admin']);
Route::put('/admin/{id}','AdminController@update')->name('admin.update')->middleware(['verified', 'admin']);
Route::get('/admin/{id}','AdminController@destroy')->name('admin.delete')->middleware(['verified', 'admin']);

Route::put('/users/{id}', 'userController@update')->name('users.update')->middleware(['verified', 'admin', 'password.confirm']);
Route::get('/users/{id}', 'userController@distroy')->name('users.delete')->middleware(['verified', 'admin', 'password.confirm']);
