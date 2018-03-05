@extends('master.layout')

@section('content')
<div class="container">
    <div class="row">
        <h2>Modal</h2>
        <!-- Trigger/Open The Modal -->
        <button id="myBtn">Open Modal</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <p>Some text in the Modal..</p>
            </div>

        </div>        
    </div>
</div>   
@endsection
