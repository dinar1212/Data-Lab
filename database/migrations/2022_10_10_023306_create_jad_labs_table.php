<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jad_labs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('hari');
            $table->string('tanggal');
            // $table->string('jam');
            $table->string('lantai');
            $table->unsignedBigInteger('kel_id');
            $table->foreign('kel_id')->references('id')->on('kel_labs')->onDelate('cascade');
            // $table->string('no_lab');
            $table->string('kegiatan');
            $table->date('tanggal_berakhir');
            $table->enum('keterangan',['digunakan','selesai']);
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
        Schema::dropIfExists('jad_labs');
    }
}
