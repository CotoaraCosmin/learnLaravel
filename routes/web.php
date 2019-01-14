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

//Blog and Login Routes
Route::resource('posts','PostsController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');


//Playground
Route::get('/playground/services','PlaygroundController@services');
Route::get('/playground/vuejs','PlaygroundController@vuejs');
Route::get('/playground/api','PlaygroundController@api');

//Learn to code HTML & CSS
Route::get('/services/htmlcss','HtmlcssController@htmlcss');
Route::get('/services/css','HtmlcssController@css');
Route::get('/services/visual','HtmlcssController@AppliedVisualDesign');
Route::get('/services/accessibility','HtmlcssController@AppliedAccessibility');
Route::get('/services/responsive','HtmlcssController@Responsive');
Route::get('/services/flexbox','HtmlcssController@Flexbox');
Route::get('/services/grid','HtmlcssController@Grid');

//VueJs Apps
Route::get('/playground/vueJs/appOne','VuejsController@appOne');