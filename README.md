untuk masuk ke admin ketik di url: <url_labkes>/login

changelog:
-rev 1.2:
    1. tambah migrasi: add_gambar_to_pengumuman_table; 
    2. tambah .htaccess: <IfModule mod_php7.c> (utk upload file max 50 MB)  
    3. ubah view, validasi kontroller, & model pengumuman:
        - tambah kolom "gambar" di table pengumuman (model)
        - tambah ukuran upload gambar max 20MB (controller)
        - tambah kolom upload gambar (view admin) 
    4. ubah validasi kontroller : artikel, berita, download, galeri, pengumuman, perpustakaan, sejarah
        - tambah ukuran upload dokumen & gambar max 20 MB
    5. ubah timezone : Asia/Jakarta
