function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
//
//
//
////
//// Get the container element
//var btnContainer = document.getElementById("navbarsExample04");
//
//// Get all buttons with class="btn" inside the container
//var btns = btnContainer.getElementsByClassName("nav-link");
//
//// Loop through the buttons and add the active class to the current/clicked button
//for (var i = 0; i < btns.length; i++) {
//  btns[i].addEventListener("click", function() {
//    var current = document.getElementsByClassName("active");
//    current[0].className = current[0].className.replace(" active", "");
//    this.className += " active";
//  });
//}
//
//
///**
// * Experience toogle description
// */
//$('#experience-section')
//        .click(function(e){
//            // description = $(this).next('#experience-description');
//            description = $(this).next();
//            if(description.hasClass('fadeOutDown')) {
//                description.removeClass('fadeOutDown');
//                description.addClass('fadeInDown');
//            }
//            else {                
//                description.addClass('fadeOutDown');
//                description.removeClass('fadeInDown');
//            }
//        });
//
////pake transition-duration mungkin biar  selow
//
//function myMap() {
//var mapOptions = {
//    center: new google.maps.LatLng(-5.189949, 119.408032),
//    zoom: 15,
//    mapTypeId: google.maps.MapTypeId.HYBRID
//}
//var map = new google.maps.Map(document.getElementById("map"), mapOptions);
//}