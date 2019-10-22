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
    Route::get('/sunting-santri/{id}/{nama_lengkap}', 'SantriController@sunting_santri')->name('sunting-santri');
    Route::post('/update-santri', 'SantriController@update_santri')->name('update-santri');
    Route::get('/daftar-santri', 'SantriController@daftar_santri')->name('daftar-santri');
});
