/*
 * jQuery event_desk
 * Version 2.0
 * http://srobbin.com/jquery-event_desk/
 *
 * jQuery Javascript plugin which slides a webpage over to reveal an additional interaction pane.
 *
 * Copyright (c) 2011 Scott Robbin (srobbin.com)
 * Dual licensed under the MIT and GPL licenses.
*/

;(function($){
    // Convenience vars for accessing elements
    var $body = $('body'),
        $event_desk = $('#event_desk');
    
    var _sliding = false,   // Mutex to assist closing only once
        _lastCaller;        // Used to keep track of last element to trigger event_desk
    
	// If the event_desk element doesn't exist, create it
    if( $event_desk.length == 0 ) {
         $event_desk = $('<div />').attr( 'id', 'event_desk' )
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
            $(url).clone(true).appendTo( $event_desk.empty() ).show();
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
                
                $event_desk.html( iframe );
            } else {
                $event_desk.load( url );
            }
            
            $event_desk.data( 'localEl', false );
            
        }
    }
    
    // Function that controls opening of the event_desk
    function _start( direction, speed ) {
        var slideWidth = $event_desk.outerWidth( true ),
            bodyAnimateIn = {},
            slideAnimateIn = {};
        
        // If the slide is open or opening, just ignore the call
        if( $event_desk.is(':visible') || _sliding ) return;	        
        _sliding = true;
                                                                    
        switch( direction ) {
            case 'left':
                $event_desk.css({ left: 'auto', right: '-' + slideWidth + 'px' });
                bodyAnimateIn['margin-left'] = '-=' + slideWidth;
                slideAnimateIn['right'] = '+=' + slideWidth;
                break;
            default:
                $event_desk.css({ left: '-' + slideWidth + 'px', right: 'auto' });
                bodyAnimateIn['margin-left'] = '+=' + slideWidth;
                slideAnimateIn['left'] = '+=' + slideWidth;
                break;
        }
                    
        // Animate the slide, and attach this slide's settings to the element
        $body.animate(bodyAnimateIn, speed);
        $event_desk.show()
                  .animate(slideAnimateIn, speed, function() {
                      _sliding = false;
                  });
    }
      
    /*
     * Declaration 
     */
    $.fn.event_desk = function(options) {
        var $elements = this;
        
        // On click
        $elements.click( function(e) {
            var $self = $(this),
                settings = $.extend({ href: $self.attr('href') }, options);
            
            // Prevent the default behavior and stop propagation
            e.preventDefault();
            e.stopPropagation();
            
            if ( $event_desk.is(':visible') && $self[0] == _lastCaller ) {
                // If we clicked the same element twice, toggle closed
                $.event_desk.close();
            } else {                 
                // Open
                $.event_desk( settings );

                // Record the last element to trigger event_desk
                _lastCaller = $self[0];
            }       
        });                   
	};
	
	/*
     * Default settings 
     */
    $.fn.event_desk.defaults = {
        speed:      200,        // Accepts standard jQuery effects speeds (i.e. fast, normal or milliseconds)
        direction:  'right',    // Accepts 'left' or 'right'
        modal:      false,      // If set to true, you must explicitly close event_desk using $.event_desk.close();
        iframe:     true,       // By default, linked pages are loaded into an iframe. Set this to false if you don't want an iframe.
        href:       null        // Override the source of the content. Optional in most cases, but required when opening event_desk programmatically.
    };
	
	/*
     * Public methods 
     */
	
	// Open the event_desk
	$.event_desk = function( options ) {	    
	    // Extend the settings with those the user has provided
        var settings = $.extend({}, $.fn.event_desk.defaults, options);
	    
	    // Are we trying to open in different direction?
        if( $event_desk.is(':visible') && $event_desk.data( 'direction' ) != settings.direction) {
            $.event_desk.close(function(){
                _load( settings.href, settings.iframe );
                _start( settings.direction, settings.speed );
            });
        } else {                
            _load( settings.href, settings.iframe );
            if( $event_desk.is(':hidden') ) {
                _start( settings.direction, settings.speed );
            }
        }
        
        $event_desk.data( settings );
	}
	
	// Close the event_desk
	$.event_desk.close = function( callback ) {
        var $event_desk = $('#event_desk'),
            slideWidth = $event_desk.outerWidth( true ),
            speed = $event_desk.data( 'speed' ),
            bodyAnimateIn = {},
            slideAnimateIn = {}
            	        
        // If the slide isn't open, just ignore the call
        if( $event_desk.is(':hidden') || _sliding ) return;	        
        _sliding = true;
        
        switch( $event_desk.data( 'direction' ) ) {
            case 'left':
                bodyAnimateIn['margin-left'] = '+=' + slideWidth;
                slideAnimateIn['right'] = '-=' + slideWidth;
                break;
            default:
                bodyAnimateIn['margin-left'] = '-=' + slideWidth;
                slideAnimateIn['left'] = '-=' + slideWidth;
                break;
        }
        
        $event_desk.animate(slideAnimateIn, speed);
        $body.animate(bodyAnimateIn, speed, function() {
            $event_desk.hide();
            _sliding = false;
            if( typeof callback != 'undefined' ) callback();
        });
    }
	
	/* Events */
	
	// Don't let clicks to the event_desk close the window
    $event_desk.click(function(e) {
        e.stopPropagation();
    });

	// Close the event_desk if the document is clicked or the users presses the ESC key, unless the event_desk is modal
	$(document).bind('click keyup', function(e) {
	    // If this is a keyup event, let's see if it's an ESC key
        if( e.type == "keyup" && e.keyCode != 27) return;
	    
	    // Make sure it's visible, and we're not modal	    
	    if( $event_desk.is( ':visible' ) && !$event_desk.data( 'modal' ) ) {	        
	        $.event_desk.close();
	    }
	});
	
})(jQuery);