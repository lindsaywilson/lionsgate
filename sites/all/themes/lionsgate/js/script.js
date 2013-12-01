
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {
	
	openWindow = function(url){
		window.open(url,"","width=500,height=200");
	}
	
	timerResize = function(){
        // Define if mobile
        this.checkMobile();
        // Display navigation if not mobile
        if(!window.isMobile){
            showNav();
        }
    };
	checkMobile = function (){
        // Define if on mobile (based on CCS media Queries : Device < 800px wide)
        if ( $("#page").css("position") === 'relative') {
			if( window.isMobile ){
                window.deviceHasChanged = false;
            }else{
               window.deviceHasChanged = true; 
               window.isMobile = true;
			   hideNav();
            }  
        }else{
            if( !window.isMobile ){
                window.deviceHasChanged = false;
            }else{
                window.deviceHasChanged = true;
                window.isMobile = false;
				showNav();
            }
        }
    }
	
	showNav = function (button, nav){
		$('#main-menu').show();
		$('#mobile-toggle').hide();
    };
    hideNav = function (button, nav){
		$('#main-menu').hide();
		$('#mobile-toggle').show();
    };
	
	// Define Global Mobile
	window.isMobile = false;
	window.deviceHasChanged = false;
	checkMobile;
		
	// Define if on mobile (based on CCS media Queries : Device < 800px wide)
	var resizeTimer;
	timerResize();
	$(window).resize(function() {
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(function() { timerResize(); }, 100);
	});
    
	// Setup mobile menu toggle
	$('#menu-toggle a').click( function(){
		c = $(this).attr('class');
		if( c == 'open'){
			c = 'close';
		}else{
			c = 'open';
		}
		$('#main-menu').slideToggle();
		$(this).attr('class',c);
	});
	

  }
};


})(jQuery, Drupal, this, this.document);
