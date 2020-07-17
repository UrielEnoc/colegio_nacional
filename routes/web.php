<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'LoginController@login')->name('login');
Route::get('/auth.register', 'LoginController@register')->name('register');
Route::get('/auth.passwords.reset', 'LoginController@recovery_pass')->name('recovery_pass');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


