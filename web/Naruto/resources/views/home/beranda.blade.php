@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
<link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
@endsection

@section('content')
<!--<img class="thumbnail" src="{{ asset('img/project/background.jpg') }}" alt="{{ asset('img/project/background.jpg') }}">-->

<div class="row stars1 stars2 stars3">
    <div class="col-md-12">
        <div class="line-break-up"></div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="title-text">
            <h5 class="fadeIn">Hello I am</h5>
            <h1>Waode Makani Daga</h1>
            <div class="line-1 anim-typewriter">
                <h5>Beginner Web Developer</h5>
            </div>
            <div class="button-title">
                <a href="{{ asset('/files/CV_Waode_Makani_Daga.pdf') }}" download="">
                    <button class="button-style">Download CV <i class="fas fa-file-download"></i></button>
                </a>
            </div>            
        </div>        
    </div>
<!--    <div class="col-md-2">
        <div class="icon-title">
                
        </div>        -->
    </div>
    <div class="col-md-12">
        <div class="line-break-down"></div>
    </div>    
</div>

@endsection

<!--<div class="row">
    <div class="col-md-12">
        <div class="line-break-up"></div>
    </div>

    <div class="col-md-6">
        <div class="image-box">
            <img>here
        </div>
    </div>
    
    <div class="col-md-12"></div>    
    
    <div class="col-md-12">
        <div class="text-box">
            <div class="text-myname">Waode Makani Daga</div>
        </div>
    </div>
    
    <div class="col-md-12"></div>
    
    <div class="col-md-2"></div>
    
    <div class="col-md-8">
        <div class="line-box">
            <div class="underline"></div>
        </div>
    </div>
    
    <div class="col-md-2"></div>
    
    <div class="col-md-12"></div>
    
    <div class="col-md-12">
        <div class="text-box">
            <div class="text-title">I am a Beginner Programmer</div>            
        </div>
    </div>
    
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
        <div class="download-box bounceIn">
            <a href="{{ asset('/files/CV_Waode_Makani_Daga.pdf') }}" download="">
                <button class="download-button" title="Download Curriculum Vitae">DOWNLOAD MY CV <img class="download-icon" src="{{ asset('/icon/tag/download.png') }}" alt="{{ asset('/icon/tag/download.png') }}"></button>
            </a>
        </div>
    </div>
    
    <div class="col-md-4"></div>
    
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
        <div class="follow-box">
            <div class="follow-text"><i>Like to read ? I am here.</i></div>
            <div class="follow-link">
                <div class="link-icon">
                    <a href="https://medium.com/@aga_wmd" target="_blank" title="Medium"><img class="icon" src="{{ asset('/icon/medium.png') }}" alt="{{ asset('/icon/medium.png') }}"></a>
                </div>
                <div class="link-icon">
                    <a href="https://wmdsite.blogspot.com/" target="_blank" title="Blogger"><img class="icon" src="{{ asset('/icon/blogger.png') }}" alt="{{ asset('/icon/blogger.png') }}"></a>
                </div>
                <div class="link-icon">
                    <a href="https://agawmd.wordpress.com/" target="_blank" title="Wordpress"><img class="icon" src="{{ asset('/icon/wordpress.png') }}" alt="{{ asset('/icon/wordpress.png') }}"></a>
                </div>                
            </div>
        </div>
    </div>
    
    <div class="col-md-4"></div>
    
    <div class="col-md-12">
        <div class="line-break-down">

        </div>
    </div>
</div>--> 