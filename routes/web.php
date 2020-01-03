<?php

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

//auth
Auth::routes();

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//login page
Route::get('/', 'HomeController@index')->name('welcome');

//user register
Route::get('/user-register', 'HomeController@register')->name('user-register');
Route::post('/create-register', 'HomeController@userResigter')->name('user-create');

//home page of the project
Route::get('/home', 'HomeController@index')->name('home');

//profile
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/{id}', 'ProfileController@index')->name('user_profile');

//followers

Route::post('/followers', 'FolllowController@index')->name('user_follow')->middleware('auth');



Route::post('/logout',function (Request $request){
    Auth::logout();
    return redirect('/');
})->name('logout');


