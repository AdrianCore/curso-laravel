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

Route::get('/', 'MainController@index')->name('main');

Route::get('products', 'ProductController@productsIndex')->name('products.index');

Route::get('products/create', 'ProductController@productsCreate')->name('products.create');

Route::post('products', 'ProductController@productsStore')->name('products.store');

Route::get('products/{product}', 'ProductController@productsShow')->name('products.show');

Route::get('products/{product}/edit', 'ProductController@productsEdit')->name('products.edit');

Route::match(['put','patch'], 'products/{product}', 'ProductController@productsUpdate')->name('products.update');

Route::delete('products/{product}', 'ProductController@productsDestroy')->name('products.destroy');

