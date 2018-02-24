@extends('layouts.template')

@section('content')
<div class="container">
    <form method="post" action="{{ route('jurnal.save') }}">
        <div class="row">
            {{ csrf_field() }}
            <div class="col-md-12 margin-top-20">
                <h5 align="center"><b>Tambah Journal/Prociding</b></h5>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <div class=" table-responsive">
                    <table class="table">
                        <tr class="tr-head">
                            <th colspan="2">Detail Journal/Prociding</th>
                        </tr>                                                
                        <tr>
                            <td><b><i class="fa fa-book"></i> Judul</b></td>
                            <td><input class="form-control" name="judul" placeholder="Judul"></td>
                        </tr>
                        <tr>
                            <td><b><i class="fa fa-users"></i> Penulis</b></td>
                            <td><input class="form-control" name="penulis" placeholder="Penulis"></td>
                        </tr>
                        <tr>
                            <td><b><i class="fa fa-building"></i> Penerbit</b></td>
                            <td><input class="form-control" name="penerbit" placeholder="Penerbit"></td>
                        </tr>

                        <tr>
                            <td><b><i class="fa fa-file"></i> Journal</b></td>
                            <td><input class="form-control" name="jurnal" placeholder="Journal"></td>
                        </tr>
                        <tr>
                            <td><b><i class="fa fa-university"></i> Bidang</b></td>
                            <td><input class="form-control" name="bidang" placeholder="Bidang Ilmu"></td>
                        </tr>
                        <tr>
                            <td><b><i class="fa fa-bars"></i> Volume</b></td>
                            <td><input class="form-control" name="volume" placeholder="Volume"></td>
                        </tr>
                        <tr>
                            <td><b><i class="fa fa-bookmark"></i> Edisi</b></td>
                            <td><input class="form-control" name="edisi" placeholder="Edisi"></td>
                        </tr>
                        <tr>
                            <td><b><i class="fa fa-list-ol"></i> Nomor</b></td>
                            <td><input class="form-control" name="nomor" placeholder="Nomor"></td>
                        </tr>
                        <tr>
                            <td><b><i class="fa fa-globe"></i> Bulan</b></td>
                            <td><input class="form-control" name="bulan" placeholder="Bulan"></td>
                        </tr>
                        <tr>
                            <td><b><i class="fa fa-globe"></i> Tahun</b></td>
                            <td><input class="form-control" name="tahun" placeholder="Tahun" type="number"></td>
                        </tr>
                        <tr>
                            <td><b><i class="fa fa-university"></i> Kota</b></td>
                            <td><input class="form-control" name="kota" placeholder="Kota"></td>
                        </tr>
                        <tr>
                            <td><b><i class="fa fa-barcode"></i> ISBN</b></td>
                            <td><input class="form-control" name="isbn" placeholder="Kode ISBN"></td>
                        </tr>
                        <tr>
                            <td><b><i class="fa fa-plus-square"></i> Jumlah</b></td>
                            <td><input class="form-control" name="jumlah" placeholder="Jumlah" type="number"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3 margin-bottom-60">
                <a class="btn btn-danger" href="{{ route('home.jurnal') }}">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-success float-right">
            </div>
        </div>
    </form>
</div>
@endsection
