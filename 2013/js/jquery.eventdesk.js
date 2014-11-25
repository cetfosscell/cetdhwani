/*
 * jQuery ev
 * Version 2.0
 * http://srobbin.com/jquery-ev/
 *
 * jQuery Javascript plugin which slides a webpage over to reveal an additional interaction pane.
 *
 * Copyright (c) 2011 Scott Robbin (srobbin.com)
 * Dual licensed under the MIT and GPL licenses.
*/

;(function($){
    // Convenience vars for accessing elements
    var $body = $('body'),
        $ev = $('#ev');
    
    var _sliding = false,   // Mutex to assist closing only once
        _lastCaller;        // Used to keep track of last element to trigger ev
    
	// If the ev element doesn't exist, create it
    if( $ev.length == 0 ) {
         $ev = $('<div />').attr( 'id', 'ev' )
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
            $(url).clone(true).appendTo( $ev.empty() ).show();
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
                
                $ev.html( iframe );
            } else {
                $ev.load( url );
            }
            
            $ev.data( 'localEl', false );
            
        }
    }
    
    // Function that controls opening of the ev
    function _start( direction, speed ) {
        var slideWidth = $ev.outerWidth( true ),
            bodyAnimateIn = {},
            slideAnimateIn = {};
        
        // If the slide is open or opening, just ignore the call
        if( $ev.is(':visible') || _sliding ) return;	        
        _sliding = true;
                                                                    
        switch( direction ) {
            case 'left':
                $ev.css({ left: 'auto', right: '-' + slideWidth + 'px' });
                bodyAnimateIn['margin-left'] = '-=' + slideWidth;
                slideAnimateIn['right'] = '+=' + slideWidth;
                break;
            default:
                $ev.css({ left: '-' + slideWidth + 'px', right: 'auto' });
                bodyAnimateIn['margin-left'] = '+=' + slideWidth;
                slideAnimateIn['left'] = '+=' + slideWidth;
                break;
        }
                    
        // Animate the slide, and attach this slide's settings to the element
        $body.animate(bodyAnimateIn, speed);
        $ev.show()
                  .animate(slideAnimateIn, speed, function() {
                      _sliding = false;
                  });
    }
      
    /*
     * Declaration 
     */
    $.fn.ev = function(options) {
        var $elements = this;
        
        // On click
        $elements.click( function(e) {
            var $self = $(this),
                settings = $.extend({ href: $self.attr('href') }, options);
            
            // Prevent the default behavior and stop propagation
            e.preventDefault();
            e.stopPropagation();
            
            if ( $ev.is(':visible') && $self[0] == _lastCaller ) {
                // If we clicked the same element twice, toggle closed
                $.ev.close();
            } else {                 
                // Open
                $.ev( settings );

                // Record the last element to trigger ev
                _lastCaller = $self[0];
            }       
        });                   
	};
	
	/*
     * Default settings 
     */
    $.fn.ev.defaults = {
        speed:      200,        // Accepts standard jQuery effects speeds (i.e. fast, normal or milliseconds)
        direction:  'right',    // Accepts 'left' or 'right'
        modal:      false,      // If set to true, you must explicitly close ev using $.ev.close();
        iframe:     true,       // By default, linked pages are loaded into an iframe. Set this to false if you don't want an iframe.
        href:       null        // Override the source of the content. Optional in most cases, but required when opening ev programmatically.
    };
	
	/*
     * Public methods 
     */
	
	// Open the ev
	$.ev = function( options ) {	    
	    // Extend the settings with those the user has provided
        var settings = $.extend({}, $.fn.ev.defaults, options);
	    
	    // Are we trying to open in different direction?
        if( $ev.is(':visible') && $ev.data( 'direction' ) != settings.direction) {
            $.ev.close(function(){
                _load( settings.href, settings.iframe );
                _start( settings.direction, settings.speed );
            });
        } else {                
            _load( settings.href, settings.iframe );
            if( $ev.is(':hidden') ) {
                _start( settings.direction, settings.speed );
            }
        }
        
        $ev.data( settings );
	}
	
	// Close the ev
	$.ev.close = function( callback ) {
        var $ev = $('#ev'),
            slideWidth = $ev.outerWidth( true ),
            speed = $ev.data( 'speed' ),
            bodyAnimateIn = {},
            slideAnimateIn = {}
            	        
        // If the slide isn't open, just ignore the call
        if( $ev.is(':hidden') || _sliding ) return;	        
        _sliding = true;
        
        switch( $ev.data( 'direction' ) ) {
            case 'left':
                bodyAnimateIn['margin-left'] = '+=' + slideWidth;
                slideAnimateIn['right'] = '-=' + slideWidth;
                break;
            default:
                bodyAnimateIn['margin-left'] = '-=' + slideWidth;
                slideAnimateIn['left'] = '-=' + slideWidth;
                break;
        }
        
        $ev.animate(slideAnimateIn, speed);
        $body.animate(bodyAnimateIn, speed, function() {
            $ev.hide();
            _sliding = false;
            if( typeof callback != 'undefined' ) callback();
        });
    }
	
	/* Events */
	
	// Don't let clicks to the ev close the window
    $ev.click(function(e) {
        e.stopPropagation();
    });

	// Close the ev if the document is clicked or the users presses the ESC key, unless the ev is modal
	$(document).bind('click keyup', function(e) {
	    // If this is a keyup event, let's see if it's an ESC key
        if( e.type == "keyup" && e.keyCode != 27) return;
	    
	    // Make sure it's visible, and we're not modal	    
	    if( $ev.is( ':visible' ) && !$ev.data( 'modal' ) ) {	        
	        $.ev.close();
	    }
	});
	
})(jQuery);