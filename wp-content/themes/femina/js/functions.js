/**
 * Functionality specific to Femina.
 *
 * Provides helper functions to enhance the theme experience.
 */

( function($) {

	menuToggle = $('.menu-toggle');
	siteNavigation = $('#masthead');
	_window = $(window);
	
	/**
	 * In small screens the dropdownToggle is a button with an icon inside and it is after the 'a' element 
	 * that is the child of a 'li' with submenues. (The button, the 'a' element and the submenu are siblings).
	 * In big screens the dropdownToggle is only an icon and it is inside the 'a' that is the child of a 'li' with submenues.
	 **/

	function createDropdownToggle() {
		$('.dropdown-toggle').remove();
		$('.dropdown-arrow').remove();
		if ( 881 > _window.width() ) {
			var dropdownToggle = $('<button />', {'class': 'dropdown-toggle'})
			.append( $( '<span />', {'class': 'genericon genericon-expand', 'aria-hidden': 'true'} ),
					 $( '<span />',{'class': 'screen-reader-text', text : feminaScreenReaderText.expand } ) );

			siteNavigation.find( 'li:has(ul) > a' ).after(dropdownToggle);
		} else {
			var dropdownToggle = $('<span />', {'class': 'dropdown-arrow genericon genericon-downarrow', 'aria-hidden': 'true'});
			siteNavigation.find( 'li:has(ul) > a' ).append(dropdownToggle);
			siteNavigation.removeClass('toggled-on');
			menuToggle.removeClass('toggled-on');
			menuToggle.children('#nav-icon').removeClass('genericon-close-alt').addClass('genericon-menu');
		}
	}

	function clickDropdownToggle() {
		siteNavigation.find( '.dropdown-toggle' ).click( function( e ) {
			var _this = $( this );
			e.preventDefault();
			var _i = _this.children( 'span:first-child' );
			var screenReaderSpan = _this.find( '.screen-reader-text' );
			switchClass( _i, 'genericon-expand', 'genericon-collapse' );
			switchScreenReaderText( screenReaderSpan, feminaScreenReaderText.expand, feminaScreenReaderText.collapse );
			_this.next( '.sub-menu' ).toggleClass( 'toggled-on' );
		});
	}

	function switchClass (a, b, c) {
		if ( a.hasClass(b) ) {
			a.removeClass(b);
			a.addClass(c);
		} else {
			a.removeClass(c);
			a.addClass(b);
		}
	}

	function switchScreenReaderText (a, b, c) {
		if( a.text() === b) {
			a.text(c);
		} else {
			a.text(b)
		}
	}

	function onResizeARIA() {
		if ( 881 > _window.width() ) {
			menuToggle.attr( 'aria-expanded', 'false' );
			siteNavigation.attr( 'aria-expanded', 'false' );
			menuToggle.attr( 'aria-controls', 'nav-menu' );
		} else {
			menuToggle.removeAttr( 'aria-expanded' );
			siteNavigation.removeAttr( 'aria-expanded' );
			menuToggle.removeAttr( 'aria-controls' );
		}
	}

	_window.on('load', onResizeARIA());
	_window.on('load', function() {
		createDropdownToggle();
		clickDropdownToggle();
	} );
	_window.on( 'resize', function() {
		createDropdownToggle();
		clickDropdownToggle();
	} );

	menuToggle.click( function() {
		switchClass($( this ).children( '#nav-icon' ), 'genericon-menu', 'genericon-close-alt' );
		$( this ).toggleClass( 'toggled-on' );
		siteNavigation.toggleClass( 'toggled-on' );

		if($( this ).hasClass( 'toggled-on' ) ) {
			$( this ).attr( 'aria-expanded', 'true' );
			siteNavigation.attr( 'aria-expanded', 'true' );
		}
		else {
			$( this ).attr( 'aria-expanded', 'false' );
			siteNavigation.attr( 'aria-expanded', 'false' );
		}
	});

	siteNavigation.find( 'a' ).on( 'focus blur', function() {
		$( this ).parents( '.menu-item' ).toggleClass( 'focus' );
	} );
	
})( jQuery );

