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
</table>
@endsection