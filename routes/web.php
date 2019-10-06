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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kategori_artikel','KategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create','KategoriArtikelController@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel','KategoriArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}','KategoriArtikelController@show')->name('kategori_artikel.show');

Route::get('refresh_captcha','HomeController@refreshCaptcha')->name('refresh_captcha');

Route::get('/kategori_berita','kategoriberitaController@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create','kategoriberitaController@create')->name('kategori_berita.create');
Route::post('/kategori_berita','kategoriberitaController@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}','kategoriberitaController@show')->name('kategori_berita.show');


Route::get('/kategori_galeri','kategorigaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create','kategorigaleriController@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri','kategorigaleriController@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}','kategorigaleriController@show')->name('kategori_galeri.show');


Route::get('/kategori_pengumuman','kategoripengumumanController@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create','kategoripengumumanController@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman','kategoripengumumanController@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}','kategoripengumumanController@show')->name('kategori_pengumuman.show');


Route::get('/artikel','artikelController@index')->name('artikel.index');
Route::get('/artikel/create','artikelController@create')->name('artikel.create');
Route::post('/artikel','artikelController@store')->name('artikel.store');
Route::get('/artikel/{id}','artikelController@show')->name('artikel.show');

Route::get('/berita','beritaController@index')->name('berita.index');
Route::get('/berita/create','beritaController@create')->name('berita.create');
Route::post('/berita','beritaController@store')->name('berita.store');
Route::get('/berita/{id}','beritaController@show')->name('berita.show');

Route::get('/galeri','galeriController@index')->name('galeri.index');
Route::get('/galeri/create','galeriController@create')->name('galeri.create');
Route::post('/galeri','galeriController@store')->name('galeri.store');
Route::get('/galeri/{id}','galeriController@show')->name('galeri.show');


Route::get('/pengumuman','pengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create','pengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman','pengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}','pengumumanController@show')->name('pengumuman.show');

