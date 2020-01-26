<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpustakaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpustakaan', function (Blueprint $table) {
            $table->bigIncrements('id_perpustakaan');
            $table->string('cover');
            $table->string('judul');
            $table->string('pengarang');
            $table->string('edisi');
            $table->string('tahun_terbit');
            $table->integer('jumlah_halaman');
            $table->string('kategori');
            $table->text('resensi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perpustakaan');
    }
}
