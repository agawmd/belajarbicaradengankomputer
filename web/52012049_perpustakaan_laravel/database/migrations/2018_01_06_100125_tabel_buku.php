<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('kota');
            $table->year('tahun');            
            $table->string('isbn');
            $table->integer('jumlah')->default(1);
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('buku');
    }
}
