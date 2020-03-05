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

Route::get('hello', function () {
    echo '<h1> Hello Laravel</h1>';
});

//Route passing views
Route::get('belajar', function () {
    return view('belajar');
});

//Route to controler
//RRoute siswa controller ke function index
Route::get('siswa','SiswaController@index');

//Route Dosen
Route::get('dosen','DosenController@index');

Route::get('blog','BlogController@index');
Route::get('blog/about','BlogController@index');
Route::get('blog/contact','BlogController@index');

Route:: resource('category', 'categoryController');
Route:: resource('customer', 'customerController');
Route:: resource('product', 'ProductController');
Route:: resource('order', 'OrderController');
Route:: resource('order-detail', 'OrderDetailController');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');