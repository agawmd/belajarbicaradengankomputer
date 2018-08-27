@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('/css/resume.css') }}">
<link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="line-break-up"></div>
    </div>

    <div class="col-md-4">
        <div class="activity-box">            
            <i class="act-icon fas fa-graduation-cap"></i>
            <h3>Education</h3>
            <div class="activity-title">
                <img class="act-logo" src="{{ asset('/logo/kharisma-logo.gif') }}" alt="{{ asset('/logo/kharisma-logo.gif') }}">STMIK Kharisma Makassar
                <div class="act-sub">
                    <div class="subtitle">Bachelor of Computer Science</div>
                    <div class="sub-year">2019 (Expected)</div>
                    <i class="act-map fas fa-map-marker"></i>South Sulawesi
                </div>                
            </div>
            <div class="activity-title">
                <img class="act-logo" src="{{ asset('/logo/yapen-satria-logo.png') }}" alt="{{ asset('/logo/yapen-satria-logo.png') }}">SMA Satria Makassar
                <div class="act-sub">
                    <div class="subtitle">High School Graduation</div>
                    <div class="sub-year">2012</div>
                    <i class="act-map fas fa-map-marker"></i>South Sulawesi
                </div>                
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="activity-box">
            <i class="act-icon fas fa-award"></i>
            <h3>Activities</h3>
            <div class="activity-title">
                <img class="act-logo" src="{{ asset('/logo/inkanas-logo.png') }}" alt="{{ asset('/logo/inkanas-logo.png') }}">Institut Karate-Do Nasional
                <div class="act-sub">
                    <div class="subtitle">Karateka</div>
                    <div class="sub-year">2008 - 2014</div>
                    <i class="act-map fas fa-map-marker"></i>South Sulawesi
                </div>                
            </div>
            <div class="activity-title">
                <img class="act-logo" src="{{ asset('/logo/kharisma-logo.gif') }}" alt="{{ asset('/logo/kharisma-logo.gif') }}">Pusat Pendidikan Komputer KHARISMA
                <div class="act-sub">
                    <div class="subtitle">Computer Course</div>
                    <div class="sub-year">2012</div>
                    <i class="act-map fas fa-map-marker"></i>South Sulawesi
                </div>                
            </div>
            <div class="activity-title">
                <img class="act-logo" src="{{ asset('/logo/veefa-logo.gif') }}" alt="{{ asset('/logo/veefa-logo.gif') }}">Veefa International Institute
                <div class="act-sub">
                    <div class="subtitle">English Course</div>
                    <div class="sub-year">2010 - 2011</div>
                    <i class="act-map fas fa-map-marker"></i>South Sulawesi
                </div>                
            </div>            
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="activity-box">
            <i class="act-icon fas fa-briefcase"></i>
            <h3>Experience</h3>
            <div class="activity-title">
                <img class="act-logo" src="{{ asset('/logo/tssc-logo.jpg') }}" alt="{{ asset('/logo/tssc-logo.jpg') }}">Taman Surya Sport Club
                <div class="act-sub">
                    <div class="subtitle">UI Designer (Freelance)</div>
                    <div class="sub-year">Jun 2016 - Jul 2016</div>
                    <i class="act-map fas fa-map-marker"></i>West Jakarta
                </div>                
            </div>            
        </div>
    </div>

    <div class="col-md-12">
        <div class="line-break-down"></div>
    </div>    
</div>

@endsection


<!--        


    <div class="col-md-2">
        <div class="header-box bounceIn">
            <div class="header-title">EXPERIENCE</div>
            <div class="underline"></div>
            <div class="header-icon">
                <img class="icon" src="{{ asset('/icon/tag/work.png') }}" alt="{{ asset('/icon/tag/work.png') }}">
            </div>
        </div>
    </div>
    
    <div class="col-md-10">
        <div class="info-box" id="experience-section">
            <div class="row">
                <div class="col-sm-2">
                    <div class="info-image">
                        <img class="image" src="{{ asset('/logo/tssc-logo.jpg') }}" alt="{{ asset('/logo/tssc-logo.jpg') }}">                    
                    </div>                
                </div>
                <div class="col-sm-10">
                    <div class="info-work">TAMAN SURYA SPORT CLUB</div>
                    <div class="info-date">Jun 2016 - Jul 2016</div>
                    <div class="info-place"><img class="info-icon" src="{{ asset('/icon/tag/region.png') }}" alt="{{ asset('/icon/tag/region.png') }}">West Jakarta</div>
                    <div class="info-title">UI Designer</div>                
                </div>                
            </div>
        </div> 
            <div class="animated" id="experience-description">
                The result of my first freelance work was to design the user interface and provide feedback, so that users can interact easily in using it.
                As I said before, I have worked as a freelance UI Designer at one of the sports clubs in West Jakarta. As a back-end programmer, it is certainly not easy, it can be said that this is the first time I know the design and implement it manually. I redesigned the workflow of the entire database that was given because at that time I was really very ordinary with the discussion, so I needed to find out what I was doing and how to solve it.
                After that, I started with the basic technique in Photoshop CS4. Initially I would have thought this work would be short but with layers piled up to hundreds, I just realized that what I had done so far had become a large system. Which when run through PowerPoint Slideshow when it is connected via a link to the next image, is the same as when starting to run the system to end a workflow in the database.                
            </div>
    </div>
    
    <div class="col-md-12">
        <div class="line-break-up"></div>
    </div>
     
    <div class="col-md-2">
        <div class="header-box bounceIn">
            <div class="header-title">EDUCATION</div>
            <div class="underline"></div>
            <div class="header-icon">
                <img class="icon" src="{{ asset('/icon/tag/graduation.png') }}" alt="{{ asset('/icon/tag/graduation.png') }}">
            </div>
        </div>        
    </div>
    
    <div class="col-md-10">
        <div class="education-box fadeInRight">
            <div class="row">
                <div class="col-sm-2">
                    <div class="education-image">
                        <img class="image" src="{{ asset('/logo/kharisma-logo.gif') }}" alt="{{ asset('/logo/kharisma-logo.gif') }}">                    
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="education-text" id="campus-section">
                        <div class="education-date">2019 (expected)</div>
                        <div class="education-title">BEng. in Computer Science</div>
                        <div class="education-place">STMIK KHARISMA MAKASSAR</div>
                        <div class="info-place"><img class="info-icon" src="{{ asset('/icon/tag/region.png') }}" alt="{{ asset('/icon/tag/region.png') }}"><i>South Sulawesi</i></div>
                    </div>                
                </div>
            </div>            
        </div>
    </div>

    <div class="col-md-2"></div>
    
    <div class="col-md-10">
        <div class="education-box fadeInRight">
            <div class="row">
                <div class="col-sm-2">
                    <div class="education-image">
                        <img class="image" src="{{ asset('/logo/yapen-satria-logo.png') }}" alt="{{ asset('/logo/yapen-satria-logo.png') }}">                    
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="education-text" id="highschool-section">
                        <div class="education-date">2012</div>
                        <div class="education-title">High School Graduates</div>
                        <div class="education-place">SMA SATRIA MAKASSAR</div>
                        <div class="info-place"><img class="info-icon" src="{{ asset('/icon/tag/region.png') }}" alt="{{ asset('/icon/tag/region.png') }}"><i>South Sulawesi</i></div>
                    </div>                
                </div>
            </div>            
        </div>
    </div>    
    
    <div class="col-md-12">
        <div class="line-break-up"></div>
    </div>
         
    <div class="col-md-2">
        <div class="header-box bounceIn">
            <div class="header-title">CERTIFICATE</div>
            <div class="underline"></div>
            <div class="header-icon">
                <img class="icon" src="{{ asset('/icon/tag/certificate.png') }}" alt="{{ asset('/icon/tag/certificate.png') }}">
            </div>
        </div>        
    </div>
    
    <div class="col-md-5">
        <div class="certificate-box">
            <div class="row">
                <div class="col-sm-2">
                    <div class="certificate-image">
                        <img class="image" src="{{ asset('/logo/inkanas-logo.png') }}" alt="{{ asset('/logo/inkanas-logo.png') }}">                        
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="certificate-text">
                        <div class="certificate-builder">INSTITUT KARATE-DO NASIONAL SULAWESI SELATAN</div>
                        <div class="certificate-title">Karateka</div>
                        <div class="certificate-date">2008 - 2014</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-5">
        <div class="certificate-box">
            <div class="row">
                <div class="col-sm-2">
                    <div class="certificate-image">
                        <img class="image" src="{{ asset('/logo/KNPI-logo.png') }}" alt="{{ asset('/logo/KNPI-logo.png') }}">                        
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="certificate-text">
                        <div class="certificate-builder">KOMISI NASIONAL PEMUDA INDONESIA PROVINSI SULAWESI SELATAN</div>
                        <div class="certificate-title">Peer Education</div>
                        <div class="certificate-date">2009</div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
    <div class="col-md-2"></div>

    <div class="col-md-5">
        <div class="certificate-box">
            <div class="row">
                <div class="col-sm-2">
                    <div class="certificate-image">
                        <img class="image" src="{{ asset('/logo/YJS-logo.png') }}" alt="{{ asset('/logo/YJS-logo.png') }}">                        
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="certificate-text">
                        <div class="certificate-builder">YAYASAN JANTUNG INDONESIA CABANG UTAMA SULAWESI SELATAN</div>
                        <div class="certificate-title">Gymnastics Training</div>
                        <div class="certificate-date">2010</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-5">
        <div class="certificate-box">
            <div class="row">
                <div class="col-sm-2">
                    <div class="certificate-image">
                        <img class="image" src="{{ asset('/logo/veefa-logo.gif') }}" alt="{{ asset('/logo/veefa-logo.gif') }}">                        
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="certificate-text">
                        <div class="certificate-builder">VEEFA INTERNATIONAL INSTITUTE</div>
                        <div class="certificate-title">English Courses</div>
                        <div class="certificate-date">2010 - 2011</div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
    <div class="col-md-2"></div>

    <div class="col-md-5">
        <div class="certificate-box">
            <div class="row">
                <div class="col-sm-2">
                    <div class="certificate-image">
                        <img class="image" src="{{ asset('/logo/kharisma-logo.gif') }}" alt="{{ asset('/logo/kharisma-logo.gif') }}">                        
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="certificate-text">
                        <div class="certificate-builder">PUSAT PENDIDIKAN KOMPUTER KHARISMA</div>
                        <div class="certificate-title">Computer Courses</div>
                        <div class="certificate-date">2012</div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
    -->

















<!--
    <div class="col-md-4">
        <div class="box-tag">EXPERIENCE</div>    
    </div>
    <div class="col-md-8">
        <div class="line-top"></div>
    </div>
       
    <div class="col-md-4">
        <div class="row">
            <div class="col-sm-6">
                <div class="work-box-1">
                    <div class="work-icon"><img class="icon" src="{{ asset('/logo/tssc.jpg') }}" alt="{{ asset('/logo/tssc.jpg') }}"></div>
                </div>            
            </div>
            <div class="col-sm-6">
                <div class="work-box-2">
                    <div class="work-name">Taman Surya Sport Club (Freelance)</div>
                    <div class="work-date">Sep 2015 - Nov 2015</div>
                    <div class="work-place">West Jakarta</div>
                </div>            
            </div>            
        </div>
    </div>
    
    <div class="col-md-8">
        <div class="desc-box">
            <div class="desc-title">UI Designer</div>
            <div class="desc">
                The result of my first freelance work was to design the user interface and provide feedback, so that users can interact easily in using it.
                As I said before, I have worked as a freelance UI Designer at one of the sports clubs in West Jakarta. As a back-end programmer, it is certainly not easy, it can be said that this is the first time I know the design and implement it manually. I redesigned the workflow of the entire database that was given because at that time I was really very ordinary with the discussion, so I needed to find out what I was doing and how to solve it.
                After that, I started with the basic technique in Photoshop CS4. Initially I would have thought this work would be short but with layers piled up to hundreds, I just realized that what I had done so far had become a large system. Which when run through PowerPoint Slideshow when it is connected via a link to the next image, is the same as when starting to run the system to end a workflow in the database.
            </div>
        </div>
    </div>
    
    <div class="col-md-12 line-middle"></div>
    <div class="col-md-4">
        <div class="box-tag">EDUCATION::FORMAL</div>    
    </div>
    <div class="col-md-8">
        <div class="line-top"></div>
    </div>

    <div class="col-md-4">
        <div class="row">
            <div class="col-sm-6">
                <div class="work-box-1">
                    <div class="work-icon"><img class="icon" src="{{ asset('/logo/stmik.gif') }}" alt="{{ asset('/logo/stmik.gif') }}"></div>
                </div>            
            </div>
            <div class="col-sm-6">
                <div class="work-box-2">
                    <div class="work-name">STMIK KHARISMA MAKASSAR</div>
                    <div class="work-date">2012 - Present</div>
                    <div class="work-place">South Sulawesi</div>
                </div>            
            </div>            
        </div>
    </div>
    
    <div class="col-md-8">
        <div class="desc-box">
            <div class="desc-title">Software Engineering (Bachelor's Degree)</div>
            <div class="desc">
                I studied Informatics study program with specialization in Software Engineering. With a long period of college, approximately 6 years are calculated this year. From the beginning I chose to enter the programming class because it was inspired by the 3 Idiots movie of that era, a reason that was crazy enough to enter and get to know a new world that I had never experienced at all.
                The beginning to know the programming language was quite doubtful because classmates at that time were almost completely Chinese clans, a little afraid of racial differences and high self-esteem made me feel isolated as a native. But I met with one of the lecturers (maybe I could mention him as a god lecturer) because of his intelligence, it was said he was known as the best graduate from this campus. He is named Jhonsong Hoya, we often call him Bajita. How to teach is really friendly for me, as an introverted person he always asks me to sit on the front seat. The first two semesters in which the class was always there, my grades were always A because I could understand what he had taught me.
            </div>
        </div>
    </div>    

    <div class="col-md-12 line-middle"></div>

    <div class="col-md-4">
        <div class="row">
            <div class="col-sm-6">
                <div class="work-box-1">
                    <div class="work-icon"><img class="icon" src="{{ asset('/logo/twh.png') }}" alt="{{ asset('/logo/twh.png') }}"></div>
                </div>            
            </div>
            <div class="col-sm-6">
                <div class="work-box-2">
                    <div class="work-name">SMA SATRIA MAKASSAR</div>
                    <div class="work-date">2009 - 2012</div>
                    <div class="work-place">South Sulawesi</div>
                </div>            
            </div>            
        </div>
    </div>
    
    <div class="col-md-8">
        <div class="desc-box">
            <div class="desc-title">Science Class</div>
            <div class="desc">
                South Sulawesi Youth Heart Health Gymnastic Activities, Karateka at the Indonesian National Karate-do Institute, GadjahMada Makassar Tutoring students, OSIS Chairperson, some are activities that I went through during high school. The lesson I like the most is Chemistry.                
                I was a science student with the lowest Chemistry grade at the beginning of the first year of school, but with determination not to be punished and humiliated in front of other students I studied seriously until I took tutoring courses only for Chemistry. In the end, I have proven that I can and exceed other students in terms of theory and practice in Chemistry, but unfortunately I spent my college with waste of time and do nothing.
            </div>
        </div>
    </div>     

    <div class="col-md-12 line-middle"></div>    
    <div class="col-md-4">
        <div class="box-tag">EDUCATION::NON-FORMAL</div>    
    </div>
    <div class="col-md-8">
        <div class="line-top"></div>
    </div>
    
    <div class="col-md-4">
        <div class="non-name">Certification Activities</div>
    </div>
    
    <div class="col-md-8">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="non-icon"><img class="icon" src="{{ asset('/logo/inkanas.png') }}" alt="{{ asset('/logo/inkanas.png') }}"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="non-edu">
                            <div class="non-line"></div>
                            <div class="non-title">INSTITUT KARATE-DO NASIONAL</div>
                            <div class="non-year">2008 - 2014</div>
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="non-icon"><img class="icon" src="{{ asset('/logo/stmik.gif') }}" alt="{{ asset('/logo/stmik.gif') }}"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="non-edu">
                            <div class="non-line"></div>
                            <div class="non-title">PUSAT PENDIDIKAN KOMPUTER KHARISMA</div>
                            <div class="non-year">2012</div>
                        </div>                        
                    </div>
                </div>               
            </div>            
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="non-icon"><img class="icon" src="{{ asset('/logo/kjr.jpg') }}" alt="{{ asset('/logo/kjr.jpg') }}"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="non-edu">
                            <div class="non-line"></div>
                            <div class="non-title">KLUB JANTUNG REMAJA SULAWESI SELATAN</div>
                            <div class="non-year">2010</div>
                        </div>                        
                    </div>
                </div>               
            </div>
            
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="non-icon"><img class="icon" src="{{ asset('/logo/veefa.gif') }}" alt="{{ asset('/logo/veefa.gif') }}"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="non-edu">
                            <div class="non-line"></div>
                            <div class="non-title">VEEFA INTERNATIONAL INSTITUTE</div>
                            <div class="non-year">2010</div>
                        </div>                        
                    </div>
                </div>
            </div>            
        </div>
    </div>

    <div class="col-md-12 line-middle"></div>-->
    