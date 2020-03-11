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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('home',[
//    'middleware' => 'auth',
//    function() {
//        return 'Welcome' . Auth::user()->name;
//    }
//]);
//Route::get('login', [
//    'as' => 'login',
//    function (){
//        return "You've reached to the login page";
//    }
//] );


//Route::get('auth/login', 'Auth\LoginController@showLoginForm');
//Route::post('auth/login', 'Auth\LoginController@login');
//Route::get('auth/logout', 'Auth\LoginController@logout');
//
//
//Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
//Route::post('auth/register', 'Auth\RegisterController@register’);

Route::get( '/', function(){
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/completed', function (){
    return view('completed');
});
