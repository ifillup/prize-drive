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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');
Route::post('/admin/products', 'ProductController@store');
Route::get('/admin/products', 'ProductController@index');
Route::get('/admin/boxes', 'LootBoxController@index');
Route::get('/open/{id}', 'LootBoxController@show');
Route::post('/admin/boxes', 'LootBoxController@store');
Route::post('/admin/add', 'PrizeController@store');
// Route::get('/admin/boxes', 'AdminController@boxes');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
