@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
@endsection

@section('content')


<div class="row">
    <div class="col-md-12">
        <div id="back">
            <div id="textback">Portfolio</div>
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="judul">
            Portfolio
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="title">M.I.S SKYPION PROJECT</div>
        <div class="desc">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ullamcorper dapibus felis ac consectetur. Curabitur vehicula metus et metus vestibulum, a malesuada nunc consectetur. Curabitur nunc est, vulputate id enim quis, tristique hendrerit eros. Curabitur sit amet metus ac purus lacinia varius. Donec nunc dui, ornare non fringilla ac, mollis tincidunt metus. Curabitur convallis hendrerit efficitur. Proin nisi lorem, condimentum sit amet pellentesque id, suscipit aliquet nunc. Quisque hendrerit semper odio. Suspendisse potenti. Donec pellentesque, sem vehicula aliquam facilisis, tellus ante sodales nibh, nec cursus justo augue sed nisl. Sed eu augue rutrum, mollis arcu in, posuere neque. Nullam vitae erat et diam porttitor sagittis eu sollicitudin augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla mollis ipsum diam, vitae pharetra dui rutrum eget. Quisque et diam ut ipsum gravida efficitur ut at leo.                 
            </p>
        </div>
    </div>
    
    <div class="col-md-6">
        <img class="foto" src="{{ asset('/img/mis.png') }}" alt="{{ asset('/img/mis.png') }}">
    </div>
    
</div>

@endsection