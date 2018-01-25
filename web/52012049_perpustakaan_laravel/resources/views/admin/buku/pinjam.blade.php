@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <h5>Peminjaman Buku</h5>

        <form method="post" action="{{ route('home.buku') }}">
            {{ csrf_field() }}
            <div class="col-md-6">
                <input class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa"><br>
                <input class="form-control" name="tgl_pinjam" placeholder="Tanggal Peminjaman" type="datetime"><br>
                <input class="form-control" name="lama_pinjam" placeholder="Berapa Lama Kah ?" type="number"><br>
                <input class="form-control" name="tgl_kembali" placeholder="Tanggal Pengembalian" type="datetime"><br>
            </div>

            <hr>
            <div class="col-md-6 col-md-offset-6">
                <a class="btn btn-danger" href="{{ route('home.buku') }}">Batal</a>
                <input type="submit" value="Pinjam Sekarang" class="btn btn-success float-right">
            </div>
        </form>
    </div>
</div>
@endsection
