@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
@endsection

@section('content')


<div class="row">
    <div class="col-md-6">
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
            <span class="sr-only">70% Complete</span>
          </div>
        </div>
    </div>
</div>

@endsection