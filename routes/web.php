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
    return view('home');
});

Route::get('/userhome', 'PagesController@getUserHome');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');;

Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/upload', function () {
    return view('upload');
});




Route::get('/home','HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');