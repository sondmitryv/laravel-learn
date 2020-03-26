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


/* task1 */

Route::get('test', function () {
    return 'Hello World';
});

Route::get('/products', function () {
    return view('products.index');
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('user/{id?}', function ($id) {
    return 'User '.$id;
});

/* task1 end */

Route::get('/products', function () {
    return view('products.index');
});

Route::get('/', 'ProductController@index');
Route::get('/{id}', 'ProductController@index');