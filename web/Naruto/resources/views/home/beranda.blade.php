@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
<!--<img class="thumbnail" src="{{ asset('img/project/background.jpg') }}" alt="{{ asset('img/project/background.jpg') }}">-->
<div class="row">
    <div class="col-md-12 bg-frame">
        <div class="frame">
            <img class="photo" src="{{ asset('/img/gaya.png') }}"  alt="{{ asset('/img/gaya.png') }}">
        </div>
    </div>

    <div class="col-md-6">
        <div class="title-text">
            <div class="first-text">WAODE</div>
            <div class="second-text">MAKANI DAGA</div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="link">
                    <a href="https://www.linkedin.com/in/agawmd/" target="_blank" title="Linked In"><img class="icon-bar icon icon-by" src="{{ asset('/icon/link.png') }}" alt="{{ asset('/icon/link.png') }}"></a>                
                    <a href="https://www.instagram.com/aga_wmd/" target="_blank" title="Instagram"><img class="icon-bar icon icon-by" src="{{ asset('/icon/ints.png') }}" alt="{{ asset('/icon/ints.png') }}"></a>                    
                    <a href="https://github.com/agawmd" target="_blank" title="GitHub"><img class="icon-bar icon icon-by" src="{{ asset('/icon/hub.png') }}" alt="{{ asset('/icon/hub.png') }}"></a>                    
                </div>
            </div>
            <div class="col-sm-6">
                <div class="third-text">Beginner Web Programming</div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="download-area">
            <div class="third-text"></div>
            <button class="button-download">Download My CV<img class="icon" src="{{ asset('/icon/tag/download.png') }}"></button>
        </div>
        <div class="line"></div>
        <div class="row desc bold">
            <div class="col-sm-4">
                <div>Phone</div>
            </div>
            <div class="col-sm-4">
                <div>Email</div>
            </div>
            <div class="col-sm-4">
                <div class="right">Location</div>
            </div>            
        </div>
        <div class="row desc">
            <div class="col-sm-4">
                <div>(+62)813-4168-6169</div>
            </div>
            <div class="col-sm-4">
                <div>dagawaodemakani@gmail.com</div>
            </div>
            <div class="col-sm-4">
                <div class="right">Indonesia</div>
            </div>            
        </div>        
    </div>
    
</div>


@endsection



<!--    <div class="col-md-6">
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
        <div class="sesuatu"></div>-->
    