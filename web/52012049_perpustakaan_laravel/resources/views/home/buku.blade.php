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
        <div class="col-md-12 row" >
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a class="btn btn-success" href="{{ route('buku.add') }}" float="left">Tambah Buku</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a class="btn btn-warning float-right" href="{{ route('buku.kembali') }}">Pengembalian Buku</a>
            </div>
        </div>
        @endauth
        <div class="col-md-12">
            <div class="table-responsive">

                <table class="table" align="center" width='100%'>
                    <thead>
                    <tr class="tr-head">
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        @auth
                        <th>Aksi</th>
                        @endauth
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($daftarBuku as $buku)
                        <tr>
                            <td>{{ $buku->judul }}</td>
                            <td>{{ $buku->pengarang }}</td>
                            <td>{{ $buku->penerbit }}</td>
                            <td>{{ $buku->tahun }}</td>
                            @auth
                            <td>
                                <a class="icon-action" href="{{ route('buku.pinjam', $buku->id) }}">
                                    <i class="fa fa-thumbs-o-up"></i> <!--Pinjam-->
                                </a>
                                &nbsp;
                                <a class="icon-action" href="{{ route('buku.edit', $buku->id) }}">
                                    <i class="fa fa-pencil"></i> <!--Edit-->
                                </a>
                                &nbsp;
                                <a class="icon-action" href="{{ route('buku.hapus', $buku->id) }}">
                                    <i class="fa fa-trash"></i> <!--Hapus-->
                                </a>
                            </td>
                            @endauth
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection