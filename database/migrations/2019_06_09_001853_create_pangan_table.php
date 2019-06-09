<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pangan', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('role_user_id');
            $table->string('tbl_pasar_id');
            $table->string('petugas_pasar_id');
            $table->string('pedagang_id');
            $table->string('komoditi_id');
            $table->string('jenis_komoditi_id');
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
        Schema::drop('pangan');
    }
}