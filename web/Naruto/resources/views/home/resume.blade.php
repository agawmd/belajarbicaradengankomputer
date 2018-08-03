@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('/css/resume.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div id="back">
            <div id="textback">Experience & Education</div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="judul">Experience</div>        
    </div>

    <div class="col-md-4">
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
    
    <div class="col-md-12">
        <div class="judul">Education</div>
        <div class="kepala">Formal</div>        
    </div>
    
    <div class="col-md-4 batas">
        <div class="utama">
            <img class="ikon" src="{{ asset('/logo/stmik.gif') }}">            
            <div class="nama">STMIK Kharisma Makassar</div>
            <div class="lama">2012 - Present</div>            
        </div>
    </div>
    
    <div class="col-md-8  batas">
        <div class="kedua">
            <div class="prof">Software Engineering</div>
            <div class="isi">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ullamcorper dapibus felis ac consectetur. Curabitur vehicula metus et metus vestibulum, a malesuada nunc consectetur. Curabitur nunc est, vulputate id enim quis, tristique hendrerit eros. Curabitur sit amet metus ac purus lacinia varius. Donec nunc dui, ornare non fringilla ac, mollis tincidunt metus. Curabitur convallis hendrerit efficitur. Proin nisi lorem, condimentum sit amet pellentesque id, suscipit aliquet nunc. Quisque hendrerit semper odio. Suspendisse potenti. Donec pellentesque, sem vehicula aliquam facilisis, tellus ante sodales nibh, nec cursus justo augue sed nisl. Sed eu augue rutrum, mollis arcu in, posuere neque. Nullam vitae erat et diam porttitor sagittis eu sollicitudin augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla mollis ipsum diam, vitae pharetra dui rutrum eget. Quisque et diam ut ipsum gravida efficitur ut at leo. 
                </p>
            </div>            
        </div>
    </div>
    <div class="col-md-4">
        <div class="utama">
            <img class="ikon" src="{{ asset('/logo/twh.png') }}">            
            <div class="nama">SMA Satria Makassar</div>
            <div class="lama">2009 - 2012</div>            
        </div>
    </div>
    
    <div class="col-md-8">
        <div class="kedua">
            <div class="prof">Science Major</div>
            <div class="isi">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ullamcorper dapibus felis ac consectetur. Curabitur vehicula metus et metus vestibulum, a malesuada nunc consectetur. Curabitur nunc est, vulputate id enim quis, tristique hendrerit eros. Curabitur sit amet metus ac purus lacinia varius. Donec nunc dui, ornare non fringilla ac, mollis tincidunt metus. Curabitur convallis hendrerit efficitur. Proin nisi lorem, condimentum sit amet pellentesque id, suscipit aliquet nunc. Quisque hendrerit semper odio. Suspendisse potenti. Donec pellentesque, sem vehicula aliquam facilisis, tellus ante sodales nibh, nec cursus justo augue sed nisl. Sed eu augue rutrum, mollis arcu in, posuere neque. Nullam vitae erat et diam porttitor sagittis eu sollicitudin augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla mollis ipsum diam, vitae pharetra dui rutrum eget. Quisque et diam ut ipsum gravida efficitur ut at leo. 
                </p>
            </div>            
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="utama">
            <img class="ikon" src="{{ asset('/logo/twh.png') }}">            
            <div class="nama">SMP Satria Makassar</div>
            <div class="lama">2006 - 2009</div>            
        </div>
    </div>
    
    <div class="col-md-8">
        <div class="kedua">
            <div class="prof">B Class</div>
            <div class="isi">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ullamcorper dapibus felis ac consectetur. Curabitur vehicula metus et metus vestibulum, a malesuada nunc consectetur. Curabitur nunc est, vulputate id enim quis, tristique hendrerit eros. Curabitur sit amet metus ac purus lacinia varius. Donec nunc dui, ornare non fringilla ac, mollis tincidunt metus. Curabitur convallis hendrerit efficitur. Proin nisi lorem, condimentum sit amet pellentesque id, suscipit aliquet nunc. Quisque hendrerit semper odio. Suspendisse potenti. Donec pellentesque, sem vehicula aliquam facilisis, tellus ante sodales nibh, nec cursus justo augue sed nisl. Sed eu augue rutrum, mollis arcu in, posuere neque. Nullam vitae erat et diam porttitor sagittis eu sollicitudin augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla mollis ipsum diam, vitae pharetra dui rutrum eget. Quisque et diam ut ipsum gravida efficitur ut at leo. 
                </p>
            </div>            
        </div>
    </div>    
    
    
</div>
@endsection
