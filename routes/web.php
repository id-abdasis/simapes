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



Route::group(['prefix' => 'santri', 'middleware' => ['auth', 'RoleCheck:nasabah']], function () {
    Route::get('/tambah-santri', 'SantriController@tambah_santri')->name('tambah-santri');
    Route::post('/tambah-santri', 'SantriController@simpan_santri')->name('simpan-santri');
    Route::get('/sunting-santri/{id}/{nama_lengkap}', 'SantriController@sunting_santri')->name('sunting-santri');
    Route::post('/update-santri', 'SantriController@update_santri')->name('update-santri');
    Route::get('/daftar-santri', 'SantriController@daftar_santri')->name('daftar-santri');
    Route::post('/cari-santri', 'SantriController@cari_santri')->name('cari-santri');
});

Route::group(['prefix' => 'nasabah', 'middleware' => ['auth', 'RoleCheck:ebank']], function ()
{
    Route::get('/', 'NasabahController@index')->name('nasabah-index');
    Route::get('/tambah-nasabah', 'NasabahController@tambah_nasabah')->name('tambah-nasabah');
    Route::get('/sunting-nasabah', 'NasabahController@tambah_nasabah')->name('sunting-nasabah');
    Route::post('/tambah-nasabah', 'NasabahController@create_nasabah')->name('create-nasabah');
    Route::get('/daftar-nasabah', 'NasabahController@daftar_nasabah')->name('daftar-nasabah');
    Route::get('/hapus-nasabah', 'NasabahController@hapus_nasabah')->name('hapus-nasabah');
});

Route::group(['prefix' => 'pegawai'], function () {
    Route::get('/', 'PegawaiController@index')->name('index-pegawai');
    Route::get('tambah-pegawai' , 'PegawaiController@tambah_pegawai')->name('tambah-pegawai');
    Route::post('tambah-pegawai', 'PegawaiController@store_pegawai')->name('store-pegawai');
    Route::get('sign-out', 'PegawaiController@sign_out')->name('signout');

});

Route::group(['prefix' => 'transaksi', 'middleware' => ['auth', 'RoleCheck:ebank']], function () {
    Route::get('/', 'EbankController@index')->name('transaksi.index');
    Route::get('setor-tunai', 'EbankController@setor_tunai')->name('transaksi.setor-tunai');
    Route::get('tarik-tunai', 'EbankController@tarik_tunai')->name('transaksi.tarik-tunai');
    Route::get('mutasi-tabungan', 'EbankController@mutasi_tabungan')->name('transaksi.mutasi-tabungan');
    Route::get('laporan-ebank', 'EbankController@laporan_ebank')->name('transaksi.laporan-ebank');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
