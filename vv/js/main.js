$(document).ready(function () {

    $('.owl-carousel').owlCarousel({
        items: 1,
        lazyLoad: true,
        lazyLoadEager: 1,
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        autoplay: false,
        autoplayHoverPause: true,
        autoplayTimeOut: 0,
        autoHeight: false,
        navText: ['<i class="material-icons">keyboard_arrow_left</i>', '<i class="material-icons">keyboard_arrow_right</i>']
    });

    var heroSlider = $('.owl-carousel');

    heroSlider.on("changed.owl.carousel", function (event) {
        var item = event.item.index - 2;
        $('h3').removeClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('h3').addClass('animated fadeInUp');
    });

    window.onscroll = function () {
        stickyHeader();
        scrollToTop();
    };


    var header = document.getElementById("nav-header");
    var headermargin = document.getElementById("carousel-home");
    var sticky = header.offsetTop + 0;
    var topArrow = document.getElementById("top-arrow");

    function stickyHeader() {
        if (window.pageYOffset > sticky) {
            header.classList.add("fixed-top");
            headermargin.classList.add("header-margin");
        } else {
            header.classList.remove("fixed-top");
            headermargin.classList.remove("header-margin");
        }
    }

    function scrollToTop() {
        if (window.pageYOffset > 200) {
            topArrow.classList.add("active");

        } else {
            topArrow.classList.remove("active");
        }
    }

    $('img').attr('src',function () { return $(this).attr('src') + "?a=" + Math.random() });

});


function changeLanguage(value) {
	setCookie("lang", value, 60);
	window.location.href = window.location.href;
}

function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	var expires = "expires=" + d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}


$('a[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});


document.addEventListener('DOMContentLoaded', function () {
    ScrollTrigger.init();
});

(function () {
    "use strict";
    var cookieAlert = document.querySelector(".cookiealert");
    var acceptCookies = document.querySelector(".acceptcookies");

    if (!cookieAlert) {
        return;
    }

    cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)

    // Show the alert if we cant find the "acceptCookies" cookie
    if (!getCookie("acceptCookies")) {
        cookieAlert.classList.add("show");
    }

    // When clicking on the agree button, create a 1 year
    // cookie to remember user's choice and close the banner
    acceptCookies.addEventListener("click", function () {
        setCookie("acceptCookies", true, 365);
        cookieAlert.classList.remove("show");
    });

    // Cookie functions from w3schools
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
})();


$('ul.nav li.dropdown').hover(function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
}, function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
});

if (!Object.keys) {
    Object.keys = function (obj) {
        var keys = [];

        for (var i in obj) {
            if (obj.hasOwnProperty(i)) {
                keys.push(i);
            }
        }

        return keys;
    };
}
