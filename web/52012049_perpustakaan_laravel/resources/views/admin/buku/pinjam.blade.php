@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <h5>Peminjaman Buku</h5>
        <form method="post" action="{{ route('buku.pinjam.simpan', $buku->id) }}">
            {{ csrf_field() }}
            <div class="col-md-12 row">
                <div class="col-md-6">
                    <input class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" required=""><br>
                    <input class="form-control" name="tgl_pinjam" placeholder="Tanggal Peminjaman" type="date" required=""><br>
                    <input class="form-control" name="lama_pinjam" placeholder="Berapa Lama Kah ?" type="number" required=""><br>
                    <!--<input class="form-control" name="tgl_kembali" placeholder="Tanggal Pengembalian" type="date" disabled><br>-->
                </div>

                <div class="col-md-6">
                    <table align="center">
                        <tr>
                            <th>Judul</th>
                            <td>{{ $buku->judul }}</td>
                        </tr>
                        <tr>
                            <th>Pengarang</th>
                            <td>{{ $buku->pengarang }}</td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td>{{ $buku->penerbit }}</td>
                        </tr>
                        <tr>
                            <th>Tahun</th>
                            <td>{{ $buku->tahun }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <hr>
            <div class="col-md-6 col-md-offset-6">
                <a class="btn btn-danger" href="{{ route('home.buku') }}">Batal</a>
                <input type="submit" value="Pinjam Sekarang" class="btn btn-success float-right">
            </div>
        </form>
    </div>
</div>
@endsection
