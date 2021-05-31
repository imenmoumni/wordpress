<?php
/**
 * Femina back compat functionality
 *
 * Prevents Femina from running on WordPress versions prior to 5.0,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 5.0.
 *
 * @package Femina
 * @since Femina 1.0.7
 */

/**
 * Prevent switching to Femina on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Femina 1.0.7
 */
function femina_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', 'femina_upgrade_notice' );
}
add_action( 'after_switch_theme', 'femina_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Femina on WordPress versions prior to 5.0.
 *
 * @since Femina 1.0.7
 *
 * @global string $wp_version WordPress version.
 */
function femina_upgrade_notice() {
	$message = sprintf( __( 'Femina requires at least WordPress version 5.0. You are running version %s. Please upgrade and try again.', 'femina' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 5.0.
 *
 * @since Femina 1.0.7
 *
 * @global string $wp_version WordPress version.
 */
function femina_customize() {
	wp_die( sprintf( __( 'Femina requires at least WordPress version 5.0. You are running version %s. Please upgrade and try again.', 'femina' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'femina_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 5.0.
 *
 * @since Femina 1.0.7
 *
 * @global string $wp_version WordPress version.
 */
function femina_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Femina requires at least WordPress version 5.0. You are running version %s. Please upgrade and try again.', 'femina' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'femina_preview' );
