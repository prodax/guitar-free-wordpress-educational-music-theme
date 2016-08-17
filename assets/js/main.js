"use strict";


jQuery(document).ready(function (jQuery) {


    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    jQuery('#navbar-collapse').find('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                jQuery('html,body').animate({
                    scrollTop: (target.offset().top - 40)
                }, 1000);
                if (jQuery('.navbar-toggle').css('display') != 'none') {
                    jQuery(this).parents('.container').find(".navbar-toggle").trigger("click");
                }
                return false;
            }
        }
    });



    /*---------------------------------------------*
     * STICKY scroll
     ---------------------------------------------*/

    jQuery.localScroll();



    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/

    var wow = new WOW({
        mobile: false // trigger animations on mobile devices (default is true)
    });
    wow.init();


    /* ---------------------------------------------------------------------
     Carousel
     ---------------------------------------------------------------------= */

    jQuery('.main_home_content').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: true,
        dots: true,
        nav: false,
        navText: [
            "<i class='lnr lnr-chevron-left'></i>",
            "<i class='lnr lnr-chevron-right'></i>"
        ],
        autoplayHoverPause: true

    });

    jQuery('.main_testimonial_content').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        navText: [
            "<i class='lnr lnr-chevron-left'></i>",
            "<i class='lnr lnr-chevron-right'></i>"
        ],
        autoplayHoverPause: true

    });




// main-menu-scroll

    jQuery(window).scroll(function () {
        var top = jQuery(document).scrollTop();
        var height = 300;
        //alert(batas);

        if (top > height) {
            jQuery('.navbar-fixed-top').addClass('menu-scroll');
        } else {
            jQuery('.navbar-fixed-top').removeClass('menu-scroll');
        }
    });

// scroll Up

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 600) {
            jQuery('.scrollup').fadeIn('slow');
        } else {
            jQuery('.scrollup').fadeOut('slow');
        }
    });
    jQuery('.scrollup').click(function () {
        jQuery("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });



/*---------------------------------------------*
     * Youtube Media
     ---------------------------------------------*/
    jQuery('.youtube-media').magnificPopup({type: 'iframe'});








    //End
});




jQuery(document).on("scroll", function () {
    if (jQuery(document).scrollTop() > 120) {
        jQuery("nav").addClass("small");
    } else {
        jQuery("nav").removeClass("small");
    }
});

jQuery(document).on('click','.navbar-collapse.in',function(e) {
    if( jQuery(e.target).is('a') ) {
        jQuery(this).collapse('hide');
    }
});



