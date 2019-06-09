<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HargaKomoditas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga_komoditas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('komoditas_id');
            $table->UnsignedBigInteger('pedagang_id');
            $table->UnsignedBigInteger('petugas_id');
            $table->date('tanggal');
            $table->UnsignedBigInteger('harga');
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
        Schema::drop('harga');
    }
}