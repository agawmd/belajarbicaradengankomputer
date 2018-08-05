@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('/css/resume.css') }}">
@endsection

@section('content')
<div class="row">
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

    <div class="col-md-12 line-middle"></div>    

    
</div>  
@endsection





<!--    <div class="col-md-12">
        <div id="back">
            <div id="textback">Experience & Education</div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="judul">Experience</div>        
    </div>

    <div class="col-md-4 batas-akhir">
        <div class="utama">
            <img class="ikon" src="{{ asset('/logo/tssc.jpg') }}">            
            <div class="nama">Taman Surya Sport Club (Freelance)</div>
            <div class="lama">Sep 2015 - Nov 2015</div>
        </div>       
    </div>
    <div class="col-md-8">
        <div class="kedua">
            <div class="prof">UI Designer</div>
            <div class="isi">
                <li>Create User Interface System Information.</li>
                <li>Direct User Experience with bussiness flow.</li>
            </div>
            <div class="skill">Skill Set</div>
        </div>
        <div class="row">
            <div class="col-sm-2 col-sm-2">   
                <div class="frame">
                    <table>
                        <tr>
                            <th>System</th>
                        </tr>
                        <tr>
                            <td>Windows</td>
                        </tr>
                    </table>                 
                </div>
            </div>
            <div class="col-sm-2 col-sm-2">
                <div class="frame">
                    <table>
                        <tr>
                            <th>Wireframe</th>
                        </tr>
                        <tr>
                            <td>Photoshop CS4</td>
                        </tr>
                        <tr>
                            <td>Marvel</td>
                        </tr>
                    </table>            
                </div>                
            </div>
        </div>
    </div>
    
    <div class="col-md-12 batas-awal">
        <div class="judul">Education</div>
        <div class="kepala">Formal</div>        
    </div>
    
    <div class="col-md-4 batas-akhir">
        <div class="utama">
            <img class="ikon" src="{{ asset('/logo/stmik.gif') }}">            
            <div class="nama">STMIK Kharisma Makassar</div>
            <div class="lama">2012 - Present</div>            
        </div>
    </div>
    
    <div class="col-md-8 batas-akhir">
        <div class="kedua">
            <div class="prof">Software Engineering</div>
            <div class="isi">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ullamcorper dapibus felis ac consectetur. Curabitur vehicula metus et metus vestibulum, a malesuada nunc consectetur. Curabitur nunc est, vulputate id enim quis, tristique hendrerit eros. Curabitur sit amet metus ac purus lacinia varius. Donec nunc dui, ornare non fringilla ac, mollis tincidunt metus. Curabitur convallis hendrerit efficitur. Proin nisi lorem, condimentum sit amet pellentesque id, suscipit aliquet nunc. Quisque hendrerit semper odio. Suspendisse potenti. Donec pellentesque, sem vehicula aliquam facilisis, tellus ante sodales nibh, nec cursus justo augue sed nisl. Sed eu augue rutrum, mollis arcu in, posuere neque. Nullam vitae erat et diam porttitor sagittis eu sollicitudin augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla mollis ipsum diam, vitae pharetra dui rutrum eget. Quisque et diam ut ipsum gravida efficitur ut at leo. 
                </p>
            </div>            
        </div>
    </div>
    <div class="col-md-4 batas-akhir">
        <div class="utama">
            <img class="ikon" src="{{ asset('/logo/twh.png') }}">            
            <div class="nama">SMA Satria Makassar</div>
            <div class="lama">2009 - 2012</div>            
        </div>
    </div>
    
    <div class="col-md-8 batas-akhir">
        <div class="kedua">
            <div class="prof">Science Major</div>
            <div class="isi">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ullamcorper dapibus felis ac consectetur. Curabitur vehicula metus et metus vestibulum, a malesuada nunc consectetur. Curabitur nunc est, vulputate id enim quis, tristique hendrerit eros. Curabitur sit amet metus ac purus lacinia varius. Donec nunc dui, ornare non fringilla ac, mollis tincidunt metus. Curabitur convallis hendrerit efficitur. Proin nisi lorem, condimentum sit amet pellentesque id, suscipit aliquet nunc. Quisque hendrerit semper odio. Suspendisse potenti. Donec pellentesque, sem vehicula aliquam facilisis, tellus ante sodales nibh, nec cursus justo augue sed nisl. Sed eu augue rutrum, mollis arcu in, posuere neque. Nullam vitae erat et diam porttitor sagittis eu sollicitudin augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla mollis ipsum diam, vitae pharetra dui rutrum eget. Quisque et diam ut ipsum gravida efficitur ut at leo. 
                </p>
            </div>            
        </div>
    </div>
    
    <div class="col-md-4 batas-akhir">
        <div class="utama">
            <img class="ikon" src="{{ asset('/logo/twh.png') }}">            
            <div class="nama">SMP Satria Makassar</div>
            <div class="lama">2006 - 2009</div>            
        </div>
    </div>
    
    <div class="col-md-8 batas-akhir">
        <div class="kedua">
            <div class="prof">B Class</div>
            <div class="isi">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ullamcorper dapibus felis ac consectetur. Curabitur vehicula metus et metus vestibulum, a malesuada nunc consectetur. Curabitur nunc est, vulputate id enim quis, tristique hendrerit eros. Curabitur sit amet metus ac purus lacinia varius. Donec nunc dui, ornare non fringilla ac, mollis tincidunt metus. Curabitur convallis hendrerit efficitur. Proin nisi lorem, condimentum sit amet pellentesque id, suscipit aliquet nunc. Quisque hendrerit semper odio. Suspendisse potenti. Donec pellentesque, sem vehicula aliquam facilisis, tellus ante sodales nibh, nec cursus justo augue sed nisl. Sed eu augue rutrum, mollis arcu in, posuere neque. Nullam vitae erat et diam porttitor sagittis eu sollicitudin augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla mollis ipsum diam, vitae pharetra dui rutrum eget. Quisque et diam ut ipsum gravida efficitur ut at leo. 
                </p>
            </div>            
        </div>
    </div>-->
