<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model {

    protected $table = "pinjam";

    
    public function detailBuku() {
        return $this->belongsTo('App\Buku', 'id_buku', 'id');
    }
    
}
