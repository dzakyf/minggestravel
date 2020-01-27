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
Route::get('/admin/kepustakaan/penelitian', 'PenelitianController@index');
Route::get('/admin/kepustakaan/penelitian/create', 'PenelitianController@create');
Route::get('/admin/kepustakaan/penelitian/{penelitian}', 'PenelitianController@show'); 
Route::post('/admin/kepustakaan/penelitian', 'PenelitianController@store');  
Route::delete('/admin/kepustakaan/penelitian/{penelitian}', 'PenelitianController@destroy'); 
Route::get('/admin/kepustakaan/penelitian/{penelitian}/edit', 'PenelitianController@edit'); 
Route::patch('/admin/kepustakaan/penelitian/{penelitian}', 'PenelitianController@update'); 

//perpustakaan
Route::get('/admin/kepustakaan/perpustakaan', 'PerpustakaanController@index');
Route::get('/admin/kepustakaan/perpustakaan/create', 'PerpustakaanController@create');  
Route::get('/admin/kepustakaan/perpustakaan/{perpustakaan}', 'PerpustakaanController@show'); 
Route::post('/admin/kepustakaan/perpustakaan', 'PerpustakaanController@store');  
Route::delete('/admin/kepustakaan/perpustakaan/{perpustakaan}', 'PerpustakaanController@destroy'); 
Route::get('/admin/kepustakaan/perpustakaan/{perpustakaan}/edit', 'PerpustakaanController@edit'); 
Route::patch('/admin/kepustakaan/perpustakaan/{perpustakaan}', 'PerpustakaanController@update'); 

//galeri
Route::get('/admin/kepustakaan/galeri', 'GaleriController@index');
Route::get('/admin/kepustakaan/galeri/create', 'GaleriController@create');
Route::get('/admin/kepustakaan/galeri/{galeri}', 'GaleriController@show'); 
Route::post('/admin/kepustakaan/galeri', 'GaleriController@store');  
Route::delete('/admin/kepustakaan/galeri/{galeri}', 'GaleriController@destroy'); 
Route::get('/admin/kepustakaan/galeri/{galeri}/edit', 'GaleriController@edit'); 
Route::patch('/admin/kepustakaan/galeri/{galeri}', 'GaleriController@update'); 

//download
Route::get('/admin/kepustakaan/download', 'DownloadController@index');
Route::get('/admin/kepustakaan/download/create', 'DownloadController@create');
Route::get('/admin/kepustakaan/download/{download}', 'DownloadController@show'); 
Route::post('/admin/kepustakaan/download', 'DownloadController@store');  
Route::delete('/admin/kepustakaan/download/{download}', 'DownloadController@destroy'); 
Route::get('/admin/kepustakaan/download/{download}/edit', 'DownloadController@edit'); 
Route::patch('/admin/kepustakaan/download/{download}', 'DownloadController@update');

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
