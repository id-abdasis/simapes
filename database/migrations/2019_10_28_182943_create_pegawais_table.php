<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pegawai', 100);
            $table->bigInteger('user_id')->unsigned();
            $table->string('telepon_pegawai', 100);
            $table->string('alamat_pegawai', 100);
            $table->string('avatar_pegawai', 255);
            $table->string('jabatan', 100);
            $table->string('tanggal_masuk', 100);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('pegawais');
    }
}
