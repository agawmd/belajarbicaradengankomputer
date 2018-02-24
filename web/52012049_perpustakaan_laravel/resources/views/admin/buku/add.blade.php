@extends('layouts.template')

@section('content')
<div class="container margin-bottom-80">
    <div class="row">
        @if(session()->has('status'))
        <div class="col-md-12">
            <div class="alert alert-{{ session()->get('status') }} fade in alert-dismissable">
                {!! session()->get('pesan') !!}
            </div>
        </div>
        @endif
        <form method="post" action="{{ isset($buku) ? route('buku.update', $buku->id) : route('buku.save') }}">
            {{ csrf_field() }}
            <div class="col-md-12 margin-top-20">
                <h5 align="center"><b>Tambah Buku</b></h5>
            </div>
            <div class="col-md-6 col-md-offset-3  table-responsive">
                <table class="table">
                    <tr class="tr-head">
                        <th colspan="2">Detail Buku</th>
                    </tr>                                                
                    <tr>
                        <td><b><i class="fa fa-book"></i> Judul</td>
                        <td><input class="form-control" name="judul" placeholder="Judul" value="{{ $buku->judul or old('judul') }}"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-users"></i> Pengarang</td>
                        <td><input class="form-control" name="pengarang" placeholder="Pengarang" value="{{ $buku->pengarang or old('pengarang') }}"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-building"></i> Penerbit</td>
                        <td><input class="form-control" name="penerbit" placeholder="Penerbit" value="{{ $buku->penerbit or old('penerbit') }}"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-university"></i> Kota</td>
                        <td><input class="form-control" name="kota" placeholder="Kota" value="{{ $buku->kota or old('kota') }}"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-globe"></i> Tahun</td>
                        <td><input class="form-control" name="tahun" placeholder="Tahun" type="number" value="{{ $buku->tahun or old('tahun') }}"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-barcode"></i> ISBN</td>
                        <td><input class="form-control" name="isbn" placeholder="Kode ISBN" value="{{ $buku->isbn or old('isbn') }}"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-plus-square"></i> Jumlah</td>
                        <td><input class="form-control" name="jumlah" placeholder="Jumlah" type="number" value="{{ $buku->jumlah or old('jumlah') }}"></td>
                    </tr>
                    <!--
                                        <tr>
                                            <td><b><i class="fa fa-th-list"></i> Status</td>
                                            <td><input class="form-control" name="status" placeholder="Status" value="{{ $buku->status or old('status') }}"></td>
                                        </tr>
                    -->
                </table>
            </div>
            <hr>
            <div class="col-md-6 col-md-offset-3 margin-bottom-60">
                <a class="btn btn-danger" href="{{ route('home.buku') }}">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-success float-right">
            </div>
        </form>
    </div>
</div>
@endsection
