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

///ADMINstart
//profile
Route::get('/admin', 'MenuController@dashboard');
Route::get('/admin/profile/sejarah');
Route::get('/admin/profile/visimisi');
Route::get('/admin/profile/strukturorganisasi');
Route::get('/admin/profile/upayakesehatan');
Route::get('/admin/profile/kompetensisdm');

//layanan dan tarif
//loop kategori ATAU href ke controller

//kepustakaan
Route::get('/admin/kepustakaan/penelitian');
Route::get('/admin/kepustakaan/perpustakaan');
Route::get('/admin/kepustakaan/galeri');
Route::get('/admin/kepustakaan/download');

//berita dan artikel
Route::get('/admin/beritadanartikel', 'MenuController@beritadanartikel'); //done
//berita
Route::get('/admin/beritadanartikel/berita/create', 'BeritaController@create'); //menampilkan form tambah
Route::get('/admin/beritadanartikel/berita/{berita}', 'BeritaController@show'); //menampilkan detail table
Route::post('/admin/beritadanartikel/berita', 'BeritaController@store');  //Untuk menyimpan data yang telah ditambah didalma method create
Route::delete('/admin/beritadanartikel/berita/{berita}', 'BeritaController@destroy'); //Untuk menghapus
Route::get('/admin/beritadanartikel/berita/{berita}/edit', 'BeritaController@edit'); // untuk menampilkan form edit
Route::patch('/admin/beritadanartikel/berita/{berita}', 'BeritaController@update'); // untuk menyimpan dari form edit 

//artikel
Route::get('/admin/beritadanartikel/artikel/create', 'ArtikelController@create'); //menampilkan form tambah
Route::get('/admin/beritadanartikel/artikel/{artikel}', 'ArtikelController@show'); //menampilkan detail table
Route::post('/admin/beritadanartikel/artikel', 'ArtikelController@store');  //Untuk menyimpan data yang telah ditambah didalma method create
Route::delete('/admin/beritadanartikel/artikel/{artikel}', 'ArtikelController@destroy'); //Untuk menghapus
Route::get('/admin/beritadanartikel/artikel/{artikel}/edit', 'ArtikelController@edit'); // untuk menampilkan form edit
Route::patch('/admin/beritadanartikel/artikel/{artikel}', 'ArtikelController@update'); // untuk menyimpan dari form edit 


///kepustakaan
//penelitian
Route::get('/admin/penelitian', 'PenelitianController@index');
Route::get('/admin/penelitian/create', 'PenelitianController@create');

//perpustakaan
Route::get('/admin/perpustakaan', 'PerpustakaanController@index');
Route::get('/admin/perpustakaan/create', 'PerpustakaanController@create');

//galeri
//download

///profle
//sejarah
Route::get('/admin/profile/');

///visi dan misi
Route::get('/admin/profile/visidanmisi', 'MenuController@visidanmisi');
//visi
Route::get('/admin/profile/visidanmisi/visi/create', 'VisiController@create');

//misi
Route::get('/admin/profile/visidanmisi/misi/create', 'MisiController@create');


///ADMINend
