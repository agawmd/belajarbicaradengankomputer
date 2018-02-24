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
        <form method="post" action="{{ isset($aplikasi) ? route('aplikasi.update', $aplikasi->id) : route('aplikasi.save') }}">
            {{ csrf_field() }}
            <div class="col-md-12 margin-top-20">
                <h5 align="center"><b>Tambah Tugas Aplikasi</b></h5>
            </div>
            <div class="col-md-6 col-md-offset-3  table-responsive">
                <table class="table">
                    <tr class="tr-head">
                        <th colspan="2">Detail Tugas Aplikasi</th>
                    </tr>                                                
                    <tr>
                        <td><b><i class="fa fa-book"></i> Judul</b></td>
                        <td><input class="form-control" name="judul" placeholder="Judul" value="{{ $aplikasi->judul or old('judul') }}"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-user"></i> Nim</b></td>
                        <td><input class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" value="{{ $aplikasi->nim or old('nim') }}"></td>
                    </tr>                    
                    <tr>
                        <td><b><i class="fa fa-id-card"></i> Nama Mahasiswa</b></td>
                        <td><input class="form-control" name="nama" placeholder="Nama Mahasiswa" value="{{ $aplikasi->nama or old('nama') }}"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-users"></i> Pembimbing</b></td>
                        <td><input class="form-control" name="pembimbing" placeholder="Pembimbing" value="{{ $aplikasi->pembimbing or old('pembimbing') }}"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-university"></i> Jurusan</b></td>
                        <td><input class="form-control" name="jurusan" placeholder="Jurusan" value="{{ $aplikasi->jurusan or old('jurusan') }}"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-globe"></i> Tahun</b></td>
                        <td><input class="form-control" name="tahun" placeholder="Tahun" type="number" value="{{ $aplikasi->tahun or old('tahun') }}"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-plus-square"></i> Jumlah</b></td>
                        <td><input class="form-control" name="jumlah" placeholder="Jumlah" type="number" value="{{ $aplikasi->jumlah or old('jumlah') }}"></td>
                    </tr>
                </table>
            </div>
            <hr>            
            <div class="col-md-6 col-md-offset-3 margin-bottom-60">
                <a class="btn btn-danger" href="{{ route('home.aplikasi') }}">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-success float-right">
            </div>
        </form>
    </div>
</div>
@endsection
