@extends('layouts.template')

@section('content')       
<table align="center">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Nomor Induk Mahasiswa</th>
            <th>Penulis</th>
            <th>Bidang Ilmu</th>
            <th>Tahun</th>
        </tr>
    </thead>
    <tbody>
        @foreach($daftarBuku as $ilmiah)
        <tr>
            <td>{{ $ilmiah->judul }}</td>
            <td>{{ $ilmiah->nim }}</td>
            <td>{{ $ilmiah->nama }}</td>
            <td>{{ $ilmiah->bidang }}</td>
            <td>{{ $ilmiah->tahun }}</td>
        </tr>
        @endforeach
   
</table>
@endsection