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

// Routing Menu Products
Route::get('products', 'ProductsController@index');

Route::get('product-category','ProductCategoryController@index');

// Routing Menu Report
Route::get('report-products', 'ReportProductsController@index');

Route::get('report-product-category', 'ReportProductCategoryController@index');

Route::get('report-member', 'ReportMemberController@index');

Route::get('report-transaksi', 'ReportTransaksiController@index');

Route::get('report-pemesanan', 'ReportPemesananController@index');

Route::get('report-pembayaran', 'ReportPembayaranController@index');

// Routing Menu Transaksi
Route::get('transaksi', 'TransaksiController@index');

Route::get('transaksi-pemesanan', 'TransaksiPemesananController@index');

Route::get('transaksi-pembayaran', 'TransaksiPembayaranController@index');

// Routing Setting
Route::get('setting', 'SettingController@index');

Route::get('calendar', 'CalendarController@index');
