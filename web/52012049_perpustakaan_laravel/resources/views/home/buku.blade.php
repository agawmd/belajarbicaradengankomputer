@extends('layouts.template')

@section('content')       


<table align="center">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Lakukan Peminjaman</th>
        </tr>
    </thead>
    <tbody>
        @foreach($daftarBuku as $buku)
        <tr>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->pengarang }}</td>
            <td>{{ $buku->penerbit }}</td>
            <td>{{ $buku->tahun }}</td>
            
            <td>
                <a href="{{ route('home.buku', $buku->id) }}">Pinjam</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection