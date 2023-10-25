<?php

use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Https\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('beranda');
// });
Route::get('/', [ControllersHomeController::class, 'index']);
Route::group(['namespace' => 'App\Http\Controllers'], function(){
    Route::group(['middleware' => ['guest']], function(){
        Route::get('/login', 'LoginController@show')->name('login');
        Route::post('/login', 'LoginController@login')->name('login.do');
        Route::get('/register', 'RegisterController@show')->name('register');
        Route::post('/register', 'RegisterController@register')->name('register.do');
    });

    Route::group(['middleware' => ['auth']], function(){
        Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
        Route::get('logout', 'LoginController@logout')->name('logout');
    });
});