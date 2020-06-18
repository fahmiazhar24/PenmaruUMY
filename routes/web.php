<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ROUTES ADMIN
Route::group(['middleware' => 'check-permission:admin'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('view', 'AdminController@index')->name('admin.view');
        Route::get('verifikasi', 'AdminController@show')->name('admin.verifikasi');
        Route::get('{biodata}/edit', 'AdminController@edit')->name('admin.edit_verifikasi');
        Route::patch('{biodata}', 'AdminController@update')->name('admin.verifikasi');
    });
});
 
 
// ROUTES PENDAFTAR
Route::group(['middleware' => 'check-permission:pendaftar'], function () {
    Route::group(['prefix' => 'pendaftar'], function () {
    Route::get('dashboard', 'UserController@index')->name('user.dashboard');
	Route::get('status', 'UserController@show')->name('user.status');
 
	});
});
