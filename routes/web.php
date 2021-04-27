<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//User
Route::resource('/user', 'userController');
Route::get('/user/hapus/{id}', 'userController@destroy');

Route::resource('/barang', 'BarangController')->middleware('role:admin');
Route::get('/barang/hapus/{id}', 'BarangController@destroy');
Route::get('/barang/edit/{id}', 'BarangController@edit');

Route::resource('/supplier', 'SupplierController')->middleware('role:admin');
Route::get('/supplier/hapus/{id}', 'SupplierController@destroy');
Route::get('/supplier/edit/{id}', 'SupplierController@edit');

Route::resource('/akun', 'AkunController')->middleware('role:admin');
Route::get('/akun/hapus/{id}', 'AkunController@destroy');
Route::get('/akun/edit/{id}', 'AkunController@edit');
Route::get('/akun/setting', 'AkunController@show');
Route::get('/setting', 'SettingController@index')->name('setting.transaksi')->middleware('role:admin');
Route::post('/setting/simpan', 'SettingController@simpan');