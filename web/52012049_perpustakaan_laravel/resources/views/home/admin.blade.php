@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if(Auth::check())
                <!-- kalau user login tampilkan namana -->
                <div class="panel-heading">Hi {{ Auth::user()->name }}!</div>
                @endif
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Anda diharapkan Login sebagai Admin Atau Register sebagai Admin.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
