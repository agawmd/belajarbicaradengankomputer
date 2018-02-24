@extends('template.template')

@section('content')
<!--<div class='row'>
    <div class='col-md-4 col-center'>
        @if(isset($nama))
        <div class="alert alert-warning alert-dismissible" role="alert">
            Halo <strong>{{ $nama }}</strong>, welcome to lalala.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>                    
        @endif
        <form action="{{ url('lala-post') }}" method="POST">
            {{ csrf_field() }}
            <fieldset>
                <input name='nama' class="form-control">
            </fieldset>
            <fieldset>
                <input type="submit">
            </fieldset>
        </form>
    </div>
</div>-->


<!--<div class="row">
    <div class="col-md-6">
        DISINI SEDANG BERLANGSUNG PERTANDINGAN LOADING TERBANYAK
    </div>
</div>-->

<!--
<div class='row'>
    <div class='col-md-3 b-red'>
        ada berapa?
    </div>
    <div class='col-md-9 b-blue'>
        ada berapa?
    </div>
</div>

<div class='row'>
    <div class='col-md-6 b-green'>
        ada berapa?
    </div>
    <div class='col-md-6 b-yellow'>
        ada berapa?
    </div>
</div>


<div class='row'>
    <div class='col-md-4 b-black'>
        ada berapa?
    </div>
    <div class='col-md-4 b-pink'>
        ada berapa?
    </div>
    <div class='col-md-4 b-gold'>
        ada berapa?
    </div>
</div>-->

<div class='row'>
    <div id='col'>
Get the damn load
    </div>
</div>

<div class='row'>
    {{ csrf_field() }}
    <button type="button" onclick="window.location='{{ URL::route('home.akun') }}'">Click Me</button></div>
<script>
    var z = document.getElementById('col');
    setInterval(function() {
        z.className = "col-md-"+( Math.floor(Math.random() * 12) + 1);  
    }, 1000);
</script>
@endsection
