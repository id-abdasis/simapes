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
    return view('layouts.app');
});


Route::group(['prefix' => 'santri', 'middleware' => 'cors'], function () {
    Route::get('/tambah-santri', 'SantriController@tambah_santri')->name('tambah-santri');
    Route::post('/tambah-santri', 'SantriController@simpan_santri')->name('simpan-santri');
});