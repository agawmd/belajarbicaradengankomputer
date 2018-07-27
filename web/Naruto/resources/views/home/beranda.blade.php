@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
<!--<img class="thumbnail" src="{{ asset('img/project/background.jpg') }}" alt="{{ asset('img/project/background.jpg') }}">-->
<div class="row">
    <div class="col-md-4">
        <div class="anima"></div>
        <div class="nama">
            AGA
        </div>
        disini
    </div>

    <div class="col-md-8">
        <div class="foto">
            <img class="thumbnail" src="{{ asset('img/agani.png') }}" alt="{{ asset('img/agani.png') }}">        
        </div>          
    </div>
</div>

@endsection