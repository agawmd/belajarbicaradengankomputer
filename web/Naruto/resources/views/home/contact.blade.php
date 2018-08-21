@extends('template.template')

@section('style')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="line-break-up"></div>
    </div>
    
    <div class="col-md-2">
        <div class="header-box bounceIn">
            <div class="header-title">CONTACT</div>
            <div class="underline"></div>
            <div class="header-icon">
                <img class="icon" src="{{ asset('/icon/tag/contact.png') }}" alt="{{ asset('/icon/tag/contact.png') }}">
            </div>
        </div>        
    </div>
    
    <div class="col-md-5">
        <div class="contact-box">
            <div id="map" style="width: 400px; height: 200px;"></div>
            <div class="contact-title">
                <div class="row">
                    <div class="col-sm-1">                        
                        <img class="contact-icon" src="{{ asset('/icon/tag/placeholder.png') }}" alt="{{ asset('/icon/tag/placeholder.png') }}">
                    </div>
                    <div class="col-sm-11">                        
                        Sapiria, Barombong District, Gowa - South Sulawesi 90225
                    </div>
                </div>
            </div>             
            <div class="contact-title">
                <div class="row">
                    <div class="col-sm-1">                        
                        <img class="contact-icon" src="{{ asset('/icon/tag/mail.png') }}" alt="{{ asset('/icon/tag/mail.png') }}">
                    </div>
                    <div class="col-sm-11">                        
                        dagawaodemakani@gmail.com
                    </div>
                </div>
            </div>
            <div class="contact-title">
                <div class="row">
                    <div class="col-sm-1">                        
                        <img class="contact-icon" src="{{ asset('/icon/tag/telephone.png') }}" alt="{{ asset('/icon/tag/telephone.png') }}">
                    </div>
                    <div class="col-sm-11">                        
                        +62 813 4168 6169
                    </div>
                </div>
            </div>
            <div class="social-box">
                <div class="social-text">I am also in social network</div>
                <div class="social-icon">
                    <img class="social-icon-image" src="{{ asset('/icon/mono/instagram.png') }}" alt="{{ asset('/icon/mono/instagram.png') }}">
                    <img class="social-icon-image" src="{{ asset('/icon/mono/skype.png') }}" alt="{{ asset('/icon/mono/skype.png') }}">                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-5">
        <div class="mail-box">
            <div class="mail-text">
                <h5>Everything Begins with a Hello</h5>
                <p>Get in Touch and Let's Start Something Great Together</p>
            </div>            
            <form>
                <input type="text" placeholder="Your Name" name="fname"/><br>
                <br><input type="text" placeholder="Email" name="femail"/><br>
                <br><textarea placeholder="Message" name="fmessage"></textarea><br>
                <br><input type="submit" alt="Submit" value="Say Hello"/>
            </form>
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="line-break-down"></div>
    </div>
</div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>        

@endsection

<!--    <div class="col-md-12">
        <div class="maps">
            <div><img class="photo" src="{{ asset('/img/indonesia.jpg') }}" alt="{{ asset('/img/indonesia.jpg') }}"></div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="line"></div>    
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-6">
                <div class="phone">
                    <div class="sub-title">Phone</div>
                    <div>(+62)813-4168-6169</div>                    
                </div>
            </div>
            <div class="col-sm-6">
                <div class="email">
                    <div class="sub-title">Email</div>
                    <div>dagawaodemakani@gmail.com</div>                    
                </div>
            </div>            
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-6">
                <div class="web">
                    <div class="sub-title">Web</div>
                    <div>aga.basriyasin.com</div>                    
                </div>
            </div>
            <div class="col-sm-6">
                <div class="location">
                    <div class="sub-title">Location</div>
                    <div>Indonesia</div>                    
                </div>
            </div>            
        </div>        
    </div>    -->




<!--
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-8">
                <div class="box">
                    <div class="sapa">Say Hi It's Free !</div>
                    <div class="row batas">
                        <div class="col-sm-3 col-sm-1">
                            <img class="gam" src="{{ asset('/icon/tag/negara.png') }}" alt="{{ asset('/icon/negara.png') }}">
                        </div>
                        <div class="col-sm-6 col-sm-4">
                            <div class="loc">Sapiria, Sulawesi Selatan, Indonesia.</div>
                        </div>
                    </div>
                    <div class="row batas">
                        <div class="col-sm-3 col-sm-1">
                            <img class="gam" src="{{ asset('/icon/tag/email.png') }}" alt="{{ asset('/icon/negara.png') }}">
                        </div>
                        <div class="col-sm-3 col-sm-1">
                            <div class="loc">dagawaodemakani@gmail.com</div>
                        </div>
                    </div>
                    <div class="row batas">
                        <div class="col-sm-3 col-sm-1">
                            <img class="gam" src="{{ asset('/icon/tag/hp.png') }}" alt="{{ asset('/icon/hp.png') }}">
                        </div>
                        <div class="col-sm-3 col-sm-1">
                            <div class="loc">(+62)813-4168-6169</div>
                        </div>
                    </div>
                    <div class="pain">I'm also on Social Network</div>
                    <div class="lurus">
                        <div class="icon-bar tip">
                            <a href="https://www.linkedin.com/in/agawmd/" target="_blank" title="Linked In"><img class="ikon" src="{{ asset('/icon/link.png') }}" alt="{{ asset('/icon/link.png') }}"></a>                        
                        </div>
                        <div class="icon-bar tip">
                            <a href="https://www.instagram.com/aga_wmd/" target="_blank" title="Instagram"><img class="ikon" src="{{ asset('/icon/ints.png') }}" alt="{{ asset('/icon/ints.png') }}"></a>                        
                        </div>                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <img class="foto" src="{{ asset('/img/indonesia.jpg') }}" alt="{{ asset('/img/indonesia.jpg') }}">
    </div>-->
