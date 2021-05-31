<?php
/**
 * @package advance-startup
 * @subpackage advance-startup
 * @since advance-startup 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses advance_startup_header_style()
*/

function advance_startup_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'advance_startup_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1055,
		'height'                 => 105,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'advance_startup_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'advance_startup_custom_header_setup' );

if ( ! function_exists( 'advance_startup_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see advance_startup_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'advance_startup_header_style' );
function advance_startup_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$advance_startup_custom_css = "
        #header-top,
		.page-template-custom-front-page #header-top{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'advance-startup-basic-style', $advance_startup_custom_css );
	endif;
}
endif; // advance_startup_header_style