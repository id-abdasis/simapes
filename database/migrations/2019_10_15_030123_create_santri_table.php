<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status', 100)->default('belum aktif');
            $table->string('nama_lengkap', 50);
            $table->string('nama_panggilan', 100)->nullable()->default('-');
            $table->string('tempat_lahir', 50);
            $table->string('tanggal_lahir', 14);
            $table->string('jenis_kelamin', 15);
            $table->string('alamat_lengkap', 100)->nullable()->default('-');
            $table->string('no_telepon', 14)->nullable()->default('-');
            $table->string('jarak_tempuh', 5)->nullable()->default('-');
            $table->string('berat_badan', 3)->nullable()->default('-');
            $table->string('tinggi_badan', 3)->nullable()->default('-');
            $table->string('golongan_darah', 20)->nullable()->default('-');
            $table->string('kewarganegaraan', 10)->nullable()->default('-');
            $table->string('anak_ke', 3);
            $table->string('jumlah_saudara', 3);
            $table->string('tinggal_bersama', 50);
            $table->string('asal_sekolah', 100);
            $table->string('nama_sekolah_asal', 100);
            $table->string('alamat_sekolah_asal', 100);
            $table->string('tahun_masuk', 4);
            $table->string('foto_profil', 255)->nullable()->default('text');
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
        Schema::dropIfExists('santri');
    }
}
