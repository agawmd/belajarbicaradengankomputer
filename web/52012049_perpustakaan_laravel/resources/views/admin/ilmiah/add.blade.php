@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <h5>Tambah Karya Ilmiah</h5>
        @if(session()->has('status))
        <div class="alert alert-{{ session()->get('status') }} fade in alert-dismissable">
                {!! session()->get('pesan') !!}           
        </div>
        @endif        
        <form>
            <input class="form-control" name="judul" placeholder="Judul"><br>
            <input class="form-control" name="lalala" placeholder="Nomor Induk Mahasiswa"><br>
            <input class="form-control" name="lalala" placeholder="Nama Mahasiswa"><br>
            <input class="form-control" name="lalala" placeholder="Pembimbing"><br>
            <input class="form-control" name="lalala" placeholder="Bidang Ilmu"><br>
            <input class="form-control" name="tahun" placeholder="Tahun" type="number"><br>
            <input class="form-control" name="lalala" placeholder="Jumlah" type="number"><br>
                        
            <input type="submit" value="Simpan">
        </form>
    </div>
</div>
@endsection
