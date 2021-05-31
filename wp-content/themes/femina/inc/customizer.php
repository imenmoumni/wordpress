<?php
/**
 * Femina customization
 *
 * @package Femina
 * @since Femina 1.0.7
 */

/**
 * Implement Customizer additions and adjustments.
 *
 * @since Femina 1.0.7
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function femina_customize_register( $wp_customize ) {

	$blog_navigation_array = array(
		'navigation' => __( 'Navigation', 'femina' ),
		'pagination' => __( 'Pagination', 'femina' ),
	);

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title',
		'render_callback' => 'femina_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'femina_customize_partial_blogdescription',
	) );

	// =============================
	// ==     Header Settings     ==
	// =============================
	// Adds the posibility of hiding the site title and tagline separately.
	// ===============================
	$wp_customize->add_setting( 'femina_theme_options[hide_site_title]', array(
		'default'           => 0,
		'sanitize_callback' => 'absint',
		'capability'        => 'edit_theme_options',
		'type'           => 'option',
	));

	$wp_customize->add_control( 'hide_site_title', array(
		'label'    => __( 'Hide Site Title', 'femina' ),
		'priority' => 41,
		'section'  => 'title_tagline',
		'settings' => 'femina_theme_options[hide_site_title]',
		'type' => 'checkbox',
		'active_callback' => 'display_header_text',

	));
	// ===============================
	$wp_customize->add_setting( 'femina_theme_options[hide_site_description]', array(
		'default'        => 0,
		'sanitize_callback' => 'absint',
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
	));

	$wp_customize->add_control( 'hide_site_description', array(
		'label'      => __( 'Hide Tagline', 'femina' ),
		'priority' => 42,
		'section'    => 'title_tagline',
		'settings'   => 'femina_theme_options[hide_site_description]',
		'type' => 'checkbox',
		'active_callback' => 'display_header_text',
	));

	// ==============================
	// ==   Navigation Settings    ==
	// ==============================
	$wp_customize->add_section( 'Navigation Settings', array(
		'title'			=> __( 'Navigation Settings', 'femina' ),
		'description'	=> __( 'In this section you can choose between navigation or pagination in multiple view pages.', 'femina' ),
	) );

	// ===============================
	$wp_customize->add_setting( 'femina_theme_options[blog_navigation]', array(
		'sanitize_callback' => 'femina_sanitize_blog_nav',
		'capability'     => 'edit_theme_options',
		'type'           => 'option',
		'default'        => 'navigation',
	));

	$wp_customize->add_control( 'blog_navigation', array(
		'settings'	=> 'femina_theme_options[blog_navigation]',
		'label'		=> __( 'Choose your preferred mode of navigating between old and new articles','femina' ),
		'section'	=> 'Navigation Settings',
		'type'		=> 'radio',
		'choices'	=> $blog_navigation_array,
	));

}
add_action( 'customize_register', 'femina_customize_register' );

/**
 * Sanitisation of the navigation choice.
 *
 * @since Femina 1.0.7
 *
 * @param string $value Value of the navigation choice.
 * @return string Sanitised value of the navigation choice.
 */
function femina_sanitize_blog_nav( $value ) {
	$recognized = femina_blog_nav();
	if ( array_key_exists( $value, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'femina_blog_nav', current( $recognized ) );
}

/**
 * Array of options of the navigation choice.
 *
 * @since Femina 1.0.7
 */
function femina_blog_nav() {
	$default = array(
		'navigation' => 'navigation',
		'pagination' => 'pagination',
	);
	return apply_filters( 'femina_blog_nav', $default );
}

/**
 * Theme defaults
 */
function femina_get_option_defaults() {
	$defaults = array(
		'hide_site_title' => 0,
		'hide_site_description' => 0,
		'blog_navigation' => 'navigation',
	);
	return apply_filters( 'femina_get_option_defaults', $defaults );
}

/**
 * Parse all the theme options in a single array.
 *
 * @since Femina 1.0.7
 */
function femina_get_options() {
	// Options API.
	return wp_parse_args(
		get_option( 'femina_theme_options', array() ),
		femina_get_option_defaults()
	);
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Femina 1.0.7
 * @see femina_customize_register()
 *
 * @return void
 */
function femina_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Femina 1.0.7
 * @see femina_customize_register()
 *
 * @return void
 */
function femina_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function femina_customize_preview_js() {
	wp_enqueue_script( 'femina-customize-preview', get_template_directory_uri( '/js/customize-preview.js' ), array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'femina_customize_preview_js' );




