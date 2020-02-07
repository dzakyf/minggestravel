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

Route::get('/', 'PagesController@index');
Route::get('/sejarah', 'PagesController@sejarah');
Route::get('/visidanmisi', 'PagesController@visidanmisi');
Route::get('/strukturorganisasi', 'PagesController@strukturorganisasi');
Route::get('/upayakesehatan', 'PagesController@upayakesehatan');
Route::get('/kompetensisdm', 'PagesController@kompetensisdm');
Route::get('/berita', 'PagesController@berita');
Route::get('/artikel', 'PagesController@artikel');
Route::get('/berita/{berita}', 'PagesController@showberita');   
Route::get('/artikel/{artikel}', 'PagesController@showartikel');
Route::get('/penelitian', 'PagesController@penelitian');
Route::get('/perpustakaan', 'PagesController@perpustakaan');
Route::get('/perpustakaan/{perpustakaan}', 'PagesController@showperpustakaan');
Route::get('/galeri', 'PagesController@galeri');
Route::get('/download', 'PagesController@download');
Route::get('/kontak', 'PagesController@kontak');
Route::get('/layanan/{jenispelayanan}', 'PagesController@layanan');
Route::get('/tarif', 'PagesController@tarif');

//Register
Route::get('register', 'AuthController@register');
Route::post('postregister', 'AuthController@postregister'); 

//login and logout
Route::get('/login', 'AuthController@login')->name('login')->middleware('passed.login.admin');;
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

//this route group protected with middleware auth Fan :)
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function(){
    ///Admin Start
    Route::get('/', 'MenuController@dashboard');
    //berita dan artikel
    Route::group(['prefix' => 'beritadanartikel'], function(){
        //index
        Route::get('/', 'MenuController@beritadanartikel');
        //berita
        Route::get('berita', 'BeritaController@index');
        Route::get('berita/create','BeritaController@create');
        Route::get('berita/{berita}','BeritaController@show');
        Route::post('berita', 'BeritaController@store');  
        Route::delete('berita/{berita}', 'BeritaController@destroy'); 
        Route::get('berita/{berita}/edit', 'BeritaController@edit'); 
        Route::patch('berita/{berita}', 'BeritaController@update'); 
        //artikel
        Route::resource('artikel', 'ArtikelController');
    });
    //kepustakaan
    Route::group(['prefix' => 'kepustakaan'], function(){
        //penelitian
        Route::resource('penelitian', 'PenelitianController');
        //perpustakaan
        Route::resource('perpustakaan', 'PerpustakaanController');
        //galeri
        Route::resource('galeri', 'GaleriController');
        //download
        Route::resource('download', 'DownloadController');
    });
    ///layanan dan tarif
    Route::group(['prefix' => 'layanandantarif'], function(){
        Route::get('/', 'MenuController@layanandantarif');
        //jenispelayanan
        Route::get('jenispelayanan', 'JenisPelayananController@index');
        Route::get('jenispelayanan/create', 'JenisPelayananController@create');
        Route::post('jenispelayanan', 'JenisPelayananController@store');
        //kategoripelayanan
        Route::get('kategoripelayanan', 'KategoriPelayananController@index');
        Route::get('kategoripelayanan/create','KategoriPelayananController@create');
        Route::get('kategoripelayanan/{query}','KategoriPelayananController@show');
        Route::post('kategoripelayanan', 'KategoriPelayananController@store'); 
        Route::delete('kategoripelayanan/{query}', 'KategoriPelayananController@destroy'); 
        Route::get('kategoripelayanan/{query}/edit', 'KategoriPelayananController@edit'); 
        Route::patch('kategoripelayanan/{query}', 'KategoriPelayananController@update'); 

    });
    ///kontak
    Route::resource('kontak', 'KontakController');
    //pengumuman
    Route::resource('pengumuman', 'PengumumanController');
    //mitra
    Route::resource('mitra', 'MitraController');
    //sertifikat
    Route::resource('sertifikat', 'SertifikatController');
    //banner
    Route::resource('banner', 'BannerController');
    ///profle
    Route::group(['prefix' => 'profile'], function(){
        //sejarah
        Route::resource('sejarah', 'SejarahController');
        //struktur organisasi
        Route::get('strukturorganisasi', 'StrukturOrganisasiController@index');
        Route::get('strukturorganisasi/create','StrukturOrganisasiController@create');
        Route::get('strukturorganisasi/{struktur_organisasi}','StrukturOrganisasiController@show');
        Route::post('strukturorganisasi/', 'StrukturOrganisasiController@store');  
        Route::delete('strukturorganisasi/{struktur_organisasi}', 'StrukturOrganisasiController@destroy'); 
        Route::get('strukturorganisasi/{struktur_organisasi}/edit', 'StrukturOrganisasiController@edit'); 
        Route::patch('strukturorganisasi/{struktur_organisasi}', 'StrukturOrganisasiController@update'); 
        //upaya kesehatan
        Route::get('upayakesehatan', 'UpayaKesehatanController@index');
        Route::get('upayakesehatan/create', 'UpayaKesehatanController@create');
        Route::get('upayakesehatan/{upaya_kesehatan}','UpayaKesehatanController@show');
        Route::post('upayakesehatan/', 'UpayaKesehatanController@store');  
        Route::delete('upayakesehatan/{upaya_kesehatan}', 'UpayaKesehatanController@destroy'); 
        Route::get('upayakesehatan/{upaya_kesehatan}/edit', 'UpayaKesehatanController@edit'); 
        Route::patch('upayakesehatan/{upaya_kesehatan}', 'UpayaKesehatanController@update'); 
        //kompetensi SDM
        Route::get('kompetensisdm', 'KompetensiSDMController@index');
        Route::get('kompetensisdm/create','KompetensiSDMController@create');
        Route::get('kompetensisdm/{kompetensi_sdm}','KompetensiSDMController@show');
        Route::post('kompetensisdm/', 'KompetensiSDMController@store');  //Untuk menyimpan data yang telah ditambah didalma method create
        Route::delete('kompetensisdm/{kompetensi_sdm}', 'KompetensiSDMController@destroy'); //Untuk menghapus
        Route::get('kompetensisdm/{kompetensi_sdm}/edit', 'KompetensiSDMController@edit'); // untuk menampilkan form edit
        Route::patch('kompetensisdm/{kompetensi_sdm}', 'KompetensiSDMController@update'); // untuk menyimpan dari form edit 
        //visi dan misi
        Route::group(['prefix' => 'visidanmisi'], function(){
            Route::get('/', 'MenuController@visidanmisi');
            Route::resource('visi', 'VisiController');
            Route::resource('misi', 'MisiController');
        });
    });
});

