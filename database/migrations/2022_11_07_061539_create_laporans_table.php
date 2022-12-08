<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_peminjam');
            $table->string('nama_peminjam');
            $table->unsignedBigInteger('barang_id');
            $table->foreign('barang_id')->references('id')->on('data_barangs')->onDelate('cascade');
            // $table->string('nama_barang');
            $table->date('tanggal_pinjam');
            $table->integer('jumlah');
            $table->date('tanggal_kembali');
            $table->string('contact');
            // $table->unsignedBigInteger('id_data_barang');
            // // membuat fk id_siswa yang mengacu kpd field id di table
            // // siswas
            // $table->foreign('id_barang')->references('id')->on('data_barangs')
            //     ->onDelete('cascade');
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
        Schema::dropIfExists('laporans');
    }
}
