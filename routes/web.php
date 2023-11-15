<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

//pembeli
route::get('/pengguna','PenggunaController@index')->name('pengguna');
route::get('/pengguna/create','PenggunaController@create');
route::post('/pengguna/store','penggunaController@store');
route::get('/pengguna/edit/{id_user}','penggunaController@edit');
route::post('/pengguna/update/{id_user}','penggunaController@update');
route::get('/pengguna/destroy/{id_user}','penggunaController@destroy');

//jenis
route::get('/jenis','jenisController@index')->name('jenis');
route::get('/jenis/create','jenisController@create');
route::post('/jenis/store','jenisController@store');
route::get('/jenis/edit/{id_jenis}','jenisController@edit');
route::post('/jenis/update/{id_jenis}','jenisController@update');
route::get('/jenis/destroy/{id_jenis}','jenisController@destroy');

//pemnbeli
route::get('/pembeli','pembeliController@index')->name('pembeli');
route::get('/pembeli/create','pembeliController@create');
route::post('/pembeli/store','pembeliController@store');
route::get('/pembeli/edit/{id_pembeli}','pembeliController@edit');
route::post('/pembeli/update/{id_pembeli}','pembeliController@update');
route::get('/pembeli/destroy/{id_pembeli}','pembeliController@destroy');

//barang
route::get('/barang','barangController@index')->name('barang');
route::get('/barang/create','barangController@create');
route::post('/barang/store','barangController@store');
route::get('barang/edit/{id_barang}','barangController@edit');
route::post('/barang/update/{id_barang}','barangController@update');
route::get('/barang/destroy/{id_barang}','barangController@destroy');

//penjualan
route::get('/penjualan','penjualanController@index')->name('penjualan');
route::get('/penjualan/create','penjualanController@create');
route::get('/cari/pembeli','penjualanController@cari')->name('pembeli/cari');
route::get('/cari/barang','penjualanController@cari1')->name('barang/cari');
route::post('/simpan_transaksi','penjualanController@simpan_transaksi')->name('simpan_transaksi');
route::get('/penjualan/show/{id_penjualan}','penjualanController@show');

//laporan
route::get('/laporan','laporanController@index');
route::get('/laporan/cetak','laporanController@cetak');