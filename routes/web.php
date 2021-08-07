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
    return view('Login.signin');
})->name('/');


//Route::resource('/', 'App\Http\Controllers\LoginController');

Route::group(['middleware'=>"web"], function(){
Route::get('/login', 'App\Http\Controllers\LoginController@signin')->name('Login.signin');
Route::Post('/login', 'App\Http\Controllers\LoginController@login')->name('Login.signin');
Route::get('/login', 'App\Http\Controllers\LoginController@signin')->name('cancel');
Route::get('/', 'App\Http\Controllers\LoginController@display')->name('Login.display');
//Route::get('/display', 'App\Http\Controllers\LoginController@display')->name(,'cancel');
Route::get('/register', 'App\Http\Controllers\LoginController@index')->name('Login.login');
Route::Post('/register', 'App\Http\Controllers\LoginController@logincreate')->name('Login.login');
Route::get('/display/{id}', 'App\Http\Controllers\LoginController@info')->name('Login.userinfo');
Route::get('/display/{id}/edit', 'App\Http\Controllers\LoginController@edit')->name('Login.edit');
Route::Post('/display/{id}/edit', 'App\Http\Controllers\LoginController@update')->name('Login.edit');
Route::get('/destroy/{id}', 'App\Http\Controllers\LoginController@destroy')->name('Login.destroy');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');
});
//Route::post('/login', 'LoginController@process')->name('process');

Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('Login.profile');
Route::post('/profile', 'App\Http\Controllers\ProfileController@create')->name('Login.profile');
