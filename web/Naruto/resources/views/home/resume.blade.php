@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('/css/resume.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div id="back">
            <div id="textback">Experience</div>
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
</div>
@endsection
