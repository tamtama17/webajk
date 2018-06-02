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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/matkul', function () {
    return view('matkul');
});





Auth::routes();

Route::get('/inventaris', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->name('home');
Route::post('/input_barang', 'HomeController@input_barang');
Route::get('/deled/{id}', 'HomeController@deled');
Route::post('/edit_barang/{id}', 'HomeController@update_barang');
Route::post('/edit_admin/{id}', 'HomeController@update_admin');