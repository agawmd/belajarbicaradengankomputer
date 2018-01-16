@extends('layouts.template')

@section('content')       
<table align="center">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Jurnal</th>
            <th>Bidang Ilmu</th>
            <th>Volume</th>
            <th>Edisi</th>
            <th>Kota</th>
            <th>Tahun</th>
        </tr>
    </thead>
    <tbody>
        @foreach($daftarBuku as $jurnal)
        <tr>
            <td>{{ $jurnal->judul }}</td>
            <td>{{ $jurnal->penulis }}</td>
            <td>{{ $jurnal->bidang }}</td>
            <td>{{ $jurnal->penerbit }}</td>
            <td>{{ $jurnal->volume }}</td>
            <td>{{ $jurnal->edisi }}</td>
            <td>{{ $jurnal->kota }}</td>
            <td>{{ $jurnal->tahun }}</td>
        </tr>
        @endforeach

    
</table>
@endsection