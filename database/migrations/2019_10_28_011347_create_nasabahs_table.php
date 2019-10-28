<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNasabahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_nasabah', 100);
            $table->string('nomor_rekening', 30)->unique();
            $table->integer('jumlah_saldo');
            $table->string('status', 20)->default('Belum Aktif');
            $table->string('password', 255);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('nasabahs', function (Blueprint $table) {
            $table->bigInteger('santri_id')->unsigned();
            $table->foreign('santri_id')->references('id')->on('santri')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nasabahs');
    }
}
