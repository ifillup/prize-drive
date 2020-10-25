<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/account', 'InventoryController@show')->middleware('auth');
Route::get('/admin', 'AdminController@index');
Route::post('/admin/products', 'ProductController@store');
Route::get('/admin/products', 'ProductController@index');
Route::get('/admin/boxes', 'LootBoxController@index');
Route::get('/show/{id}', 'LootBoxController@show');

Route::get('/open/{id}', 'LootBoxController@open')->middleware('auth');
Route::post('/admin/boxes', 'LootBoxController@store');
Route::post('/admin/add', 'PrizeController@store');
// Route::get('/admin/boxes', 'AdminController@boxes');
Route::delete('admin/{id}', 'LootBoxController@destroy');
Route::post('admin/account/', 'AdminController@creditDebitUser');
Route::patch('admin/toggle/', 'AdminController@toggleAdmin');
Route::get('admin/publish/{id}', 'AdminController@publish');
Route::patch('admin/edit/{id}', 'PrizeController@update');
Route::post('sell', 'InventoryController@create');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
