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

Route::get('/welcome', function () {
    return view('welcome_basic');
})->middleware('auth.basic');

Route::get('/', ['as'=>'home','uses'=>'AppController@index']);

Route::get('/profile', 'ProfileController@edit_profile')->middleware('verified');

Route::get('/mensajes', function () {
    return view('mensajes');
});

Route::get('/nuevo_mensaje', function () {
    return view('mensajenuevo');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/mensajes', 'MessageController@index');
Route::get('/nuevo_mensaje', 'MessageController@create');