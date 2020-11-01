<?php

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
/*Route::get('/notice/{notice}', 'App\Http\Controllers\NoticeController@show')->name('notices.show');
Route::get('/notice/create', 'App\Http\Controllers\NoticeController@create')->name('notices.create');
Route::get('/notice/{notice}/edit', 'App\Http\Controllers\NoticeController@edit')->name('notices.edit');
Route::patch('/notice/{notice}', 'App\Http\Controllers\NoticeController@update')->name('notices.update');
Route::post('/notice', 'App\Http\Controllers\NoticeController@store')->name('notices.store');
Route::get('/notice/{notice}', 'App\Http\Controllers\NoticeController@show')->name('notices.show');
Route::delete('/notice/{notice}', 'App\Http\Controllers\NoticeController@destroy')->name('notices.destroy');*/

Route::view('/features', 'features')->name('features');
Route::view('/howto', 'howto')->name('howto');

View::composer('partials.download', function ($view) {
    $view->with('online', Characters::getOnline());
});

Route::get('/raids', 'App\Http\Controllers\SpawnListController@index')->name('raids');

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');



Auth::routes();