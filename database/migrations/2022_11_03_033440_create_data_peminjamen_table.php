<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_peminjamen', function (Blueprint $table) {
            $table->id();
            $table->string('kode_peminjam');
            $table->string('nama_peminjam');
            $table->unsignedBigInteger('barang_id');
            $table->foreign('barang_id')->references('id')->on('data_barangs')->onDelate('cascade');
            $table->date('tanggal_pinjam');
            $table->integer('jumlah');
            $table->date('tanggal_kembali');
            $table->string('contact');
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
        Schema::dropIfExists('data_peminjamens');
    }
}
