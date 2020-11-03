<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RaidController;
use App\Models\Characters;
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
App::setlocale('es');

//Route::view('/', 'home')->name('home');

Route::get('/', 'App\Http\Controllers\NoticeController@index')->name('home');

Route::view('/features', 'features')->name('features');
Route::view('/howto', 'howto')->name('howto');

View::composer('partials.download', function ($view) {
    $view->with('online', Characters::getOnline());
});

Route::get('/raids', 'App\Http\Controllers\SpawnListController@index')->name('raids');

Auth::routes();
