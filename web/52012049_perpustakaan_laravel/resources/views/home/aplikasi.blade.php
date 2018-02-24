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
        @auth
        <div class="col-md-12 text-center" >
            <a class="btn btn-success" href="{{ route('aplikasi.add') }}" float="left">Tambah Tugas Aplikasi</a>
        </div>
        @endauth
        <div class="col-md-12">
            <div class="table-responsive"> 
                <table class="table" align="center" width='100%'>
                    <thead>
                        <tr class="tr-head">
                            <th>Judul</th>
                            <th>Nomor Induk Mahasiswa</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jurusan</th>
                            <th>Tahun</th>
                            @auth
                            <th align="center">Aksi</th>
                            @endauth
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
                            @auth
                            <td class="text-center">
                                <a class="icon-action" href="{{ route('aplikasi.edit', $aplikasi->id) }}">
                                    <i class="fa fa-pencil"></i> <!--Edit-->
                                </a>
                                &nbsp;
                                <a class="icon-action" href="{{ route('aplikasi.hapus', $aplikasi->id) }}">
                                    <i class="fa fa-trash"></i> <!--Hapus-->
                                </a>
                            </td>
                            @endauth

                        </tr>
                        @endforeach

                </table>
            </div>
        </div>
    </div>
</div>
@endsection