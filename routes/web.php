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

Route::get('/','Main\MainController@mainpage');
Route::get('/mainpage','Main\MainController@mainpage');
Route::get('/contact','Main\MainController@contact');
Route::get('/halls/{cat}','Main\MainController@halls');
Route::get('/halls','Main\MainController@hall');
Route::post('/search','Main\MainController@search');
Route::post('/add_info','Main\MainController@add_info');
Route::get('/login','Main\MainController@login');
Route::get('/current_hall/{id}','Main\MainController@current_hall');

Route::get('/admin_main_table','Home\HomeController@main_table')->middleware('auth');
Route::get('/admin_messages_table','Home\HomeController@messages_table')->middleware('auth');
Route::get('/admin_additional_pictures_table','Home\HomeController@additional_pictures_table')->middleware('auth');

Route::post('/add_main_table','Home\HomeController@add_main_table');
Route::post('/add_additional_pictures_table','Home\HomeController@add_additional_pictures_table');
Route::post('/add_messages_table','Home\HomeController@add_messages_table');
Route::post('/place_delete','Home\HomeController@place_delete');
Route::post('/add_pic_delete','Home\HomeController@add_pic_delete');
Route::post('/message_delete','Home\HomeController@message_delete');
Route::post('/place_update','Home\HomeController@place_update');
Route::post('/message_seen','Home\HomeController@message_seen');

Auth::routes();

