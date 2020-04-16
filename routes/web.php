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
    return view('welcome');
});

Auth::routes();

Route::namespace('Admin')->prefix('admin')->as('admin.')->middleware('isadmin')->group(function()
{
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/categories','CategoriesController');
    Route::resource('/arts','ArtsController');
});





Route::get('/userhome', 'PagesController@getUserHome');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');;

Route::get('/messages', 'MessagesController@getMessages');

Route::get('/download', 'DownloadsController@index');

Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/upload', function () {
    return view('upload');
});



