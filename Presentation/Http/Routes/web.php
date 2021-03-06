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

Route::get('/products/all','ProductController@showList')->name('productList');

Route::get('/products/new', 'ProductController@showForm')->name('productForm');
Route::post('/products/all', 'ProductController@sendForm')->name('sendProductForm');


