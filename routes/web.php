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

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/category','CategoryController@storeCategory');
Route::get('/category', 'CategoryController@getAllCategories');
Route::get('/category/{id}', 'CategoryController@getCategory');
Route::delete('/category/{id}', 'CategoryController@deleteCategory');
Route::put('/category/{id}', 'CategoryController@updateCategory');
