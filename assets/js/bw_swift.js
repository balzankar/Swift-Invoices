"use strict";

/*
* Designed and Developed by Bal Sankar
* Licensed under MIT
* github : https://github.com/balzankar/Swift-Invoices
*/

jQuery(function ($) {
  'use strict'; // 1. preloader

  $(window).ready(function () {
    $('#preloader').delay(200).fadeOut('fade');
  }); // 2. mega menu js

  $('.js-mega-menu').HSMegaMenu({
    event: 'hover',
    pageContainer: $('.container'),
    breakpoint: 767.98,
    hideTimeOut: 0
  }); // Off Canvas Menu Open & Close

  $('#offCanvas').on('click', function () {
    $('.nav-offcanvas').addClass('open');
    $('.offcanvas-overlay').addClass('on');
  });
  $('#offCanvasClose, .offcanvas-overlay').on('click', function () {
    $('.nav-offcanvas').removeClass('open');
    $('.offcanvas-overlay').removeClass('on');
  }); // 3. fixed navbar

  $(window).on('scroll', function () {
    // checks if window is scrolled more than 500px, adds/removes solid class
    if ($(this).scrollTop() > 0) {
      $('.main-header-menu-wrap').addClass('affix');
      $('.scroll-to-target').addClass('open');
    } else {
      $('.main-header-menu-wrap').removeClass('affix');
      $('.scroll-to-target').removeClass('open');
    } // checks if window is scrolled more than 500px, adds/removes top to target class


    if ($(this).scrollTop() > 500) {
      $('.scroll-to-target').addClass('open');
    } else {
      $('.scroll-to-target').removeClass('open');
    }
  }); // 4. back to top

  if ($('.scroll-to-target').length) {
    $(".scroll-to-target").on('click', function () {
      var target = $(this).attr('data-target'); // animate

      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 500);
    });
  } 
    
// 5. counter up js
  $('.count-number').rCounter(); 

    
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
        items: 2
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
    
// 11. monthly and yearly pricing switch

  $("#js-contcheckbox").change(function () {
    if (this.checked) {
      $('.monthly-price').css('display', 'none');
      $('.yearly-price').css('display', 'block');
      $('.afterinput').addClass('text-success');
      $('.beforeinput').removeClass('text-success');
    } else {
      $('.monthly-price').css('display', 'block');
      $('.yearly-price').css('display', 'none');
      $('.afterinput').removeClass('text-success');
      $('.beforeinput').addClass('text-success');
    }
  }); // 12. coming soon count

  $('#clock').countdown('2025/01/30', function (event) {
    $(this).html(event.strftime('' + '<div class="row">' + '<div class="col">' + '<h2 class="mb-0">%-D</h2>' + '<h5 class="mb-0">Day%!d</h5>' + '</div>' + '<div class="col">' + '<h2 class="mb-0">%H</h2>' + '<h5 class="mb-0">Hours</h5>' + '</div>' + '<div class="col">' + '<h2 class="mb-0">%M</h2>' + '<h5 class="mb-0">Minutes</h5>' + '</div>' + '<div class="col">' + '<h2 class="mb-0">%S</h2>' + '<h5 class="mb-0">Seconds</h5>' + '</div>' + '</div>'));
  }); // 13. contact form

  if ($("#contactForm").length) {
    $("#contactForm").validator().on("submit", function (event) {
      if (event.isDefaultPrevented()) {
        // handle the invalid form...
        submitMSG(false, '#contact');
      } else {
        // everything looks good!
        event.preventDefault();
        submitContactForm();
      }
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
}); // JQuery end