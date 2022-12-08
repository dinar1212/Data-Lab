<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komputers', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->string('pc');
            // $table->string('monitor');
            // $table->string('keyboard');
            // $table->string('mouse');
            // $table->string('kabel_power');
            // $table->string('kabel_pga');
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
        Schema::dropIfExists('komputers');
    }
}
