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

Route::view('/', 'home')->name('home');
Route::view('/features', 'features')->name('features');
Route::view('/howto', 'howto')->name('howto');
Route::view('/raids', 'raids')->name('raids');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');



Auth::routes();