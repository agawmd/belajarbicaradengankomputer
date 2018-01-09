<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelJurnal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->string('jurnal');
            $table->string('bidang');
            $table->string('volume');
            $table->string('edisi');
            $table->integer('nomor');
            $table->date('bulan');
            $table->year('tahun');
            $table->string('kota');
            $table->string('isbn');
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
        Schema::dropIfExists('jurnal');
    }
}
