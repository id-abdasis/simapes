<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_product', 100);
            $table->string('nama_product', 100);
            $table->string('supplier', 100);
            $table->string('kategori_product', 100);
            $table->string('stock_product', 5);
            $table->string('satuan_beli', 100);
            $table->string('satuan_jual', 100);
            $table->string('harga_beli', 100);
            $table->string('harga_jual', 100);
            $table->string('tanggal_expired', 100);
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
        Schema::dropIfExists('barangs');
    }
}
