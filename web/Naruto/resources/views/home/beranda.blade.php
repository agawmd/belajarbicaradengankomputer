@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
<!--<img class="thumbnail" src="{{ asset('img/project/background.jpg') }}" alt="{{ asset('img/project/background.jpg') }}">-->

<div class="row">
    <div class="col-md-12">
        <div class="line-break-up"></div>
    </div>
    
    <div class="col-md-4">
        <div class="image-frame">
            <img class="image" src="{{ asset('/img/aga.png') }}" alt="{{ asset('/img/aga.png') }}">
        </div>
    </div>
    
    <div class="col-md-8">
        <div class="text-box">
            <div class="first-name">WAODE</div>
            <div class="middle-name">MAKANI DAGA</div>
            <div class="title-name">Beginner Web Developer</div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="download-box">
            <div class="download-area">
                <a href="{{ asset('/files/CV_Waode_Makani_Daga.pdf') }}" download="">
                    <button class="download-button" title="Download Curriculum Vitae">DOWNLOAD MY CV <img class="icon" src="{{ asset('/icon/tag/download.png') }}" alt="{{ asset('/icon/tag/download.png') }}"></button>
                </a>
            </div>                   
        </div>       
    </div>
    
    <div class="col-md-12">
        <div class="line-break-down">

        </div>
    </div>
</div>

@endsection