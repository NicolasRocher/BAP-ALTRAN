(function() {

    'use strict';

    // define variables
    var items = document.querySelectorAll(".timeline li");

    // check if an element is in viewport
    // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function callbackFunc() {
        for (var i = 0; i < items.length; i++) {
            if (isElementInViewport(items[i])) {
                items[i].classList.add("in-view");
            }
        }
    }

    // listen for events
    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);

})();

$(document).ready(function(){
    $(".scroll").click(function(event){
        event.preventDefault();
        $("html,body").animate({scrollTop:$(this.hash).offset().top}, 500);
        $('.navbar-default a').removeClass('selected');
        $(this).addClass('selected');
    });
});



/* code pour la page projet */

function bascule(){
    var etat = document.getElementById('divprohide').style.display;
    var bouton = document.getElementById('afficheCache');

    if (etat == 'none'){
        document.getElementById('divprohide').style.display='block';
        bouton.value = 'Cacher la balise div';
    }
    else{
        document.getElementById('divprohide').style.display='none';
        bouton.value = 'Afficher la balise div';
    }
}



