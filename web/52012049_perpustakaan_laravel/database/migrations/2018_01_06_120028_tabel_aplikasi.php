<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelAplikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplikasi', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('judul');
            $table->string('nim');
            $table->string('nama');
            $table->string('pembimbing');
            $table->string('jurusan');
            $table->year('tahun');
            $table->integer('jumlah');
           
            
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
        Schema::dropIfExists('aplikasi');
    }
}
