(function ($) {
  "use strict";

  $(document).ready(function () {
    /*----------------------------------------------------*/
    /*  Main Slider
        /*----------------------------------------------------*/
    $(".home_slider").owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      autoplay: true,
      autoplayTimeout: 10000,
      dots: false,
      navText: [
        "<span class='lnr lnr-chevron-left'></span>",
        "<span class='lnr lnr-chevron-right'></span>",
      ],
      items: 1,
    });

    /*----------------------------------------------------*/
    /*  Find Domain Form Dropdown
        /*----------------------------------------------------*/
    $(".domain_search_drop").on("click", function () {
      $(this).toggleClass("rotate");
    });

    /*----------------------------------------------------*/
    /*  Project Slideshow
        /*----------------------------------------------------*/
    $(".pricing_plan").owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      autoplay: true,
      navContainer: "#pricing_nav",
      navText: [
        "<span class='lnr lnr-arrow-left'></span>",
        "<span class='lnr lnr-arrow-right'></span>",
      ],
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          center: true,
        },
        992: {
          items: 3,
          center: true,
        },
      },
    });

    window.onscroll = function () {
      myFunction();
    };

    var navbar = document.getElementById("nav_bar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
      } else {
        navbar.classList.remove("sticky");
      }
    }

    // $(window).width( function(){
    //           var win = $(this);
    //           if (win.width() > 514) {

    //           $(".navbar-default").affix({
    //                 offset: {
    //                     top: $('.top_header').height()
    //                 }
    //             });

    //           }
    //         else
    //         {

    //         }

    //     });

    /*----------------------------------------------------*/
    /*  Pricing Slider
        /*----------------------------------------------------*/
    $(".pricing_slider").owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      autoplay: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
        },
        700: {
          items: 2,
        },
        992: {
          items: 3,
        },
        1501: {
          items: 4,
        },
      },
    });

    /*----------------------------------------------------*/
    /*  Domain Search Filter
        /*----------------------------------------------------*/
    $(".searchFilters .dropdown-menu")
      .find("a")
      .click(function (e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#", "");
        var concept = $(this).text();
        $(".searchFilters span#searchFilterValue").text(concept);
        $(".input-group #search_param").val(param);
      });

    /*----------------------------------------------------*/
    /*  PopUps
        /*----------------------------------------------------*/
    $(".portfolio-link").magnificPopup({
      type: "image",
    });

    /*----------------------------------------------------*/
    /*  Contact Form Height
        /*----------------------------------------------------*/
    $("#success, #error").each(function () {
      var line_height = $(this).height();
      $(this)
        .find("p")
        .css("line-height", function () {
          return line_height + "px";
        });
    });
  });
})(jQuery);
