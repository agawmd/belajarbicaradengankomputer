@extends('template.template')


@section('style')
<link rel="stylesheet" href="{{ asset('/css/skill.css') }}">
<link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="line-break-up"></div>
    </div>  
    
    <div class="col-md-2">
        <div class="header-box bounceIn">
            <div class="header-title">SKILL</div>
            <div class="underline"></div>
            <div class="header-icon">
                <img class="icon" src="{{ asset('/icon/tag/skill.png') }}" alt="{{ asset('/icon/tag/skill.png') }}">
            </div>
        </div>        
    </div>    

        
    <div class="col-md-6">
        <div class="intro-box">
            <div class="intro-text">
                I learned in a couple years about programming languages within the scope of the lecture and an understanding of the concepts and writing the code is still in my development stage.            
            </div>
        </div>
        <div class="center bounceIn">
            <h2>Software Skill</h2>
            <div class="skill-box">
                <p>Html</p>
                <p>90%</p>
                <div class="skill">
                    <div class="skill-level" style="width: 90%"></div>
                </div>
            </div>
            <div class="skill-box">
                <p>Css</p>
                <p>80%</p>
                <div class="skill">
                    <div class="skill-level" style="width: 80%"></div>
                </div>
            </div>
            <div class="skill-box">
                <p>PHP</p>
                <p>75%</p>
                <div class="skill">
                    <div class="skill-level" style="width: 75%"></div>
                </div>
            </div>
            <div class="skill-line-box">
                <div class="skill-line"></div>
            </div>
            <div class="skill-ability-box">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="ability-left">Beginner</div>                        
                    </div>
                    <div class="col-sm-3">
                        <div class="ability-left">Elementary</div>                        
                    </div>
                    <div class="col-sm-3">
                        <div class="ability-right">Advance</div>                        
                    </div>
                    <div class="col-sm-3">                
                        <div class="ability-right">Expert</div>
                    </div>
                </div>
            </div>
        </div>   
    </div>

    
    <div class="col-md-4">
        <div class="language-box bounceIn">
            <h4>Language Skill</h4>
            <div class="row">
                <div class="col-sm-6">
                    <div class="language">English Experience</div>
                    <div class="language">Indonesia Experience</div>
                    <div class="language">Local Language</div>
                </div>
                <div class="col-sm-6">
                    <div class="star-box">                        
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="star-box">                        
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="star-box">                        
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>                    
                </div>
            </div>
        </div>
        
        <div class="intro-box">
            <div class="intro-text fadeIn">
                I found the experience in English when attending English speaking courses during school.
                While Indonesian has become a common language, and I understand enough for the local language but it is still difficult and fluent.
            </div>
        </div>        
        
    </div>

    <div class="col-md-12">
        <div class="line-break-down"></div>
    </div>  
</div>
@endsection

<!--    <div class="col-md-8">
        <div class="line-top"></div>
    </div>    
    <div class="col-md-4">
        <div class="box-tag">SKILLS</div>    
    </div>
    
    <div class="col-md-8">
        <div class="row">
            <div class="col-sm-12"><div class="line-one">CODE PROGRESS</div></div>

            <div class="col-sm-4">
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: 60%;"><span class="title">60%</span></div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="main">HTML & CSS</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="sub">Advance</div>
                    </div>                    
                </div>                
            </div>
            
            <div class="col-sm-4">
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: 43%;"><span class="title">43%</span></div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="main">VB.NET</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="sub">Beginner</div>
                    </div>                    
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: 30%;"><span class="title">30%</span></div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="main">PHP & Laravel</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="sub">Beginner</div>
                    </div>                    
                </div>
            </div>
            
        </div>
    </div>
    
    
    <div class="col-md-4">
        <div class="row">
            <div class="col-sm-12"><div class="line-two">LANGUAGE</div></div>            
            
            <div class="col-sm-4">
                <div class="second">Indonesian</div>
            </div>
            <div class="col-sm-8">
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: 80%;"><span class="title">80%</span></div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="second">English</div>
            </div>
            <div class="col-sm-8">
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: 70%;"><span class="title">70%</span></div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="second">Local</div>
            </div>
            <div class="col-sm-8">
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: 50%;"><span class="title">50%</span></div>
                </div>
            </div>
           
        </div>
    </div>
    
    <div class="col-md-8"></div>
    
    <div class="col-md-4">
        <div class="row">
            <div class="col-sm-12"><div class="line-two">KNOWLEDGE</div></div>            
            
            <div class="col-sm-4">
                <div class="second">Write Fiction</div>
            </div>
            <div class="col-sm-8">
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: 70%;"><span class="title">70%</span></div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="second">Sketch</div>
            </div>
            <div class="col-sm-8">
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: 70%;"><span class="title">70%</span></div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="second">GIMP 2.0</div>
            </div>
            <div class="col-sm-8">
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: 65%;"><span class="title">65%</span></div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="second">Photography</div>
            </div>
            <div class="col-sm-8">
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: 60%;"><span class="title">60%</span></div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="second">Design Thinking</div>
            </div>
            <div class="col-sm-8">
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: 50%;"><span class="title">50%</span></div>
                </div>
            </div>            
            
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="side"></div>
    </div>-->