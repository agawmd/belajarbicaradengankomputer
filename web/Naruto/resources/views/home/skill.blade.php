@extends('template.template')
@section('content')

@section('style')
<link rel="stylesheet" href="{{ asset('css/skill.css') }}">
@endsection

<div class="row">
    <div class="col-md-12">
        <div id="back">
            <div id="textback">Skills</div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="judul">
            Skills
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="tickle">My Amateur Progress</div>
        <div class="desc">"Skill could not measured by the time but by the solved problem" - Basri Yasin.</div>

        <div class="row lost">
            <div class="col-sm-1 col-sm-1">
                <div class="stick"></div>               
            </div>
            <div class="col-sm-8 col-sm-2">
                <div class="quote">
                    Failure is also fun, living with the belief that trials are able to forge and shape my personality. Right, I failed. But I can still rise again. Repeatedly, continuously. Every try always feels heavy but that's where I think the meaning of true strength.
                </div>                            
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-4 col-sm-1">
                <div class="lang">HTML & CSS</div>
            </div>
            <div class="col-sm-8 col-sm-2">
                <div class="lost">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="max-width: 70%">
                        <span class="title">70%</span>
                      </div>
                    </div>             
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-1">
                <div class="lang">Visual Basic & .NET</div>
            </div>
            <div class="col-sm-8 col-sm-2">
                <div class="lost">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="max-width: 65%">
                        <span class="title">65%</span>
                      </div>
                    </div>             
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-1">
                <div class="lang">PHP & Laravel</div>
            </div>
            <div class="col-sm-8 col-sm-2">
                <div class="lost">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="max-width: 50%">
                        <span class="title">50%</span>
                      </div>
                    </div>             
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-1">
                <div class="lang">Java</div>
            </div>
            <div class="col-sm-8 col-sm-2">
                <div class="lost">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="max-width: 40%">
                        <span class="title">40%</span>
                      </div>
                    </div>             
                </div>
            </div>
        </div>
        
    </div> 
</div>

@endsection
