
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

var i = 0 , prec;
var degs = $("#prec").attr("class").split(' ')[1];
var activeBorder = $("#activeBorder");

setTimeout(function(){
    if($("#circle").is(":hover"))
       loopit("c");
    else
       loopit("nc");
},1);

function loopit(dir){
    if (dir == "c")
        i++
    else
        i--;
    if (i < 0)
        i = 0;
    if (i > degs)
        i = degs;
    prec = (100*i)/360;   
    $(".prec").html(Math.round(prec)+"%");
    
    if (i<=180){
        activeBorder.css('background-image','linear-gradient(' + (90+i) + 'deg, transparent 50%, #A2ECFB 50%),linear-gradient(90deg, #A2ECFB 50%, transparent 50%)');
    }
    else{
        activeBorder.css('background-image','linear-gradient(' + (i-90) + 'deg, transparent 50%, #39B4CC 50%),linear-gradient(90deg, #A2ECFB 50%, transparent 50%)');
    }
    
    setTimeout(function(){
        if($("#circle").is(":hover"))
            loopit("c");
        else
           loopit("nc");
    },1);
    
}

/*JS Responsive Top Nav Bar*/

        function myFunction() {
            var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";    
                } else {
                    x.className = "topnav";
                }
        }

/*JS Accourdion*/
        function myAccordian(id)
        var acc = document.getElementsByClassName("accourdion");
        var i;
        
                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function () {
                        this.classList.toggle("active");
                        var panel-acc = this.nextElementSibling;
                        if (panel-acc.style.display === "block") {
                            panel-acc.style.display = "none";
                        } else {
                            panel-acc.style.display = "block";
                        }
                    });
                }
                
/*JS Collapse*/

var coll = document.getElementsByClassName("collapsible");
var i;

                for (i=0; i < coll.length; i++) {
                    coll[i].addEventListener("click", function () {
                        this.classList.toogle("active");
                        var content = this.nextElementSibling;
                        if (content.style.display === "block") {
                            content.style.display = "none";
                        } else {
                            content.style.display = "block";
                        }
                    });
                }