@extends('layouts.template')

@section('content')       

<div class="container">
    <div class="row margin-top-40">
        @if(session()->has('status'))
        <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-{{ session()->get('status') }} fade in alert-dismissable text-center">
                {!! session()->get('pesan') !!}
            </div>
        </div>
        @endif
        <div class="col-md-12">
            <div class="col-md-12 margin-top-20">
                <h5 align="center"><b>Daftar Peminjaman Buku</b></h5>
            </div>
            <div clas="col-md-12">
                <div class="table-responsive">

                    <table class="table" align="center" width='100%'>
                        <thead>
                            <tr class="tr-head">
                                <th>ID Peminjaman</th>
                                <th>Nim</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($daftarPeminjaman as $pinjam)
                            <tr>
                                <th align="center">{{ $pinjam->id }}</th>
                                <td>{{ $pinjam->nim }}</td>
                                <td>{{ $pinjam->tgl_pinjam }}</td>
                                <td>{{ $pinjam->detailBuku->judul }}</td>
                                <td>{{ $pinjam->detailBuku->pengarang }}</td>
                                <td>{{ $pinjam->detailBuku->penerbit }}</td>
                                <td>{{ $pinjam->detailBuku->tahun }}</td>
                                <td>
                                    <a href="{{ route('buku.kembali.detail', $pinjam->id) }}">Kembalikan</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection