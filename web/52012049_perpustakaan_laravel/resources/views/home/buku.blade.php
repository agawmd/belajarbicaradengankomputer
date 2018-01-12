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
                <a href="pinjam.blade.php">Pinjam</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        @if(Auth::check())
        <tr>
            <td colspan="5">
                <!--Kalau admin sudah login muncul tombol tambah buku--> 
                <a class="col-md-12 btn btn-success" href="{{ route('buku.add') }}">Tambah Buku</a>
            </td>
        </tr>
        @endif
    </tfoot>
</table>
@endsection