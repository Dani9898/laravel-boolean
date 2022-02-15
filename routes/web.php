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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'GuestController@home') -> name('home');

Route::get('/api/postcards/list', 'ApiController@getPostcards') -> name('api.postcards.list');

Route::get('/create/postcard', 'GuestController@createPostcard') -> name('create.postcard');
Route::post('/store/postcard', 'GuestController@storePostcard') -> name('store.postcard');