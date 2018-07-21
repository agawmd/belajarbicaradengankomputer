@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
@endsection

@section('content')


<div class="row">
    <h1 class="display-1">P O R T F O L I O</h1>   
</div>
<div class="row">
    <p>
        a million dream for the world we're gonna make
    </p>    
</div>

<div class="row">
    <div class="dropdown-menu">
        <button>Hint</button>
        <button>Thing's</button>
        <button>City's</button>
    </div>
</div>

@endsection