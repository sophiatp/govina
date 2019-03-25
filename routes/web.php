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

Route::get('/', 'IndexController@index');

Route::get('/admin', function () {
    return view('admin.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('administrator', function () {
    return view('admin.master');
});

Route::resource('categories', 'CategoryController');
Route::resource('products', 'ProductController');
Route::resource('subcategories', 'SubCategoryController');

Route::get('/{subCategoryId}', [
    'as' => 'index.productBySubCategory',
    'uses' => 'IndexController@show'
]);

Route::get('/search', [
   'as' => 'index.search',
   'uses' => 'IndexController@search'
]);

Route::get('/contact', [
    'as' => 'index.contact',
    'uses' => 'IndexController@contact'
]);
