<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegBreederController;
use App\Http\Controllers\BreederController;
use App\Http\Controllers\UserController;
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

//Rutas admin

Route::group(['prefix' => 'user', 'middleware' => ['user_normal']], function(){
    Route::get('/home', '\App\Http\Controllers\UserController@index')->name('user.home');   
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    Route::get('/culture', '\App\Http\Controllers\UserController@userculture')->name('user.culture');
    });

// Route::post('/register/breeder', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');

// Route::get('/register/breeder', 'App\Http\Controllers\RegBreederController@index')->name('register.breeder');

// Route::get('/home/breeder', '\App\Http\Controllers\HomeBreederController@index')->name('home.breeder');

//Route::get('/login', '\App\Http\Controllers\Auth\LoginController@login')->name('login');
//Rutas admin



// Route::prefix('admin')->middleware(['admin'])->group(function() {
//     Route::get('/login', 'Auth\AdminLoginController@loginForm')->name('admin.login');
//     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.post');
//     Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
//     Route::view('/home', '\App\Http\Controllers\UserAdminController@index')->name('admin.home');
//      });
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

  

//Rutas criador
Route::group(['prefix' => 'breeder', 'middleware' => ['users']], function() {
    Route::get('/registerView', '\App\Http\Controllers\RegBreederController@index')->name('register.view');
    Route::get('/home', '\App\Http\Controllers\BreederController@index')->name('breeder.home');
    Route::post('/register', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    Route::get('/farm', '\App\Http\Controllers\KennelController@showFarm')->name('farm.view');
    Route::get('/farm/create', '\App\Http\Controllers\KennelController@formDog')->name('createdog.view');
    Route::post('/farm/create', '\App\Http\Controllers\KennelController@registerDog')->name('create.dog');
    Route::get('/culture', '\App\Http\Controllers\BreederController@culture')->name('culture');
    //     //  Route::get('/config', '\App\Http\Controllers\HomeBreederController@index');
    //    //  Route::put('/config', '\App\Http\Controllers\RegBreederController@createUserBreed')->name('create.breeder');
    
    //    //  Route::put('/farm/update', '\App\Http\Controllers\HomeBreederController@index');
    
    //    //  Route::get('/farm/createView', 'App\Http\Controllers\RegBreederController@index')->name('register.breeder');
    Route::get('/search', '\App\Http\Controllers\HomeBreederController@searchView')->name('search.dog');
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
