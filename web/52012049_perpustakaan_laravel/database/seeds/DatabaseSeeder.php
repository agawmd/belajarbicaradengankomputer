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
        
//        DB::table('aplikasi')
//            ->insert([
//                'judul'     => "Flying to The Moon",
//                'nim'       => "52012049",
//                'nama'      => "Barack Obama",
//                'jurusan'   => "Intelegency",
//                'tahun'     => 1793
//            ]);
//        
//        DB::table('ilmiah')
//            ->insert([
//                'judul'     => "Flying to The Moon",
//                'nim'       => "52012049",
//                'nama'      => "Barack Obama",
//                'bidang'   => "Intelegency",
//                'tahun'     => 1793
//            ]);
//
//        DB::table('jurnal')
//            ->insert([
//                'judul'     => "Flying to The Moon",
//                'penulis'       => "52012049",
//                'penerbit'   => "Intelegency",
//                'jurnal'    => "Blade",
//                'bidang'      => "Barack Obama",                
//                'volume'     => "179",
//                'edisi'     => "Season",
//                'nomor'     => 3,
//                'bulan'     => 10-09-2017,
//                'tahun'     => 1793,
//                'kota'     => "Luwuk",
//                'isbn'     => "179 902 781 33"
//            ]);
//        
        
    }

}
