<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alusista', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alusista');
            $table->string('jenis');
            $table->string('produsen');
            $table->string('tahun_pembuatan');
            $table->string('status_operasional');
            $table->string('lokasi');
            $table->string('kapasitas');
            $table->string('spesifikasi_utama');
            $table->string('gambar');
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
        Schema::dropIfExists('alusista');
    }
};
