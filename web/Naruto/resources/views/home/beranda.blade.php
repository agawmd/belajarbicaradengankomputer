@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
<!--<img class="thumbnail" src="{{ asset('img/project/background.jpg') }}" alt="{{ asset('img/project/background.jpg') }}">-->
<div class="sk-rotating-plane"></div>
<div class="row">
    <div class="col-md-12">
        <div class="line-1"></div> 
        <div class="title-text">
            <div class="first-text">HELLO I AM</div>
            <div class="second-text">WAODE MAKANI DAGA</div>
            <div class="third-text">Beginner Web Programming</div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="download-area">
                    <div class="third-text"></div>
                    <a href="{{ asset('/files/CV_Waode_Makani_Daga.pdf') }}" download="">
                        <button class="button-download" title="Download My CV">Download My CV<img class="iconic" src="{{ asset('/icon/tag/download.png') }}" alt="{{ asset('/icon/download.png') }}"></button>                        
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="linked"> Find me on
                    <a href="https://www.linkedin.com/in/agawmd/" target="_blank" title="Linked In"><img class="icon-bar iconic icon-by" src="{{ asset('/icon/link.png') }}" alt="{{ asset('/icon/link.png') }}"></a>                
                    <a href="https://www.instagram.com/aga_wmd/" target="_blank" title="Instagram"><img class="icon-bar iconic icon-by" src="{{ asset('/icon/ints.png') }}" alt="{{ asset('/icon/ints.png') }}"></a>                    
                    <a href="https://github.com/agawmd" target="_blank" title="GitHub"><img class="icon-bar iconic icon-by" src="{{ asset('/icon/hub.png') }}" alt="{{ asset('/icon/hub.png') }}"></a>                    
                </div>
            </div>            
        </div>
        <div class="line"></div>
    </div>
    
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-6">
                <div class="phone">
                    <div class="sub-title">Phone</div>
                    <div>(+62)813-4168-6169</div>                    
                </div>
            </div>
            <div class="col-sm-6">
                <div class="email">
                    <div class="sub-title">Email</div>
                    <div>dagawaodemakani@gmail.com</div>                    
                </div>
            </div>            
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-6">
                <div class="web">
                    <div class="sub-title">Web</div>
                    <div>aga.basriyasin.com</div>                    
                </div>
            </div>
            <div class="col-sm-6">
                <div class="location">
                    <div class="sub-title">Location</div>
                    <div>Indonesia</div>                    
                </div>
            </div>            
        </div>        
    </div>   
</div>

@endsection
  