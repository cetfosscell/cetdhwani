/*
 * jQuery full_slide
 * Version 2.0
 * http://srobbin.com/jquery-full_slide/
 *
 * jQuery Javascript plugin which slides a webpage over to reveal an additional interaction pane.
 *
 * Copyright (c) 2011 Scott Robbin (srobbin.com)
 * Dual licensed under the MIT and GPL licenses.
*/

;(function($){
    // Convenience vars for accessing elements
    var $body = $('body'),
        $full_slide = $('#full_slide');
    
    var _sliding = false,   // Mutex to assist closing only once
        _lastCaller;        // Used to keep track of last element to trigger full_slide
    
	// If the full_slide element doesn't exist, create it
    if( $full_slide.length == 0 ) {
         $full_slide = $('<div />').attr( 'id', 'full_slide' )
                                  .css( 'display', 'none' )
                                  .appendTo( $('body') );
    }
    
    /*
     * Private methods 
     */
    function _load( url, useIframe ) {
        // Are we loading an element from the page or a URL?
        if ( url.indexOf("#") === 0 ) {                
            // Load a page element                
            $(url).clone(true).appendTo( $full_slide.empty() ).show();
        } else {
            // Load a URL. Into an iframe?
            if( useIframe ) {
                var iframe = $("<iframe />").attr({
                                                src: url,
                                                frameborder: 0,
                                                hspace: 0
                                            })
                                            .css({
                                                width: "100%",
                                                height: "100%"
                                            });
                
                $full_slide.html( iframe );
            } else {
                $full_slide.load( url );
            }
            
            $full_slide.data( 'localEl', false );
            
        }
    }
    
    // Function that controls opening of the full_slide
    function _start( direction, speed ) {
        var slideWidth = $full_slide.outerWidth( true ),
            bodyAnimateIn = {},
            slideAnimateIn = {};
        
        // If the slide is open or opening, just ignore the call
        if( $full_slide.is(':visible') || _sliding ) return;	        
        _sliding = true;
                                                                    
        switch( direction ) {
            case 'left':
                $full_slide.css({ left: 'auto', right: '-' + slideWidth + 'px' });
                bodyAnimateIn['margin-left'] = '-=' + slideWidth;
                slideAnimateIn['right'] = '+=' + slideWidth;
                break;
            default:
                $full_slide.css({ left: '-' + slideWidth + 'px', right: 'auto' });
                bodyAnimateIn['margin-left'] = '+=' + slideWidth;
                slideAnimateIn['left'] = '+=' + slideWidth;
                break;
        }
                    
        // Animate the slide, and attach this slide's settings to the element
        $body.animate(bodyAnimateIn, speed);
        $full_slide.show()
                  .animate(slideAnimateIn, speed, function() {
                      _sliding = false;
                  });
    }
      
    /*
     * Declaration 
     */
    $.fn.full_slide = function(options) {
        var $elements = this;
        
        // On click
        $elements.click( function(e) {
            var $self = $(this),
                settings = $.extend({ href: $self.attr('href') }, options);
            
            // Prevent the default behavior and stop propagation
            e.preventDefault();
            e.stopPropagation();
            
            if ( $full_slide.is(':visible') && $self[0] == _lastCaller ) {
                // If we clicked the same element twice, toggle closed
                $.full_slide.close();
            } else {                 
                // Open
                $.full_slide( settings );

                // Record the last element to trigger full_slide
                _lastCaller = $self[0];
            }       
        });                   
	};
	
	/*
     * Default settings 
     */
    $.fn.full_slide.defaults = {
        speed:     fast,        // Accepts standard jQuery effects speeds (i.e. fast, normal or milliseconds)
        direction:  'right',    // Accepts 'left' or 'right'
        modal:      false,      // If set to true, you must explicitly close full_slide using $.full_slide.close();
        iframe:     true,       // By default, linked pages are loaded into an iframe. Set this to false if you don't want an iframe.
        href:       null        // Override the source of the content. Optional in most cases, but required when opening full_slide programmatically.
    };
	
	/*
     * Public methods 
     */
	
	// Open the full_slide
	$.full_slide = function( options ) {	    
	    // Extend the settings with those the user has provided
        var settings = $.extend({}, $.fn.full_slide.defaults, options);
	    
	    // Are we trying to open in different direction?
        if( $full_slide.is(':visible') && $full_slide.data( 'direction' ) != settings.direction) {
            $.full_slide.close(function(){
                _load( settings.href, settings.iframe );
                _start( settings.direction, settings.speed );
            });
        } else {                
            _load( settings.href, settings.iframe );
            if( $full_slide.is(':hidden') ) {
                _start( settings.direction, settings.speed );
            }
        }
        
        $full_slide.data( settings );
	}
	
	// Close the full_slide
	$.full_slide.close = function( callback ) {
        var $full_slide = $('#full_slide'),
            slideWidth = $full_slide.outerWidth( true ),
            speed = $full_slide.data( 'speed' ),
            bodyAnimateIn = {},
            slideAnimateIn = {}
            	        
        // If the slide isn't open, just ignore the call
        if( $full_slide.is(':hidden') || _sliding ) return;	        
        _sliding = true;
        
        switch( $full_slide.data( 'direction' ) ) {
            case 'left':
                bodyAnimateIn['margin-left'] = '+=' + slideWidth;
                slideAnimateIn['right'] = '-=' + slideWidth;
                break;
            default:
                bodyAnimateIn['margin-left'] = '-=' + slideWidth;
                slideAnimateIn['left'] = '-=' + slideWidth;
                break;
        }
        
        $full_slide.animate(slideAnimateIn, speed);
        $body.animate(bodyAnimateIn, speed, function() {
            $full_slide.hide();
            _sliding = false;
            if( typeof callback != 'undefined' ) callback();
        });
    }
	
	/* Events */
	
	// Don't let clicks to the full_slide close the window
    $full_slide.click(function(e) {
        e.stopPropagation();
    });

	// Close the full_slide if the document is clicked or the users presses the ESC key, unless the full_slide is modal
	$(document).bind('click keyup', function(e) {
	    // If this is a keyup event, let's see if it's an ESC key
        if( e.type == "keyup" && e.keyCode != 27) return;
	    
	    // Make sure it's visible, and we're not modal	    
	    if( $full_slide.is( ':visible' ) && !$full_slide.data( 'modal' ) ) {	        
	        $.full_slide.close();
	    }
	});
	
})(jQuery);