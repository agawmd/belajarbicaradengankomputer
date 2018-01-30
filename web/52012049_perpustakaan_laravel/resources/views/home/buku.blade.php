@extends('layouts.template')

@section('content')       

<div class="container">
    <div class="row">
        @if(session()->has('status'))
        <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-{{ session()->get('status') }} fade in alert-dismissable text-center">
                {!! session()->get('pesan') !!}
            </div>
        </div>
        @endif
        <div class="col-md-12">
            <table align="center" width='100%'>
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
                            <a href="{{ route('buku.pinjam', $buku->id) }}">Pinjam</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection