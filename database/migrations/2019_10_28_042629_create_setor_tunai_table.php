<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetorTunaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setor_tunai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_setoran', 100);
            $table->bigInteger('nasabah_id')->unsigned();
            $table->bigInteger('pegawai_id')->usigned();
            $table->string('status', 100);
            $table->integer('jumlah_setoran');
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
        Schema::dropIfExists('setor_tunai');
    }
}
