<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/provinsi', 'LokasiController@provinsi');
Route::get('/kabupaten/{id}', 'LokasiController@kabupaten');
Route::get('/kecamatan/{id}', 'LokasiController@kecamatan');
Route::get('/kelurahan/{id}', 'LokasiController@kelurahan');