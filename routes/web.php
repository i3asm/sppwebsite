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

use Illuminate\Support\Facades\Route;

//home page
Route::get('/', 'HomePageController@index')->name('home');


//GPA calculator page
Route::get('/GPA', function () {
    return view('GPA', ['title' => 'احسب معدلك']);
})->name('GPA');

// routes for the previous leaders page
Route::get('archive/{index}', 'ArchiveController@index')->name('archive');
Route::get('archive', function (){return redirect(route('archive', ['index' => 0]));})->name('archiveMain');

// import from .csv file
Route::post('archive', 'AdminController@import')->name('archiveImport')->middleware(['verified', 'admin']);

// all the authentication routes
Auth::routes(['verify' => 'true']);

// admin page routes
Route::get('/admin', 'AdminController@edit')->name('admin.edit')->middleware(['verified', 'admin']);
Route::post('/admin', 'AdminController@store')->name('admin.store')->middleware(['verified', 'admin']);
Route::put('/admin/{id}', 'AdminController@update')->name('admin.update')->middleware(['verified', 'admin']);
Route::get('/admin/{id}', 'AdminController@destroy')->name('admin.delete')->middleware(['verified', 'admin']);

// update the avatar of archive, it is a blank avatar.jpg by default
Route::post('avatar/{id}', 'AdminController@update_avatar')->name('avatar.update')->middleware(['verified', 'admin']);

// control the admins of the page, the website will be working for the new leaders
Route::put('/users/{id}', 'userController@update')->name('users.update')->middleware(['verified', 'admin', 'password.confirm']);
Route::get('/users/{id}', 'userController@distroy')->name('users.delete')->middleware(['verified', 'admin', 'password.confirm']);

// control home page elements, to make sure the website only need the spp staff
Route::put('/homePage', 'HomePageController@store')->name('home.store')->middleware(['verified', 'admin']);
Route::post('/homePage/{id}', 'HomePageController@edit')->name('home.edit')->middleware(['verified', 'admin']);



