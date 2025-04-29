/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Lisa DeBona
 */

jQuery(document).ready(function ($) {
	
	$( window ).scroll(function() {
      $( ".mobile-header-scroll" ).addClass( "scrolled");
      $( "#masthead" ).addClass( "scrolled");
    });

    $('.burger, .overlay').click(function(){
	  $('.burger').toggleClass('clicked');
	  $('.overlay').toggleClass('show');
	  $('nav').toggleClass('show');
	  $('body').toggleClass('overflow');
	});
	$('nav.mobilemenu li').click(function() {
	    $(this).find('ul.dropdown').toggleClass('active');
	});


	/* Order Option */
    $(document).on("click","#orderup",function(e){
    	e.preventDefault();
    	if( $("div.order-options").length > 0 ) {
    		$("div.order-options").slideToggle(300);
    	}
    });

    $(document).on("click","#closeOrder",function(e){
    	e.preventDefault();
    	$("#orderup").trigger('click');
    });

    /* Order Option */
    $(document).on("click","#rezup",function(e){
    	e.preventDefault();
    	if( $("div.rez-options").length > 0 ) {
    		$("div.rez-options").slideToggle(300);
    	}
    });

    $(document).on("click","#closeRez",function(e){
    	e.preventDefault();
    	$("#rezup").trigger('click');
    });


	var swiper = new Swiper('#slideshow', {
		effect: 'fade', /* "fade", "cube", "coverflow" or "flip" */
		loop: true,
		noSwiping: false,
		simulateTouch : false,
		speed: 1000,
		autoplay: {
			delay: 4000,
		}
    });

    /* Smooth Scroll */
    $('a[href*="#"]')
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      // Figure out element to scroll to
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      // Does a scroll target exist?
	      if (target.length) {
	        // Only prevent default if animation is actually gonna happen
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, function() {
	          // Callback after animation
	          // Must change focus!
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
	      }
	    }
	});
	

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();


	$(document).on("click","#toggleMenu",function(){
		$(this).toggleClass('open');
		$('body').toggleClass('open-mobile-menu');
	});

});// END #####################################    END