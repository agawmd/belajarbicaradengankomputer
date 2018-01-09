@extends('layouts.template')

@section('content')       
<table align="center">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Nomor Induk Mahasiswa</th>
            <th>Nama Mahasiswa</th>
            <th>Jurusan</th>
            <th>Tahun</th>
            <th>Lakukan Peminjaman</th>
        </tr>
    </thead>
    <tbody>
        @foreach($daftarBuku as $aplikasi)
        <tr>
            <td>{{ $aplikasi->judul }}</td>
            <td>{{ $aplikasi->nim }}</td>
            <td>{{ $aplikasi->nama }}</td>
            <td>{{ $aplikasi->jurusan }}</td>
            <td>{{ $aplikasi->tahun }}</td>
            <td>
                <a href="#">Pinjam</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        @if(Auth::check())
        <tr>
            <td colspan="5">
                <!--Kalau admin sudah login muncul tombol tambah buku--> 
                <a class="col-md-12 btn btn-success" href="{{ route('aplikasi.add') }}">Tambah Buku</a>
            </td>
        </tr>
        @endif
    </tfoot>
    
</table>
@endsection