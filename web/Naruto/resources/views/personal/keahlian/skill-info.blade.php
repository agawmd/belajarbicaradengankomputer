@extends('template.template')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="skillbar clearfix" data-percent="40%">
                <div class="skillbar-title" style="background: #ea3d17;">
                    <span>JAVA</span>
                </div>
                <div class="skillbar-bar" style="background: #ff4828;"></div>
                <div class="skill-bar-percent">40%</div>
            </div><!-- End Skill Bar -->
            <div class="skillbar clearfix" data-percent="20%">
                <div class="skillbar-title" style="background: #f4a102;">
                    <span>HTML</span>
                </div>
                <div class="skillbar-bar" style="background: #f9bc0c;"></div>
                <div class="skill-bar-percent">20%</div>
            </div><!-- End Skill Bar -->
            <div class="skillbar clearfix" data-percent="25%">
                <div class="skillbar-title" style="background: #3498db;">
                    <span>CSS</span>
                </div>
                <div class="skillbar-bar" style="background: #00b0fb;"></div>
                <div class="skill-bar-percent">25%</div>
            </div><!-- End Skill Bar -->
            <div class="skillbar clearfix" data-percent="50%">
                <div class="skillbar-title" style="background: #30577c;">
                    <span>PHP</span>
                </div>
                <div class="skillbar-bar" style="background: #5d8696;"></div>
                <div class="skill-bar-percent">50%</div>
            </div><!-- End Skill Bar -->
            <p><strong>SOURCE :</strong> http://w3lessons.info/2013/06/04/skill-bar-with-jquery-css3/</p>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/skill-info.js') }}"></script>
@endsection
