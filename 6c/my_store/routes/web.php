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

Route::get('/', 'allController@index')->name('home');
Route::get('/others', 'allController@others')->name('others');
Route::post('/product/add', 'allController@add')->name('product.add');
Route::post('/cashier/add', 'allController@cashierAdd')->name('cashier.add');
Route::put('/cashier/edit', 'allController@cashierEdit')->name('cashier.edit');
Route::post('/category/add', 'allController@categoryAdd')->name('category.add');
Route::put('/category/edit', 'allController@categoryEdit')->name('category.edit');
Route::get('/cashier/delete/{id}', 'allController@cashierDelete')
      ->name('cashier.delete');
Route::get('/category/delete/{id}', 'allController@categoryDelete')
      ->name('category.delete');
Route::get('/product/delete/{id}', 'allController@productDelete')
      ->name('product.delete');