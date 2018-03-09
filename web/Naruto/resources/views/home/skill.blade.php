@extends('template.template')
@section('content')

@section('style')
<link rel="stylesheet" href="{{ asset('css/skill.css') }}">
@endsection

<div class="row">
    <div class="col-md-12">
        <div class="title">
            Progress My Skill
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
