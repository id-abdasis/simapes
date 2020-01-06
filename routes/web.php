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



Route::group(['prefix' => 'santri', 'middleware' => ['auth', 'RoleCheck:admin']], function () {
    Route::get('/tambah-santri', 'SantriController@tambah_santri')->name('tambah-santri');
    Route::post('/tambah-santri', 'SantriController@simpan_santri')->name('simpan-santri');
    Route::get('/sunting-santri/{id}/{nama_lengkap}', 'SantriController@sunting_santri')->name('sunting-santri');
    Route::post('/update-santri', 'SantriController@update_santri')->name('update-santri');
    Route::get('/daftar-santri', 'SantriController@daftar_santri')->name('daftar-santri');
    Route::post('/cari-santri', 'SantriController@cari_santri')->name('cari-santri');
});

Route::group(['prefix' => 'nasabah', 'middleware' => ['auth', 'RoleCheck:admin']], function ()
{
    Route::get('/', 'NasabahController@index')->name('nasabah-index');
    Route::get('/tambah-nasabah', 'NasabahController@tambah_nasabah')->name('tambah-nasabah');
    Route::get('/sunting-nasabah', 'NasabahController@tambah_nasabah')->name('sunting-nasabah');
    Route::post('/tambah-nasabah', 'NasabahController@create_nasabah')->name('create-nasabah');
    Route::get('/daftar-nasabah', 'NasabahController@daftar_nasabah')->name('daftar-nasabah');
    Route::get('/hapus-nasabah', 'NasabahController@hapus_nasabah')->name('hapus-nasabah');
    Route::post('verifikasi-nasabah', 'NasabahController@verifikasiNasabah')->name('nasabah.verifkasi-nasabah');

});

Route::group(['prefix' => 'pegawai'], function () {
    Route::get('/', 'PegawaiController@index')->name('index-pegawai');
    Route::get('tambah-pegawai' , 'PegawaiController@tambah_pegawai')->name('tambah-pegawai');
    Route::post('tambah-pegawai', 'PegawaiController@store_pegawai')->name('store-pegawai');
    Route::get('daftar-pegawai', 'PegawaiController@daftar_pegawai')->name('daftar-pegawai');
    Route::get('sign-out', 'PegawaiController@sign_out')->name('signout');

});

Route::group(['prefix' => 'transaksi', 'middleware' => ['auth', 'RoleCheck:admin']], function () {
    Route::get('/', 'EbankController@index')->name('transaksi.index');
    Route::get('setor-tunai', 'SetorTunaiController@setor_tunai')->name('transaksi.setor-tunai');
    Route::post('setor-tunai', 'SetorTunaiController@store_setor_tunai')->name('transaksi.setor-tunai');
    Route::get('tarik-tunai', 'TarikTunaiController@tarik_tunai')->name('transaksi.tarik-tunai');
    Route::get('mutasi-tabungan', 'MutasiTabunganController@index')->name('transaksi.mutasi-tabungan');
    Route::get('laporan-ebank', 'MutasiTabungaControllern@laporan')->name('transaksi.laporan-ebank');
});

Route::group(['prefix' => 'pertokoan'], function () {
    Route::get('tambah-kategori', 'KategoriBarangController@tambahKategori')->name('pertokoan.tambah-kategori');
    Route::post('store-kategori', 'KategoriBarangController@storeKategori')->name('pertokoan.store-kategori');
    Route::get('tambah-barang', 'BarangControlles@tambahBarang')->name('pertokoan.tambah-barang');
    Route::get('hapus-kategori/{id}', 'KategoriBarangController@hapusKategori')->name('pertokoan.hapus-kategori');
    Route::get('edit-kategori/{id}', 'KategoriBarangController@editKategori')->name('pertokoan.edit-kategori');
    Route::post('update-kategori', 'KategoriBarangController@updateKategori')->name('pertokoan.update-kategori');


});

Auth::routes();
Route::get('/installation', 'SimapesController@install')->name('insatall');
Route::get('/home', 'HomeController@index')->name('home');
