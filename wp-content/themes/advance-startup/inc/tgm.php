<?php

	require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function advance_startup_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Contact Form 7', 'advance-startup' ),
			'slug'             => 'contact-form-7',
			'required'         => false,
			'force_activation' => false,
		),

		array(
			'name'             => __( 'Elementor Page Builder', 'advance-startup' ),
			'slug'             => 'elementor',
			'required'         => false,
			'force_activation' => false,
		),

		array(
			'name'             => __( 'Font Awesome', 'advance-startup' ),
			'slug'             => 'font-awesome',
			'required'         => false,
			'force_activation' => false,
		),
		
	);
	$config = array();
	tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'advance_startup_register_recommended_plugins' );