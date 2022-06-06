<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegBreederController;
use App\Http\Controllers\UserBreedController;
use App\Http\Controllers\HomeBreederController;
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
     return view('/auth/login');
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/register/breeder', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');

Route::get('/register/breeder', 'App\Http\Controllers\RegBreederController@index')->name('register.breeder');

Route::get('/home/breeder', '\App\Http\Controllers\HomeBreederController@index')->name('home.breeder');

Route::get('/breeder/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::group(['middleware'=>'user_breed'], function() {
//     Route::get('/home/breed', '\App\Http\Controllers\HomeBreederController@index');
// });

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

