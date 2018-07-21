@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        @auth
        <div class="col-md-12 text-center" >
            <a class="btn btn-success" href="{{ route('jurnal.add') }}">Tambah Journal/Prociding</a>
        </div>
        @endauth

        <table align="center">
            <thead>
                <tr class="tr-head">
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Jurnal</th>
                    <th>Bidang Ilmu</th>
                    <th>Volume</th>
                    <th>Edisi</th>
                    <th>Kota</th>
                    <th>Tahun</th>
                    @auth
                    <th>Aksi</th>
                    @endauth
                    
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
    </div>
</div>                
@endsection