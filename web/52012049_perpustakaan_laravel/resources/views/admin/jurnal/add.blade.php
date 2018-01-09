@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <h5>Tambah Journal/Prociding</h5>
        @if(session()->has('status))
        <div class="alert alert-{{ session()->get('status') }} fade in alert-dismissable">
                {!! session()->get('pesan') !!}           
        </div>
        @endif
        <form>
            <input class="form-control" name="judul" placeholder="Judul"><br>
            <input class="form-control" name="lalala" placeholder="Penulis"><br>
            <input class="form-control" name="lalala" placeholder="Penerbit"><br>
            <input class="form-control" name="lalala" placeholder="Jurnal"><br>
            <input class="form-control" name="lalala" placeholder="Bidang Ilmu"><br>
            <input class="form-control" name="lalala" placeholder="Volume"><br>
            <input class="form-control" name="lalala" placeholder="Edisi"><br>
            <input class="form-control" name="lalala" placeholder="Nomor" type="number"><br>
            <input class="form-control" name="lalala" placeholder="Bulan"><br>
            <input class="form-control" name="tahun" placeholder="Tahun" type="number"><br>
            <input class="form-control" name="lalala" placeholder="Kota"><br>
            <input class="form-control" name="lalala" placeholder="Kode ISBN"><br>
            <input class="form-control" name="lalala" placeholder="Jumlah" type="number"><br>
                        
            <input type="submit" value="Simpan">
        </form>
    </div>
</div>
@endsection
