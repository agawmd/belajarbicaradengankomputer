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

    <div class="col-md-4">
        <div class="contact-box">
            <h2>Say Hi It's Free!</h2>
            <div class="contact-part">
                <div class="row">
                    <div class="col-sm-1"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="col-sm-11">
                        Sapiria, Barombong District - Gowa Regency
                        South Sulawesi                    
                    </div>                    
                </div>
            </div>
            <div class="contact-part">
                <div class="row">
                    <div class="col-sm-1"><i class="fas fa-at"></i></div>
                    <div class="col-sm-11">
                        <a href="mailto:dagawaodemakani@gmail.com?Subject=Hello%20again" target="_top">dagawaodemakani@gmail.com</a>                   
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-11">
                        <a href="mailto:waodemakanidaga@hotmail.com?Subject=Hello%20again" target="_top">waodemakanidaga@hotmail.com</a>
                    </div>                    
                </div>
            </div>
            <div class="contact-part">
                <div class="row">
                    <div class="col-sm-1"><i class="fas fa-mobile"></i></div>
                    <div class="col-sm-11">
                        <a href="tel+6281341686169" target="_blank">(+62) 813 4168 6169</a>                   
                    </div>                    
                </div>
            </div>
            <div class="contact-social">
                <h5>I'm also on social network</h5>
                <div class="contact-link">
                    <a href="https://www.instagram.com/aga_wmd/" target="_blank"><i class="icon fab fa-instagram"></i></a>
                    <a href="https://www.pinterest.co.uk/aga_wmd/" target="_blank"><i class="icon fab fa-pinterest"></i></a>                    
                </div>
            </div>
        </div>
    </div>  
    
    <div class="col-md-4">

    </div>
    
    <div class="col-md-4">
        <div class="message-box" id="hiddenBox">
            <h5>Everything Begins with a Hello</h5>
            <div class="message-text">Get in Touch and Let's Start Great Project Together! I'll be there within 24 hours.</div>
            <form class="message-form" method="POST" name="contactform" action="{{ route('home.handler') }}">
                <p>
                    <label for="fname"></label>
                    <input type="text" placeholder="Name*" name="fname"/><br>
                </p>
                <p>
                    <label for="femail"></label>
                    <input type="text" placeholder="Email*" name="femail"/>
                </p>
                <p>
                    <label for="fmessage"></label>
                    <textarea placeholder="Message*" name="fmessage"></textarea>
                </p>
                <br><input type="submit" alt="Submit" value="Say Hello!" name="submit"/>
            </form>                
        </div>
    </div>

    <div class="col-md-12">
        <div class="line-break-down"></div>
    </div>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>    
    
</div>
@endsection
<!--    <script>
        function hiddenButton() {
            var x = document.getElementById("hiddenBox");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>    -->


<!--        <a><button class="message-button" onclick="hiddenButton()"><img class="images" src="{{ asset('/icon/tag/text-chat.png') }}" alt="{{ asset('/icon/tag/text-chat.png') }}"></button></a>-->
<!--    
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
                        Sapiria, Barombong District, Gowa Regency<br>South Sulawesi 90225
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
                    <a href="https://www.instagram.com/aga_wmd/" target="_blank" title="on Instagram"><img class="social-icon-image" src="{{ asset('/icon/mono/instagram.png') }}" alt="{{ asset('/icon/mono/instagram.png') }}"></a>
                    <a href="skype:waodemakanidaga?chat" target="_blank" title="on Skype"><img class="social-icon-image" src="{{ asset('/icon/mono/skype.png') }}" alt="{{ asset('/icon/mono/skype.png') }}"></a>     
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
            <form class="form-message">
                <input type="text" placeholder="Your Name" name="fname"/><br>
                <br><input type="text" placeholder="Email" name="femail"/><br>
                <br><textarea placeholder="Message" name="fmessage"></textarea><br>
                <br><input type="submit" alt="Submit" value="Say Hello!"/>
            </form>
        </div>
    </div>-->










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
