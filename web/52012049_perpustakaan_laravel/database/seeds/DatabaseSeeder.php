<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        // 
        // insert booku seed
        DB::table('buku')
            ->insert([
                'judul' => "Kodok terbang diangkasa raya",
                'pengarang' => "dafinci",
                'penerbit'  => "Trx Book",
                'kota'      => "Papua Nuegini",
                'tahun'     => 1945,
                'isbn'      => "Lalalala"
            ]);
        
        DB::table('aplikasi')
            ->insert([
                'judul'     => "Flying to The Moon",
                'nim'       => "52012049",
                'nama'      => "Barack Obama",
                'jurusan'   => "Intelegency",
                'tahun'     => 1793
            ]);
        
        DB::table('ilmiah')
            ->insert([
                'judul'     => "Flying to The Moon",
                'nim'       => "52012049",
                'nama'      => "Barack Obama",
                'bidang'   => "Intelegency",
                'tahun'     => 1793
            ]);

        DB::table('jurnal')
            ->insert([
                'judul'     => "Flying to The Moon",
                'penulis'       => "52012049",
                'bidang'      => "Barack Obama",
                'penerbit'   => "Intelegency",
                'volume'     => "179",
                'edisi'     => "Season",
                'tglBulan'     => 10-09-2017,
                'kota'     => "Luwuk",
                'tahun'     => 1793,
                'isbn'     => "179 902 781 33"
            ]);
        
        
    }

}
