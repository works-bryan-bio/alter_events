// --------------------------------------------------------------
// --------------------------------------------------------------
//
// COOKIN UP SOME JS IN HERE, THANKS KEITH DRIESSEN FOR THE INSPIRATION!
//
// Author: Eric Biboso - http://970design.com
//
// --------------------------------------------------------------
// --------------------------------------------------------------


jQuery(document).ready(function ($) {
	
	var $win = $(window),
		$html = $('html'),
		$loading = $('#loading'),
		$photo = $('.bg-photo'),
		total_photos = $photo.length,
		current_photo = 0,
		ratio = 1;
	
	// ----------------------------------------------------------	
	// IS IT MOBILE?
	// ----------------------------------------------------------
	
	function isMobile(){
	    return (
	        (navigator.userAgent.match(/Android/i)) ||
			(navigator.userAgent.match(/webOS/i)) ||
			(navigator.userAgent.match(/iPhone/i)) ||
			(navigator.userAgent.match(/iPod/i)) ||
			(navigator.userAgent.match(/iPad/i)) ||
			(navigator.userAgent.match(/BlackBerry/))
	    );
	}
	
	// ----------------------------------------------------------
	// BACKGROUND SLIDESHOW
	// ----------------------------------------------------------
	$photo.eq(current_photo).addClass('current-photo').css('display','block');
	
	function backgroundSlideshow() {
		looper = setInterval(function() {
			$('.current-photo').removeClass('current-photo').fadeOut(1000, 'easeInOutQuad');
			
			if(current_photo == total_photos - 1) current_photo = 0;
			else current_photo++;
			
			$photo.eq(current_photo).addClass('current-photo').css('display','none').fadeIn(1000, 'easeInOutQuad');
		}, 4000);
	}
	
	// ----------------------------------------------------------
	// FADE IN/OUT DROPDOWN
	// ----------------------------------------------------------
	
	$("ul#menu-main-menu li").hover(function() { 
		
		$(this).find("ul.sub-menu").fadeIn('fast'); 
	},  
	
	function() {
		
		$(this).find("ul.sub-menu").fadeOut('fast'); 
	});
	
	// ----------------------------------------------------------
	// UPDATE UI SCROLL FUNCTION
	// ----------------------------------------------------------
	   $(function(){ 
	   if(!isMobile()) {
	    var targets = $("#header");
	    var footer = $('#contact-window'),
	    extra = 5; // In case you want to trigger it a bit sooner than exactly at the bottom.
	
		footer.css({ display: 'none' });
	    
	    if($win.scrollTop() > 110){
	      targets.hide();
	    }
	    $win.scroll(function(){
	        var pos = $win.scrollTop();
	        if(pos > 110){
	            targets.stop(true, true).fadeOut(1000);
	        } else {
	            targets.stop(true, true).fadeIn("fast");
	        }
	        
	        var scrolledLength = ( $win.height() + extra ) + $win.scrollTop(),
		       documentHeight = $(document).height();
		
		    
		    //console.log( 'Scroll length: ' + scrolledLength + ' Document height: ' + documentHeight )
		       
		        
		    if( scrolledLength >= documentHeight ) {
		       
		       footer
		          .addClass('bottom')
		          .fadeIn(900);
		
		    }
		    else if ( scrolledLength <= documentHeight && footer.hasClass('bottom') ) {           
		        footer
		           .removeClass('bottom')
		           .stop(true, true).fadeOut(500);
		    } 
	        
	    });
	    }
	    });
	
	// ----------------------------------------------------------
	//TAKE ME TO THE TOP...
	// ----------------------------------------------------------
	$("#backTop").hide().removeAttr("href");
    if ($win.scrollTop() != "0") {
        $("#backTop").fadeIn("slow")
    }
    var scrollDiv = $("#backTop");
    $win.scroll(function() {
        if ($win.scrollTop() == "0") {
            $(scrollDiv).fadeOut("fast")
        } else {
            $(scrollDiv).fadeIn("fast")
        }
    });
    $("#backTop").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow")
    });
    
    // ----------------------------------------------------------
	// TOGGLE GIFT CARD RECIPIENT FIELDS
	// ----------------------------------------------------------
    $(".gift-field").hide();
    
    $('.gift-option').click(function() {
            if ($('.gift-option').attr('checked')) {
                    $(".gift-field").show();
            }
            else {
                    $(".gift-field").hide();
            }
    });
	
	
	// ----------------------------------------------------------
	// BOOM!
	// ----------------------------------------------------------
	$win
		
		.load(function() {
			setTimeout(function() {
				$html.css('overflow', 'auto');
				$('#loading-message').fadeOut(700, 'easeInOutExpo');
				$loading.stop().fadeOut(700, 'easeInOutExpo', function() {
					$loading.remove();
				});
				backgroundSlideshow();
			}, 2000);
			
		})
});

