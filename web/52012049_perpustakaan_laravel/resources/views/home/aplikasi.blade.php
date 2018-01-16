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
        </tr>
        @endforeach

</table>
@endsection