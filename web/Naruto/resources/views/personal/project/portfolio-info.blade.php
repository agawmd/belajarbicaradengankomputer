@extends('template.template')

@section('content')


<html>
    <head></head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h1>LIFE IS HISTORY</h1>
                    </div>
                </div>
            </div>
            <button class="accourdion">What i've done</button>
                <div class="panel-acc">
                    <p>I have experience in the development of user interface on one business in Jakarta and its surrounding area,<i> Taman Surya Sport Club</i>. 
                        I am a freelancer at that time and who want to collaborate in the development of user interface is my partner. 
                        With its own pride because it can be trusted in the development of the project then with great curiosity, I started with confidence. 
                        As a form of my appreciation to the couple, I must do my best to prove to that I can do it.
                    </p>
                </div>
            <button class="accourdion">What i'm learning</button>
                <div class="panel-acc">
                    <p>I have experience in the development of user interface on one business in Jakarta and its surrounding area,<i> Taman Surya Sport Club</i>. 
                        I am a freelancer at that time and who want to collaborate in the development of user interface is my partner. 
                        With its own pride because it can be trusted in the development of the project then with great curiosity, I started with confidence. 
                        As a form of my appreciation to the couple, I must do my best to prove to that I can do it.
                    </p>
                </div>
            <button class="accourdion" onclick="myAccordian (panel-acc)">What i want to do</button>            
            <div class="panel-acc" id="id">
                    <p>I have experience in the development of user interface on one business in Jakarta and its surrounding area,<i> Taman Surya Sport Club</i>. 
                        I am a freelancer at that time and who want to collaborate in the development of user interface is my partner. 
                        With its own pride because it can be trusted in the development of the project then with great curiosity, I started with confidence. 
                        As a form of my appreciation to the couple, I must do my best to prove to that I can do it.
                    </p>
                </div>    

        </div>
        
    </body>
</html>




@endsection