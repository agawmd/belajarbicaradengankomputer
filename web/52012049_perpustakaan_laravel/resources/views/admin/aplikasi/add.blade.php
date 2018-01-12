@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <h5>Tambah Tugas Aplikasi</h5>

        <form method="post" action="{{ route('aplikasi.save') }}">
            {{ csrf_field() }}
            <div class="col-md-6">
                <input class="form-control" name="judul" placeholder="Judul"><br>
                <input class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa"><br>
                <input class="form-control" name="nama" placeholder="Nama Mahasiswa"><br>
                <input class="form-control" name="pembimbing" placeholder="Pembimbing"><br>
            </div>
            <div class="col-md-6">
                <input class="form-control" name="jurusan" placeholder="Jurusan"><br>
                <input class="form-control" name="tahun" placeholder="Tahun" type="number"><br>
                <input class="form-control" name="jumlah" placeholder="Jumlah" type="number"><br>
            </div>     
            <hr>
            
            <div class="col-md-6 col-md-offset-6">
                <a class="btn btn-danger" href="{{ route('home.aplikasi') }}">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-success float-right">
            </div>
        </form>
    </div>
</div>
@endsection
