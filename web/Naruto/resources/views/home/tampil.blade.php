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

<!--<div class='row'>
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
xx
    </div>
</div>
<script>
    var z = document.getElementById('col');
    setInterval(function() {
        z.className = "col-md-"+( Math.floor(Math.random() * 12) + 1);  
    }, 1000);
</script>
@endsection

<!--
col     -  {xs, sm, md, lg} -   {1 2 3 4 5 6 7 8 9 10 11 12}

column      screen size     -   column size /12 * 100%
                                    12 / 12 -> ada 1 kolom
                                    1  / 12 -> ada 12  kolom
                                    5  / 12 -> ada 2 kolom
                                    4  / 12 -> ada 3 kolom
                                    8  / 12 -> ada 1 kolom
-->