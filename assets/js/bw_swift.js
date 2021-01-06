"use strict";

/*
 * Designed and Developed by Bal Sankar
 * Licensed under MIT
 * github : https://github.com/balzankar/Swift-Invoices
 */

jQuery(function ($) {
    'use strict';

    $(window).ready(function () {
        $('#preloader').delay(200).fadeOut('fade');
    });

    $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
    });

    $('#offCanvas').on('click', function () {
        $('.nav-offcanvas').addClass('open');
        $('.offcanvas-overlay').addClass('on');
    });
    $('#offCanvasClose, .offcanvas-overlay').on('click', function () {
        $('.nav-offcanvas').removeClass('open');
        $('.offcanvas-overlay').removeClass('on');
    });

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 0) {
            $('.main-header-menu-wrap').addClass('affix');
            $('.scroll-to-target').addClass('open');
        } else {
            $('.main-header-menu-wrap').removeClass('affix');
            $('.scroll-to-target').removeClass('open');
        } 


        if ($(this).scrollTop() > 500) {
            $('.scroll-to-target').addClass('open');
        } else {
            $('.scroll-to-target').removeClass('open');
        }
    });

    if ($('.scroll-to-target').length) {
        $(".scroll-to-target").on('click', function () {
            var target = $(this).attr('data-target'); // animate

            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 500);
        });
    }

    $('.bw-slider').owlCarousel({
        loop: true,
        autoplay: true,
        dots: true,
        margin: 0,
        autoplayHoverPause: true,
        items: 1,
        smartSpeed: 1000,
        animateOut: "slideOutLeft",
        animateIn: "slideInRight"
    });
});

$(document).ready(function () {
    $('.bw-review').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsiveClass: true,
        autoplay: true,
        autoplayHoverPause: true,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 1
            },
            600: {
                items: 1
            },
            800: {
                items: 1
            },
            1200: {
                items: 2
            }
        }
    });

    $('.bw-privacy-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsiveClass: true,
        autoplay: true,
        autoplayHoverPause: true,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 1
            },
            600: {
                items: 1
            },
            800: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    });
});