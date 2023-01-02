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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//home
Route::get('/lokasi', 'LokasiController@index')->name('lokasi');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
//produk
Route::get('/produk', 'ProdukController@index')->name('produk');
Route::get('/produk/create', 'ProdukController@create')->name('produk.create');
Route::post('/produk', 'ProdukController@store')->name('produk.store');
Route::post('/produk/delete/{id}', 'ProdukController@destroy')->name('produk.destroy');
Route::get('/produk/edit/{id}', 'ProdukController@edit')->name('produk.edit');
Route::post('/produk/update/{id}', 'ProdukController@update')->name('produk.update');
//user
Route::get('/user', 'UserController@index')->name('user');
Route::get('user/create', 'UserController@create')->name('user.create');
Route::post('/user', 'UserController@store')->name('user.store');
Route::get('user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update');
Route::post('/user/delete/{id}', 'UserController@destroy')->name('user.destroy');
//transaksi
Route::get('/usertrx', 'UserTrxController@index')->name('usertrx');
//pesan
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('/usertrx', 'UserTrxController@index')->name('usertrx');
Route::get('/usertrx/edit/{id}', 'UserTrxController@edit')->name('usertrx.edit');
Route::post('/usertrx/update/{id}', 'UserTrxController@update')->name('usertrx.update');
Route::post('/usertrx/delete/{id}', 'UserTrxController@destroy')->name('usertrx.destroy');
Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');

Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');
Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');
