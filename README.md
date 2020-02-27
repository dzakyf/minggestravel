untuk masuk ke admin ketik di url: <url_labkes>/login

changelog:<br>
-rev 1.2:<br>
    1. tambah migrasi: add_gambar_to_pengumuman_table<br>
    2. tambah .htaccess: <IfModule mod_php7.c> (utk upload file max 50 MB)  
    3. ubah view, validasi controller, & model pengumuman:<br>
        - tambah kolom "gambar" di table pengumuman (model)<br>
        - tambah ukuran upload gambar max 20MB (controller)<br>
        - tambah kolom upload gambar (view admin)<br> 
    4. ubah validasi controller : artikel, berita, download, galeri, pengumuman, perpustakaan, sejarah<br>
        - tambah ukuran upload dokumen & gambar max 20 MB<br>
    5. ubah timezone : Asia/Jakarta
