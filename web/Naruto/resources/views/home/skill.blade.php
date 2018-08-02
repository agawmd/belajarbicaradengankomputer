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
        <div class="title">My Amateur Progress</div>
        <div class="desc">"Skill could not measured by the time but by the solved problem" - Basri Yasin.</div>

        <div class="row">
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
        <div class="box">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>                
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="box">
            <div class="second-title">
                Java Programming
            </div>                    
        </div>
    </div>
    

    <div class="col-md-6">
        <div class="box">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 32%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">32%</div>
            </div>                
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="box">
            <div class="second-title">
                PHP
            </div>                    
        </div>
    </div>

    
    <div class="col-md-6">
        <div class="box">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 43%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">43%</div>
            </div>                
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="box">
            <div class="second-title">
                HTML
            </div>                    
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="box">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 37%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">37%</div>
            </div>                
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="box">
            <div class="second-title">
                CSS
            </div>                    
        </div>
    </div>   
</div>

@endsection
