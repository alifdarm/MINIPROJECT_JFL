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

use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('miniproject/maps', 'MiniprojectController@maps');

Route::resource('miniproject', 'MiniprojectController')->middleware('auth');

Route::get('miniproject/details/{id}', 'MiniprojectController@detail')->middleware('auth');

Auth::routes();

Route::get('/admin/miniproject/{id}/{corp}', 'AdminController@action')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth');

Route::get('/admin/miniproject', 'AdminController@detail')->middleware('auth');

Route::delete('/admin/miniproject', 'AdminController@reset_master')->middleware('auth');

Route::delete('/admin/miniproject/{id}', 'AdminController@reset')->middleware('auth');


