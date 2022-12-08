<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanPerbaikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_perbaikans', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_perbaikan');
            // $table->string('nama_barang');
            $table->unsignedBigInteger('barang_id');
            $table->foreign('barang_id')->references('id')->on('data_barangs')->onDelate('cascade');
            $table->string('kerusakan');
            // $table->string('penanganan');
            $table->string('kebutuhan_komputer');
            // $table->string('hasil');
            $table->string('ket');
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
        Schema::dropIfExists('laporan_perbaikans');
    }
}
