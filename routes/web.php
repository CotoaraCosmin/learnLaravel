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

//Main Pages
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::resource('posts','PostsController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');


//Learn to code HTML & CSS
Route::get('/services/htmlcss','HtmlcssController@htmlcss');
Route::get('/services/css','HtmlcssController@css');
