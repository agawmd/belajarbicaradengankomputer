@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
<!--<img class="thumbnail" src="{{ asset('img/project/background.jpg') }}" alt="{{ asset('img/project/background.jpg') }}">-->
<div class="row">
    <div class="col-md-12">
        <div class="foto">
            <img class="thumbnail" src="{{ asset('img/agani.png') }}" alt="{{ asset('img/agani.png') }}">        
        </div>
    </div>
    
<div class="row">
    <div class="col-md-12">
        <button style="height: 100%; width: 100%;">I am</button>                        
    </div>

</div>
    
</div>
@endsection