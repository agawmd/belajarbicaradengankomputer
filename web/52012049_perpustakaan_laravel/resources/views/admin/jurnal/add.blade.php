@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <h5>Tambah Journal/Prociding</h5>

        <form method="post" action="{{ route('jurnal.save') }}">
            {{ csrf_field() }}
            <div class="col-md-6">
                <input class="form-control" name="judul" placeholder="Judul"><br>
                <input class="form-control" name="lalala" placeholder="Penulis"><br>
                <input class="form-control" name="lalala" placeholder="Penerbit"><br>
                <input class="form-control" name="lalala" placeholder="Jurnal"><br>
                <input class="form-control" name="lalala" placeholder="Bidang Ilmu"><br>
                <input class="form-control" name="lalala" placeholder="Volume"><br>
                <input class="form-control" name="lalala" placeholder="Edisi"><br>
            </div>

            <div class="col-md-6">
                <input class="form-control" name="lalala" placeholder="Nomor" type="number"><br>
                <input class="form-control" name="lalala" placeholder="Bulan"><br>
                <input class="form-control" name="tahun" placeholder="Tahun" type="number"><br>
                <input class="form-control" name="lalala" placeholder="Kota"><br>
                <input class="form-control" name="lalala" placeholder="Kode ISBN"><br>
                <input class="form-control" name="lalala" placeholder="Jumlah" type="number"><br>                
            </div>
            <hr>

            <div class="col-md-6 col-md-offset-6">
                <a class="btn btn-danger" href="{{ route('home.jurnal') }}">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-success float-right">
            </div>
        </form>
    </div>
</div>
@endsection
