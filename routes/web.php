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
    return view('index');
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

///layanan dan tarif
Route::get('/admin/layanandantarif', 'MenuController@layanandantarif'); //done
//jenispelayanan
Route::get('/admin/layanandantarif/jenispelayanan/create', 'JenisPelayananController@create');
//kategoripelayanan
Route::get('/admin/layanandantarif/kategoripelayanan/create', 'KategoriPelayananController@create');
Route::get('/admin/layanandantarif/kategoripelayanan/{query}', 'KategoriPelayananController@show');
Route::post('/admin/layanandantarif/kategoripelayanan', 'KategoriPelayananController@store'); 
Route::delete('/admin/layanandantarif/kategoripelayanan/{query}', 'KategoriPelayananController@destroy');
Route::get('/admin/layanandantarif/kategoripelayanan/{query}/edit', 'KategoriPelayananController@edit');
Route::patch('/admin/layanandantarif/kategoripelayanan/{query}', 'KategoriPelayananController@update'); 

///kontak
Route::get('/admin/kontak', 'KontakController@index');
Route::get('/admin/kontak/create', 'KontakController@create');
Route::get('/admin/kontak/{kontak}', 'KontakController@show'); 
Route::post('/admin/kontak', 'KontakController@store');  
Route::delete('/admin/kontak/{kontak}', 'KontakController@destroy'); 
Route::get('/admin/kontak/{kontak}/edit', 'KontakController@edit'); 
Route::patch('/admin/kontak/{kontak}', 'KontakController@update'); 


///profle
//sejarah
Route::get('/admin/profile/sejarah', 'SejarahController@index');
Route::get('/admin/profile/sejarah/create','SejarahController@create');
Route::get('/admin/profile/sejarah/{sejarah}','SejarahController@show');
Route::post('/admin/profile/sejarah', 'SejarahController@store');  //Untuk menyimpan data yang telah ditambah didalma method create
Route::delete('/admin/profile/sejarah/{sejarah}', 'SejarahController@destroy'); //Untuk menghapus
Route::get('/admin/profile/sejarah/{sejarah}/edit', 'SejarahController@edit'); // untuk menampilkan form edit
Route::patch('/admin/profile/sejarah/{sejarah}', 'SejarahController@update'); // untuk menyimpan dari form edit 

//struktur organisasi
Route::get('/admin/profile/strukturorganisasi', 'StrukturOrganisasiController@index');
Route::get('/admin/profile/strukturorganisasi/create','StrukturOrganisasiController@create');
Route::get('/admin/profile/strukturorganisasi/{struktur_organisasi}','StrukturOrganisasiController@show');
Route::post('/admin/profile/strukturorganisasi/', 'StrukturOrganisasiController@store');  //Untuk menyimpan data yang telah ditambah didalma method create
Route::delete('/admin/profile/strukturorganisasi/{struktur_organisasi}', 'StrukturOrganisasiController@destroy'); //Untuk menghapus
Route::get('/admin/profile/strukturorganisasi/{struktur_organisasi}/edit', 'StrukturOrganisasiController@edit'); // untuk menampilkan form edit
Route::patch('/admin/profile/strukturorganisasi/{struktur_organisasi}', 'StrukturOrganisasiController@update'); // untuk menyimpan dari form edit 

//upaya kesehatan
Route::get('/admin/profile/upayakesehatan', 'UpayaKesehatanController@index');
Route::get('/admin/profile/upayakesehatan/create','UpayaKesehatanController@create');
Route::get('/admin/profile/upayakesehatan/{upaya_kesehatan}','UpayaKesehatanController@show');
Route::post('/admin/profile/upayakesehatan/', 'UpayaKesehatanController@store');  //Untuk menyimpan data yang telah ditambah didalma method create
Route::delete('/admin/profile/upayakesehatan/{upaya_kesehatan}', 'UpayaKesehatanController@destroy'); //Untuk menghapus
Route::get('/admin/profile/upayakesehatan/{upaya_kesehatan}/edit', 'UpayaKesehatanController@edit'); // untuk menampilkan form edit
Route::patch('/admin/profile/upayakesehatan/{upaya_kesehatan}', 'UpayaKesehatanController@update'); // untuk menyimpan dari form edit 

//kompetensi SDM
Route::get('/admin/profile/kompetensisdm', 'KompetensiSDMController@index');
Route::get('/admin/profile/kompetensisdm/create','KompetensiSDMController@create');
Route::get('/admin/profile/kompetensisdm/{kompetensi_sdm}','KompetensiSDMController@show');
Route::post('/admin/profile/kompetensisdm/', 'KompetensiSDMController@store');  //Untuk menyimpan data yang telah ditambah didalma method create
Route::delete('/admin/profile/kompetensisdm/{kompetensi_sdm}', 'KompetensiSDMController@destroy'); //Untuk menghapus
Route::get('/admin/profile/kompetensisdm/{kompetensi_sdm}/edit', 'KompetensiSDMController@edit'); // untuk menampilkan form edit
Route::patch('/admin/profile/kompetensisdm/{kompetensi_sdm}', 'KompetensiSDMController@update'); // untuk menyimpan dari form edit 

//visi dan misi
Route::get('/admin/profile/visidanmisi', 'MenuController@visidanmisi');

//visi
Route::get('/admin/profile/visidanmisi/visi/create', 'VisiController@create');
Route::get('/admin/profile/visidanmisi/visi/{visi}','VisiController@show');
Route::post('/admin/profile/visidanmisi/visi', 'VisiController@store');  //Untuk menyimpan data yang telah ditambah didalma method create
Route::delete('/admin/profile/visidanmisi/visi/{visi}', 'VisiController@destroy'); //Untuk menghapus
Route::get('/admin/profile/visidanmisi/visi/{visi}/edit', 'VisiController@edit'); // untuk menampilkan form edit
Route::patch('/admin/profile/visidanmisi/visi/{visi}', 'VisiController@update'); // untuk menyimpan dari form edit 


//misi
Route::get('/admin/profile/visidanmisi/misi/create', 'MisiController@create');
Route::get('/admin/profile/visidanmisi/misi/{misi}','MisiController@show');
Route::post('/admin/profile/visidanmisi/misi', 'MisiController@store');  //Untuk menyimpan data yang telah ditambah didalma method create
Route::delete('/admin/profile/visidanmisi/misi/{misi}', 'MisiController@destroy'); //Untuk menghapus
Route::get('/admin/profile/visidanmisi/misi/{misi}/edit', 'MisiController@edit'); // untuk menampilkan form edit
Route::patch('/admin/profile/visidanmisi/misi/{misi}', 'MisiController@update'); // untuk menyimpan dari form edit 



///ADMINend
