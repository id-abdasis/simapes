<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap', 100);
            $table->string('tempat_lahir', 100);
            $table->string('tanggal_lahir', 14);
            $table->string('pendidikan', 100)->nullable()->default('-');
            $table->string('pekerjaan', 100)->nullable()->default('-');
            $table->string('penghasilan', 15)->nullable()->default('-');
            $table->string('telepon', 14)->nullable()->default('-');
            $table->string('email', 100)->nullable()->default('-');
            $table->string('keterangan', 100)->nullable()->default('-');
            $table->string('provinsi', 100);
            $table->string('kabupaten', 100);
            $table->string('kecamatan', 100);
            $table->string('desa', 100);
            $table->string('dusun', 100);
            $table->string('rt', 4)->nullable()->default('00');
            $table->string('rw', 4)->nullable()->default('00');
            $table->string('nama_jalan', 100)->nullable()->default('-');
            $table->timestamps();
        });

        Schema::table('ibus', function (Blueprint $table) {
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
        Schema::dropIfExists('ibus');
    }
}
