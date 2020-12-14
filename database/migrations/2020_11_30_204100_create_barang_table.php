<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('kode_barang', 25)->nullable();
            $table->string('merk')->nullable();
            $table->string('jenis')->nullable();
            $table->integer('tahun_barang')->nullable();
            $table->integer('jumlah_barang');
            $table->text('deskripsi')->nullable();
            $table->enum('lokasi', ['satker', 'admin', 'listrik'])->nullable();
            $table->enum('status',['baru', 'lama'])->nullable();
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
        Schema::dropIfExists('barang');
    }
}
