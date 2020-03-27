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

Route::get('people/{id}', function ($id) {
    return 'People '.$id;
});

Route::get('people/{id?}', function ($id) {
    return 'People '.$id;
});

/* task1 end */
/* task 2*/
Route::get('/', 'MainPageController@index');

Route::get('user/', 'MainPageController@userShow');

Route::get('/about', function () {
    App::setLocale('ru');
    return view('main.about');
});
/* task 2 end */

Route::get('/products', function () {
    return view('products.index');
});


////Route::get('/', 'ProductController@index');
//Route::get('/{id}', 'ProductController@index');