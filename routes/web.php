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
    return view('dashboard');
})->name('index');



Route::group(['prefix' => 'santri', 'middleware' => 'guest'], function () {
    Route::get('/tambah-santri', 'SantriController@tambah_santri')->name('tambah-santri');
    Route::post('/tambah-santri', 'SantriController@simpan_santri')->name('simpan-santri');
    Route::get('/sunting-santri/{id}/{nama_lengkap}', 'SantriController@sunting_santri')->name('sunting-santri');
    Route::post('/update-santri', 'SantriController@update_santri')->name('update-santri');
    Route::get('/daftar-santri', 'SantriController@daftar_santri')->name('daftar-santri');
    Route::post('/cari-santri', 'SantriController@cari_santri')->name('cari-santri');
});

Route::group(['prefix' => 'nasabah', 'middleware' => 'guest'], function ()
{
    Route::get('/', 'NasabahController@index')->name('nasabah-index');
    Route::get('/tambah-nasabah', 'NasabahController@tambah_nasabah')->name('tambah-nasabah');
    Route::get('/sunting-nasabah', 'NasabahController@tambah_nasabah')->name('sunting-nasabah');
    Route::post('/tambah-nasabah', 'NasabahController@create_nasabah')->name('create-nasabah');
    Route::get('/daftar-nasabah', 'NasabahController@daftar_nasabah')->name('daftar-nasabah');
    Route::get('/hapus-nasabah', 'NasabahController@hapus_nasabah')->name('hapus-nasabah');
});