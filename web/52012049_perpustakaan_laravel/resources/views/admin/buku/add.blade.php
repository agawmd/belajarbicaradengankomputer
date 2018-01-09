@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <h5>Tambah Buku</h5>
        @if(session()->has('status'))
        <div class="col-md-12">
            <div class="alert alert-{{ session()->get('status') }} fade in alert-dismissable">
                {!! session()->get('pesan') !!}
            </div>
        </div>
        @endif
        <form method="post" action="{{ route('buku.save') }}">
            {{ csrf_field() }}
            <div class="col-md-6">
                <input class="form-control" name="judul" placeholder="Judul">
                <input class="form-control" name="pengarang" placeholder="Pengarang">
                <input class="form-control" name="penerbit" placeholder="Penerbit">
                <input class="form-control" name="kota" placeholder="Kota">
            </div>

            <div class="col-md-6">
                <input class="form-control" name="tahun" placeholder="Tahun" type="number">
                <input class="form-control" name="isbn" placeholder="Kode ISBN">
                <input class="form-control" name="jumlah" placeholder="Jumlah" type="number">
                <input class="form-control" name="status" placeholder="Status">
            </div>
            <hr>
            <div class="col-md-6 col-md-offset-6">
                <a class="btn btn-danger" href="{{ route('home.buku') }}">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-success float-right">
            </div>
        </form>
    </div>
</div>
@endsection
