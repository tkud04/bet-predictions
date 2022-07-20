/**
*
* -----------------------------------------------------------------------------
*
* Template : Soccer HTML5 Responsive Template 
* Author : rs-theme
* Author URI : http://www.rstheme.com/
*
* -----------------------------------------------------------------------------
*
**/
(function($) {
    "use strict";
    // sticky menu
    
    var header = $('.menu-sticky');
        if(header.length){    
            var win = $(window);
            win.on('scroll', function() {
                var scroll = win.scrollTop();
                if (scroll < 1) {
                    header.removeClass("sticky");
                } else {
                    header.addClass("sticky");
                }
            });
        }
    
    /*-------------------------------------
     jQuery Main Menu activation code
     --------------------------------------*/
    var navdropdown = $('.nav#dropdown');
        if(navdropdown.length){
        jQuery('nav#dropdown').meanmenu();
    }
    /*----------------------------
    wow js active
    ------------------------------ */
    new WOW().init();
    
    //window load
  	$(window).on( 'load', function() {
  		//rs menu
  		if($(window).width() < 992) {
  		  $('.rs-menu').css('height', '0');
  		  $('.rs-menu').css('opacity', '0');
  		  $('.rs-menu-toggle').on( 'click', function(){
  			 $('.rs-menu').css('opacity', '1');
  		 });
  		}
  	})
	
	/*-------------------------------------
    OwlCarousel
    -------------------------------------*/
    var rscarousel = $('.rs-carousel');
    if(rscarousel.length){
        $('.rs-carousel').each(function() {
            var owlCarousel = $(this),
            loop = owlCarousel.data('loop'),
            items = owlCarousel.data('items'),
            margin = owlCarousel.data('margin'),
            stagePadding = owlCarousel.data('stage-padding'),
            autoplay = owlCarousel.data('autoplay'),
            autoplayTimeout = owlCarousel.data('autoplay-timeout'),
            smartSpeed = owlCarousel.data('smart-speed'),
            dots = owlCarousel.data('dots'),
            nav = owlCarousel.data('nav'),
            navSpeed = owlCarousel.data('nav-speed'),
            xsDevice = owlCarousel.data('mobile-device'),
            xsDeviceNav = owlCarousel.data('mobile-device-nav'),
            xsDeviceDots = owlCarousel.data('mobile-device-dots'),
            smDevice = owlCarousel.data('ipad-device'),
            smDeviceNav = owlCarousel.data('ipad-device-nav'),
            smDeviceDots = owlCarousel.data('ipad-device-dots'),
            smDevice2 = owlCarousel.data('ipad-device2'),
            smDeviceNav2 = owlCarousel.data('ipad-device-nav2'),
            smDeviceDots2 = owlCarousel.data('ipad-device-dots2'),
            mdDevice = owlCarousel.data('md-device'),
            mdDeviceNav = owlCarousel.data('md-device-nav'),
            mdDeviceDots = owlCarousel.data('md-device-dots');

            owlCarousel.owlCarousel({
                loop: (loop ? true : false),
                items: (items ? items : 4),
                lazyLoad: true,
                margin: (margin ? margin : 0),
                //stagePadding: (stagePadding ? stagePadding : 0),
                autoplay: (autoplay ? true : false),
                autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
                smartSpeed: (smartSpeed ? smartSpeed : 250),
                dots: (dots ? true : false),
                nav: (nav ? true : false),
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                navSpeed: (navSpeed ? true : false),
                responsiveClass: true,
                responsive: {
                    0: {
                        items: (xsDevice ? xsDevice : 1),
                        nav: (xsDeviceNav ? true : false),
                        dots: (xsDeviceDots ? true : false)
                    },
                    768: {
                        items: (smDevice ? smDevice : 3),
                        nav: (smDeviceNav ? true : false),
                        dots: (smDeviceDots ? true : false)
                    },
                    480: {
                        items: (smDevice2 ? smDevice : 2),
                        nav: (smDeviceNav2 ? true : false),
                        dots: (smDeviceDots2 ? true : false)
                    },
                    992: {
                        items: (mdDevice ? mdDevice : 4),
                        nav: (mdDeviceNav ? true : false),
                        dots: (mdDeviceDots ? true : false)
                    }
                }
            });

        });
    }
    
    /*-------------------------------------
       Author Slider jQuery activation code
       -------------------------------------*/
    var authorslidersection = $('#author-slider-section');
    if(authorslidersection.length){
        $("#author-slider-section").owlCarousel({
            items : 3,
            loop:true,
            autoplay:true,  
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            dots: false,
            responsive:{
                0:{
                  items:1 // In this configuration 1 is enabled from 0px up to 479px screen size 
                },
                481:{
                  items:2, // from 480 to 677 
                  nav:false // from 480 to max 

                },
                678:{
                  items:2, // from this breakpoint 678 to 959
                  center:false // only within 678 and next - 959
                },
                768:{
                  items:3, // from this breakpoint 960 to 1199
                  margin:20, // and so on...
                  center:false 
                },
                1200:{
                  items:3,
                  loop:false,
                  margin: 0
                }
            } 
        });
    }
    
    
    var firstslider = $('#first-slider');
    if(firstslider.length){
        $("#first-slider").owlCarousel({
            items: 1,
            loop:true,
        })
    }
    
    // Latest News
    var latestnewsslider = $('.latest-news-slider');
    if(latestnewsslider.length){
        $('.latest-news-slider').slick({
            slidesToShow: 1,
            // vertical: true,
            // verticalSwiping: true,
            slidesToScroll: 1,
            arrows: true,
            fade: false,
            asNavFor: '.latest-news-nav'
        });
    }
    
    var latestnewsnav = $('.latest-news-nav');
    if(latestnewsnav.length){
        $('.latest-news-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.latest-news-slider',
            dots: false,
            centerMode: false,
            centerPadding: '0',
            focusOnSelect: true
        });
    }

    /*-------------------------------------
       Home page main Slider
       -------------------------------------*/
        // Declare Carousel jquery object
        var owl = $('#main-slider');
         if(owl.length){
            // Carousel initialization
            owl.owlCarousel({
              animateIn: 'fadeIn',
              items:1,
              autoplay:true,
              loop: true,
              dots: true,
              autoplayTimeout: 8000,
            });
          }
          // add animate.css class(es) to the elements to be animated
            function setAnimation ( _elem, _InOut ) {
              // Store all animationend event name in a string.
              // cf animate.css documentation
              var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

              _elem.each ( function () {
                var $elem = $(this);
                var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

                $elem.addClass($animationType).one(animationEndEvent, function () {
                  $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
                });
              });
          }

          // Fired before current slide change
            owl.on('change.owl.carousel', function(event) {
                var $currentItem = $('.owl-item', owl).eq(event.item.index);
                var $elemsToanim = $currentItem.find("[data-animation-out]");
                setAnimation ($elemsToanim, 'out');
            });

          // Fired after current slide has been changed
            owl.on('changed.owl.carousel', function(event) {

                var $currentItem = $('.owl-item', owl).eq(event.item.index);
                var $elemsToanim = $currentItem.find("[data-animation-in]");
                setAnimation ($elemsToanim, 'in');
            })
    
    
    /*-------------------------------------
       Home page main Slider
       -------------------------------------*/
        // Declare Carousel jquery object
        var owl5 = $('#slider-five');
         if(owl5.length){
            // Carousel initialization
            owl5.owlCarousel({
              animateIn: 'fadeIn',
              items:1,
              autoplay:false,
              loop: true,
              dots: true,
              autoplayTimeout: 8000,
            });
          }
          // add animate.css class(es) to the elements to be animated
            function setAnimation ( _elem, _InOut ) {
              // Store all animationend event name in a string.
              // cf animate.css documentation
              var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

              _elem.each ( function () {
                var $elem = $(this);
                var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

                $elem.addClass($animationType).one(animationEndEvent, function () {
                  $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
                });
              });
          }

          // Fired before current slide change
            owl5.on('change.owl.carousel', function(event) {
                var $currentItem = $('.owl-item', owl5).eq(event.item.index);
                var $elemsToanim = $currentItem.find("[data-animation-out]");
                setAnimation ($elemsToanim, 'out');
            });

          // Fired after current slide has been changed
            owl5.on('changed.owl.carousel', function(event) {
                var $currentItem = $('.owl-item', owl5).eq(event.item.index);
                var $elemsToanim = $currentItem.find("[data-animation-in]");
                setAnimation ($elemsToanim, 'in');
            })
      
    /*-------------------------------------
       Home page two main Slider
       -------------------------------------*/
        var owl_text = $('#text-slider');
        if(owl_text.length){
          $('#text-slider').owlCarousel({
              items:1,
              autoplay:true,
              loop: true,
              dots: false,
              animateIn: 'fadeIn',
              smartSpeed: 800
          });
        }

    /*-------------------------------------
       Image Popup
    -------------------------------------*/
    	var imaggepoppup = $('.image-popup');
    	if(imaggepoppup.length){
    		$('.image-popup').magnificPopup({
    			type: 'image',
    			callbacks: {
    				beforeOpen: function() {
    				   this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure animated zoomInDown');
    				}
    			},
    			gallery: {
    				enabled: true
    			}
    		});
    	}
    /*-------------------------------------
       Video Popup
    -------------------------------------*/ 
  	var popupyoutube = $('.popup-youtube');
  	if(popupyoutube.length){
  		$('.popup-youtube').magnificPopup({
  			type: 'iframe',
  			mainClass: 'mfp-fade',
  			removalDelay: 160,
  			preloader: false,
  			fixedContentPos: false								
  		});	
  	}
    
    // Counter Up
	var rscounter = $('.rs-counter');
	if(rscounter.length){	
		$('.rs-counter').counterUp({
			delay: 20,
			time: 1500
		});
	}
  	/*-------------------------------------
  	Preloder Js here
  	---------------------------------------*/
  	$(window).on( 'load', function() {
  		$("#preloader").delay(2000).fadeOut(500);
  		$("#preloader span").on('click', function() {
  		$("#preloader").fadeOut(500);
  		})
  	})

    /*-------------------------------------
    Main Menu jQuery activation code
    -------------------------------------*/
    $(".main-menu ul a").on('click', function(e) {
            var link = $(this);
            var item = link.parent("li");
            if (item.hasClass("active")) {
                item.removeClass("active").children("a").removeClass("active");
            } else {
                item.addClass("active").children("a").addClass("active");
            }
            if (item.children("ul").length > 0) {
                var href = link.attr("href");
                link.attr("href", "#");
                setTimeout(function () { 
                    link.attr("href", href);
                }, 300);
                e.preventDefault();
            }
        })
        .each(function() {
            var link = $(this);
            if (link.get(0).href === location.href) {
                link.addClass("active").parents("li").addClass("active");
                return false;
        }
    });

    /*--------------------------
     ScrollTop init Activation Code
    ---------------------------- */
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        
            $('#return-to-top').fadeIn(200);   
        } else {
            $('#return-to-top').fadeOut(200);   
        }
    });
    $('#return-to-top').on('click', function() {     
        $('body,html').animate({
            scrollTop : 0                       
        }, 500);
    });
    
    
    /*--------------------------
     Flexslider Slider Code
    ---------------------------- */
    var flexcarousel = $('#slider-carousel');
	   if(flexcarousel.length){
        $('#slider-carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            directionNav: false,
            slideshow: false,
            itemWidth: 360,
            itemMargin: 0,
            asNavFor: '#slider-images'
        });
    }  
    var flexslide = $('#slider-images');
	  if(flexslide.length){    
        $('#slider-images').flexslider({
            animation: "fade",
            controlNav: false,
            directionNav: false,
            animationLoop: false,
            slideshow: true,
            sync: "#slider-carousel"
        });
    }
    
    /*----------------------------
    single-productjs active
    ------------------------------ */
    var singleproductimage = $('.single-product-image');
	   if(singleproductimage.length){
        $('.single-product-image').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.single-product-nav'
        });
    }
    var singleproductnav = $('.single-product-nav');
	   if(singleproductnav.length){
        $('.single-product-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.single-product-image',
            dots: false,
            focusOnSelect: true,
            centerMode:true,
        });
    }
    
     /*--------------------------
     Tesitmonial Slider Code
    ---------------------------- */
    var tesitmonialinner = $('.tesitmonial-inner');
	   if(tesitmonialinner.length){ 
        $('.tesitmonial-inner').slick({
              centerMode: true,
              centerPadding: '0',
              slidesToShow: 3,
              autoplay :true,
              arrows: false,
             focusOnSelect: true,
              responsive: [
                {
                  breakpoint: 591,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0',
                    slidesToShow: 1
                  }
                }
              ]
        });
    }
    
    // Google Map
    if ($('#googleMap').length) {
        var initialize = function() {
            var mapOptions = {
                zoom: 10,
                scrollwheel: false,
                center: new google.maps.LatLng(40.837936, -73.412551),
                styles: [{
                    stylers: [{
                        saturation: -100
                    }]
                }]
            };
            var map = new google.maps.Map(document.getElementById("googleMap"),
                mapOptions);
            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation: google.maps.Animation.BOUNCE,
                icon: 'images/map-marker.png',
                map: map
            });
        }
        // Add the map initialize function to the window load function
        google.maps.event.addDomListener(window, "load", initialize);
    }
    
    /*==========================================
       CountDownTimer
    ==========================================*/
    var CountTimer = $('.CountDownTimer');
    if(CountTimer.length){ 
        $(".CountDownTimer").TimeCircles({
            fg_width: 0.030,
            bg_width: 0.8,
            circle_bg_color: "#ffffff",
            time: {
                Days:{
                    color: "#fbc02d"
                },
                Hours:{
                    color: "#fbc02d"
                },
                Minutes:{
                    color: "#fbc02d"
                },
                Seconds:{
                    color: "#fbc02d"
                }
            }
        });	
    }
    
    
    
})(jQuery);