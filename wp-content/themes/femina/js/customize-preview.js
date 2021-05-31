/**
 * File customize-preview.js.
 *
 * Instantly live-update customizer settings in the preview for improved user experience.
 *
 * @package Femina
 * @since Femina 1.0.7
 */

(function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title' ).text( to );
		});
	});
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		});
	});

	// Site title color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind(function( to ) {
			$( '.site-title' ).css({
				color: to
			});
		});
	});

	// Site description color.
	wp.customize( 'femina_theme_options[site_description_color]', function( value ){
		value.bind( function( to ) {
			$( '.site-description' ).css({
				color: to
			});
		});
	});

} )( jQuery );
