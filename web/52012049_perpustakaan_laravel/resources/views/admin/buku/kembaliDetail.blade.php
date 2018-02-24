@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <form method="post" action="{{ route('buku.kembali.simpan', $detailPeminjaman->id) }}">
            {{ csrf_field() }}
            <div class="col-md-12 margin-top-40">
                <h5 align="center"><b>Pengembalian Buku</b></h5>
            </div>
            <div class="col-md-6 col-md-offset-3 table-responsive">
                <table class="table">
                    <tr class="tr-head">
                        <th colspan="2">Detail Buku</th>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-book"></i> Judul</b></td>
                        <td>{{ $detailPeminjaman->detailBuku->judul }}</td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-users"></i> Pengarang</b></td>
                        <td>{{ $detailPeminjaman->detailBuku->pengarang }}</td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-building"></i> Penerbit</b></td>
                        <td>{{ $detailPeminjaman->detailBuku->penerbit }}</td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-globe"></i> Tahun</b></td>
                        <td>{{ $detailPeminjaman->detailBuku->tahun }}</td>
                    </tr>
                    <tr class="tr-head">
                        <th colspan="2">Detail Peminjam</th>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-user"></i> Nim</b></td>
                        <td>{{ $detailPeminjaman->nim }}</td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-calendar"></i> Tanggal Peminjaman</b></td>
                        <td>{{ $detailPeminjaman->tgl_pinjam}}</td>
                    </tr>

                    <tr>
                        <td><b><i class="fa fa-clock-o"></i> Lama Peminjaman</b></td>
                        <td>{{ $detailPeminjaman->lama_pinjam }}</td>
                    </tr>
                    <tr>
                        <td><b><i class="fa fa-calendar"></i> Tanggal Kembali</b></td>
                        <td><input class="form-control" name="tgl_kembali" type="date" value="{{ date('Y-m-d')}}" max="{{ date('Y-m-d')}}" ></td>
                    </tr>
                </table>
                <hr>
            </div>

            <div class="col-md-6 col-md-offset-3 margin-bottom-60">
                <a class="btn btn-danger" href="{{ route('buku.kembali') }}">Batal</a>
                <input type="submit" value="Kembalikan Sekarang" class="btn btn-success float-right">
            </div>
        </form>
    </div>
</div>
@endsection
