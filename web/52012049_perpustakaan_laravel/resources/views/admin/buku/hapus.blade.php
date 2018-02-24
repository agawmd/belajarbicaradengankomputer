@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <form method="post" action="{{ route('buku.pinjam.simpan', $buku->id) }}">
            {{ csrf_field() }}
            <div class="col-md-12 margin-top-40">
                <h5 align="center"><b>Peminjaman Buku</b></h5>            
            </div>
            <div class="col-md-6 col-md-offset-3  table-responsive">
                <table class="table">
                    <tr class="tr-head">
                        <th colspan="2">Detail Buku</th>
                    </tr>                                                
                    <tr>
                        <td><b><i class="fa fa-book"></i> Judul</td>
                        <td>{{ $buku->judul }}</td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-users"></i> Pengarang</td>
                        <td>{{ $buku->pengarang }}</td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-building"></i> Penerbit</td>
                        <td>{{ $buku->penerbit }}</td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-globe"></i> Tahun</td>
                        <td>{{ $buku->tahun }}</td>
                    </tr>

                    <tr class="tr-head">
                        <th colspan="2">Informasi Peminjam</th>
                    </tr>                                                
                    <tr>
                        <td><b><i class="fa fa-user"></i> Nim</b></td>
                        <td><input class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" required=""></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-calendar"></i> Tanggal Peminjaman</b></td>
                        <td><input class="form-control" name="tgl_pinjam" placeholder="Tanggal Peminjaman" type="date" required=""></td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-clock-o"></i> Lama Peminjaman</b></td>
                        <td><input class="form-control" name="lama_pinjam" placeholder="Berapa Lama Kah ?" type="number" required=""></td>
                    </tr>


                </table>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3 margin-bottom-60">
            <a class="btn btn-danger" href="{{ route('home.buku') }}">Batal</a>
            <input type="submit" value="Pinjam Sekarang" class="btn btn-success float-right">
        </div>
    </div>

</form>
</div>
</div>
@endsection
crtl+z