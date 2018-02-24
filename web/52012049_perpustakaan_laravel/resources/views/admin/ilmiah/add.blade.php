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

        <form method="post" action="{{ isset($ilmiah) ? route('ilmiah.update', $ilmiah->id) : route('ilmiah.save') }}">
            {{ csrf_field() }}
            <div class="col-md-12 margin-top-20">
                <h5 align="center"><b>Tambah Karya Ilmiah</b></h5>
            </div>
            <div class="col-lg-6 col-lg-offset-3 table-responsive">
                <table class="table">
                    <tr class="tr-head">
                        <th colspan="2">Detail Karya Ilmiah</th>
                    </tr>                                                
                    <tr>
                        <td><b><i class="fa fa-book"></i> Judul</b></td>
                        <td><input class="form-control" name="judul" placeholder="Judul"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-user"></i> Nim</b></td>
                        <td><input class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa"></td>
                    </tr>                    
                    <tr>
                        <td><b><i class="fa fa-id-card"></i> Nama Mahasiswa</b></td>
                        <td><input class="form-control" name="nama" placeholder="Nama Mahasiswa"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-users"></i> Pembimbing</b></td>
                        <td><input class="form-control" name="pembimbing" placeholder="Pembimbing"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-university"></i> Bidang</b></td>
                        <td><input class="form-control" name="bidang" placeholder="Bidang Ilmu"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-globe"></i> Tahun</b></td>
                        <td><input class="form-control" name="tahun" placeholder="Tahun" type="number"></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-plus-square"></i> Jumlah</b></td>
                        <td><input class="form-control" name="jumlah" placeholder="Jumlah" type="number"></td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-6 col-lg-offset-3 margin-bottom-60">
                <a class="btn btn-danger" href="{{ route('home.ilmiah') }}">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-success float-right">                
            </div>
        </form>
    </div>
</div>
@endsection
