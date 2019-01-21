<?php
use App\Movie;
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

	$movies=Movie::get();
    return view('welcome',compact('movies'));
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/booking','HomeController@booking')->name('booking');
Route::get('/layout','HomeController@layout')->name('layout');
Route::get('/customer','HomeController@customer');

Route::get('login', 'SingleLoginController@showLoginForm')->name('login');
Route::post('login', 'SingleLoginController@login');
Route::post('logout', 'SingleLoginController@logout')->name('logout');
// Registration Routes...

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


Route::resource('admin',"AdminHomeController");
Route::resource('movie',"MovieController");

 // Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/home', 'HomeController@index')->name('home');
