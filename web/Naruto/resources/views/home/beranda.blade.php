@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
<!--<img class="thumbnail" src="{{ asset('img/project/background.jpg') }}" alt="{{ asset('img/project/background.jpg') }}">-->
<div class="row">
    <div class="col-md-6">
        <img class="foto" src="{{ asset('/img/gaya.JPG') }}">
    </div>
    <div class="col-md-6">
        <div class="judul">
            <div class="halo">Hi I'm</div>
            <div class="nama">WAODE MAKANI DAGA</div>
            <div class="desk tipo">A DAUGHTER <span>|</span></div>
            <div class="animasi"></div>             
        </div>
    </div>
    <!--    <div class="sesuatu"></div>-->
</div>

@endsection