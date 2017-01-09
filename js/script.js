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



var menu = document.querySelector('.nav__list');
var burger = document.querySelector('.burger');
var doc = $(document);
var l = $('.scrolly');
var panel = $('.panel');
var vh = $(window).height();

var openMenu = function() {
    burger.classList.toggle('burger--active');
    menu.classList.toggle('nav__list--active');
};

// reveal content of first panel by default
panel.eq(0).find('.panel__content').addClass('panel__content--active');

var scrollFx = function() {
    var ds = doc.scrollTop();
    var of = vh / 4;

    // if the panel is in the viewport, reveal the content, if not, hide it.
    for (var i = 0; i < panel.length; i++) {
        if (panel.eq(i).offset().top < ds+of) {
            panel
                .eq(i)
                .find('.panel__content')
                .addClass('panel__content--active');
        } else {
            panel
                .eq(i)
                .find('.panel__content')
                .removeClass('panel__content--active')
        }
    }
};

var scrolly = function(e) {
    e.preventDefault();
    var target = this.hash;
    var $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top
    }, 300, 'swing', function () {
        window.location.hash = target;
    });
}

var init = function() {
    burger.addEventListener('click', openMenu, false);
    window.addEventListener('scroll', scrollFx, false);
    window.addEventListener('load', scrollFx, false);
    $('a[href^="#"]').on('click',scrolly);
};

doc.on('ready', init);
