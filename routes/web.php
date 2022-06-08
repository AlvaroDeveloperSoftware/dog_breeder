<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\HomeController;
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
    return view('auth/login');
});

Auth::routes();

//Rutas admin
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/register/breeder', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');

// Route::get('/register/breeder', 'App\Http\Controllers\RegBreederController@index')->name('register.breeder');

// Route::get('/home/breeder', '\App\Http\Controllers\HomeBreederController@index')->name('home.breeder');

//Route::get('/login', '\App\Http\Controllers\Auth\LoginController@login')->name('login');
//Rutas admin
Route::get('/home', '\App\Http\Controllers\HomeAdminController@index')->name('admin.home');

Route::group(['middleware'=>['auth:admin'], 'prefix' => 'admin'], function() {
     Route::get('/logout', function(){
        Auth::logout();
        return Redirect::to('login');
     });
    //  Route::put('/config', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');
    //  Route::get('/farm', 'App\Http\Controllers\RegBreederController@index')->name('register.breeder');
    //  Route::put('/farm/update', '\App\Http\Controllers\HomeBreederController@index');
    //  Route::post('/farm/create', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');
    //  Route::get('/farm/createView', 'App\Http\Controllers\RegBreederController@index')->name('register.breeder');
    //  Route::get('/search', '\App\Http\Controllers\HomeBreederController@index');
    //  Route::get('/search/result', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');
    //  Route::get('/culture', 'App\Http\Controllers\RegBreederController@index')->name('register.breeder');
    //  Route::get('/home', '\App\Http\Controllers\HomeBreederController@index');
    //  Route::get('/show', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');
    //  Route::delete('/farm/{id}', 'App\Http\Controllers\RegBreederController@index')->name('register.breeder');
    });

    Route::post('/register', '\App\Http\Controllers\Auth\RegisterController@create')->name('create.breeder');
    Route::get('/registerView', '\App\Http\Controllers\Auth\RegisterController@index')->name('register.breeder');

//Rutas criador
Route::group(['middleware'=>['auth:user'], 'prefix' => 'breeder'], function() {
    Route::get('/home', '\App\Http\Controllers\HomeController@index')->name('breeder.home');

    Route::get('/logout', function(){
        Auth::logout();
        return Redirect::to('login');
     });
    //     //  Route::get('/config', '\App\Http\Controllers\HomeBreederController@index');
    //    //  Route::put('/config', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');
    //    //  Route::get('/farm', 'App\Http\Controllers\RegBreederController@index')->name('register.breeder');
    //    //  Route::put('/farm/update', '\App\Http\Controllers\HomeBreederController@index');
    //    //  Route::post('/farm/create', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');
    //    //  Route::get('/farm/createView', 'App\Http\Controllers\RegBreederController@index')->name('register.breeder');
    //    //  Route::get('/search', '\App\Http\Controllers\HomeBreederController@index');
    //    //  Route::get('/search/result', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');
    //    //  Route::get('/culture', 'App\Http\Controllers\RegBreederController@index')->name('register.breeder');
    //    //  Route::get('/home', '\App\Http\Controllers\HomeBreederController@index');
    //    //  Route::get('/show', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');
    //    //  Route::delete('/farm/{id}', 'App\Http\Controllers\RegBreederController@index')->name('register.breeder');
    //    });

    // Route::group(['middleware'=>'user_noraml', 'prefix' => 'user'], function() {
    //     Route::get('/home', '\App\Http\Controllers\HomeBreederController@index')->name('breeder.home');
    //     Route::post('/register', '\App\Http\Controllers\RegUserNormalController@createUser')->name('create.user');
    //     Route::get('/registerView', '\App\Http\Controllers\RegUserNormalController@index')->name('register.user');
    //     Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    });
    // });

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
