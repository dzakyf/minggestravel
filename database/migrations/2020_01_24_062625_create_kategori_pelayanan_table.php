<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriPelayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_pelayanan', function (Blueprint $table) {
            $table->bigIncrements('id_kategori');
            $table->integer('id_pelayanan');
            $table->string('nama');
            $table->integer('jasa_sarana');
            $table->integer('jasa_pelayanan');
            $table->integer('total');
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
        Schema::dropIfExists('kategori_pelayanan');
    }
}
