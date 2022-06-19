<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegBreederController;
use App\Http\Controllers\BreederController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KennelController;

/**
 * File of routes.
 * @author Álvaro Ramas Franco
 * @since 1.0.
 */
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

//Routes for user normals, routes protected with middleware.
Route::group(['prefix' => 'user', 'middleware' => ['user_normal']], function(){
    Route::get('/home', '\App\Http\Controllers\UserController@index')->name('user.home');   
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    Route::get('/culture', '\App\Http\Controllers\UserController@userculture')->name('user.culture');
    Route::get('/search', '\App\Http\Controllers\UserController@searchView')->name('user.search');
    Route::get('/config', '\App\Http\Controllers\UserController@config')->name('user.config');

    
});

//Routes for breeders, routes protected with middleware.

Route::group(['prefix' => 'breeder', 'middleware' => ['users']], function() {
    Route::get('/registerView', '\App\Http\Controllers\RegBreederController@index')->name('register.view');
    Route::get('/home', '\App\Http\Controllers\BreederController@index')->name('breeder.home');
    Route::post('/register', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    Route::get('/farm', '\App\Http\Controllers\KennelController@showFarm')->name('farm.view');
    Route::get('/farm/create', '\App\Http\Controllers\KennelController@formDog')->name('createdog.view');
    Route::post('/farm/create', '\App\Http\Controllers\KennelController@registerDog')->name('create.dog');
    Route::get('/culture', '\App\Http\Controllers\BreederController@culture')->name('culture');
    Route::get('/config', '\App\Http\Controllers\BreederController@config')->name('config');
    
    Route::get('/farm/update', '\App\Http\Controllers\KennelController@show')->name('modify.view');
    Route::put('/farm/update/editForm', '\App\Http\Controllers\KennelController@update')->name('modify');
    Route::get('/search', '\App\Http\Controllers\BreederController@searchView')->name('search');
    Route::delete('/farm/delete', '\App\Http\Controllers\KennelController@destroy')->name('delete.dog');

    });
