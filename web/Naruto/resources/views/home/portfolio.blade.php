@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
<link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
@endsection

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="line-break-up"></div>
    </div>
    <div class="col-md-12">        
        <h2>My Portfolio</h2> 
    </div>
    <div class="col-md-6">
        <div class="package-box">
            <div class="portfolio-box">
                <div class="image-box"><img class="images" src="{{ asset('img/project-management-system.png') }}" alt="{{ asset('img/project-management-system.png') }}"></div>
                <h4>Skypion Project - Event Organizer</h4>
                <h5>Management Information System Application</h5>
                <div class="port-overlay">
                    <a class="read-button" >
                        <button class="button-style">Read more <i class="fas fa-angle-double-right"></i></button>
                    </a>
                </div>
            </div>
        </div>        
    </div>
    
    <div class="col-md-12">
        <div class="line-break-up"></div>
    </div>
</div>

@endsection

<!--    <div class="col-md-12">
        <div class="line-break-up"></div>
    </div>
    
    <div class="col-md-2">
        <div class="header-box bounceIn">
            <div class="header-title">PORTFOLIO</div>
            <div class="underline"></div>
            <div class="header-icon">
                <img class="icon" src="{{ asset('/icon/tag/project.png') }}" alt="{{ asset('/icon/tag/project.png') }}">
            </div>
        </div>        
    </div>
    
    <div class="col-md-5">
        <div class="project-box">
            <img class="project-image" src="{{ asset('/img/project-perpustakaan.png') }}" alt="{{ asset('/img/project-perpustakaan.png') }}">
            <div class="project-text" id="hiddenText">
                <h5>Web Based Library Application Using <i>Laravel Framework</i></h5>
                <p>
                    I worked on this project while I was taking an Application Assignment course as a final report to meet the graduation rate of the course.                
                </p>
                <div class="pass-line"></div>
            </div>
            <div class="row bounceIn">
                <div class="col-sm-3">
                    <div class="project-title-box">
                        <div class="project-title">HTML</div>
                    </div>                    
                </div>
                <div class="col-sm-3">
                    <div class="project-title-box">
                        <div class="project-title">CSS</div>
                    </div>                    
                </div>
                <div class="col-sm-3">
                    <div class="project-title-box">
                        <div class="project-title">PHP</div>
                    </div>                    
                </div>                
            </div>            
        </div>
    </div>
    
    <div class="col-md-5">
        <div class="project-box">
            <img class="project-image" src="{{ asset('/img/project-management-system.png') }}" alt="{{ asset('/img/project-management-system.png') }}">
            <div class="project-text" id="hiddenText">
                <h5>Event Organizer Service Application</i></h5>
                <p>
                    I worked on this task to meet the graduation requirements of the visual programming courses in the campus.
                </p>
                <div class="pass-line"></div>
            </div>
            <div class="row bounceIn">
                <div class="col-sm-4">
                    <div class="project-title-box">
                        <div class="project-title">Visual Basic</div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>    
    
    <div class="col-md-12">
        <div class="line-break-down"></div>
    </div>    -->