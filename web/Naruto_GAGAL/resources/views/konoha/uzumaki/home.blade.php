@extends('master.layout')

@section('content')
<div class="container">
    <div class="row">
        <h2>Modal</h2>
        <!-- Trigger/Open The Modal -->
        <button data-toggle="modal" data-target="#exampleModal">Open Modal</button>

        <div id="#exampleModal" class="modal fade" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>   
@endsection

@section('script') 

@endsection
