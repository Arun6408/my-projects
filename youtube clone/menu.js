
// suggestion Block display

var search = document.getElementById('txtsearch');
var suggestbox = document.getElementById("suggestionbox");
var search_mag_glass=document.querySelector(".txt i");

document.addEventListener("DOMContentLoaded", function() {
    search.addEventListener("click", function() {
        suggestbox.style.display = "block";
        search.style.boxShadow="none";
        search_mag_glass.style.boxShadow="none";
    });
});

document.addEventListener("click",function(event){
    var isclickinside= search.contains(event.target) || suggestbox.contains(event.target);
    if(!isclickinside){
        suggestbox.style.display="none";
        search.style.boxShadow="1px 1px 2px #555";
        search_mag_glass.style.boxShadow="1px 1px 2px #555";
    }
});

// side menu display

var menubtn=document.getElementById('menubtn');
var sidemenu=document.getElementById('sidemenu');
var page=document.getElementById('vidpage');

document.addEventListener("DOMContentLoaded",function(){
    menubtn.addEventListener("click",function(){
        if(sidemenu.style.display === "none"){
            sidemenu.style.display = "flex";
            page.style.width= '87%';
        }
        else {
            sidemenu.style.display = "none";
            page.style.width= '100%';
        }
    });
});

// side login display

var sidelogin=document.getElementById("sidelogin");
var adicon=document.getElementById("adicon");

document.addEventListener("DOMContentLoaded", function() {
    adicon.addEventListener("click", function(event) {
        event.stopPropagation();
        sidelogin.style.display = "block";
    });
});

document.addEventListener("click",function(event){
    var isclickinside= sidelogin.contains(event.target);
    if(!isclickinside){
        sidelogin.style.display="none";
    }
});