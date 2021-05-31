<?php
/**
 * Femina header styles
 *
 * @package Femina
 * @since Femina 1.0.7
 */

/**
 * Implements Femina's header styles.
 *
 @since Femina 1.0.7
 */
function femina_header_style() {
	if ( is_customize_preview() ) : ?>

		<style type="text/css" id="femina-preview-css">
			.logged-in #masthead {
				top: 0;
			}
		</style>
	<?php
	endif;

	$header_image = get_header_image();
	$header_text_color   = get_header_textcolor();
	$femina_theme_options = femina_get_options();

	// If no custom options for header are set, let's bail.
	if ( ! femina_get_options() ) :
		return;
	endif;

	// If we get this far, we have custom styles.
	?>
	<style type="text/css" id="femina-header-css">
	<?php if ( ! has_custom_logo() ) : ?>
		.home-link {
			display: block;
			padding-left: 0.7em;
		} 
	<?php else : ?>
		.home-link {
			display:flex;
		}

	<?php endif;

if ( ! empty( $header_image ) ) : ?>
	.site-header {
		background: url(<?php header_image(); ?>) no-repeat scroll top;
		background-size: 1920px auto;
	}
	@media (max-width: 767px) {
		.site-header {
			background-size: 768px auto;
		}
	}
	@media (max-width: 359px) {
		.site-header {
			background-size: 360px auto;
		}
	}
<?php endif;

// Have both the title and the tagline been hidden?
	if ( 'blanck' === $header_text_color || ! display_header_text() ) : ?>
		.site-title,
		.site-description {
			position: absolute;
			width: 0;
			height: 0;
			clip: rect(1px, 1px, 1px, 1px);
		}

		<!-- #navigation {
			margin: 0 auto;
		} -->

<?php endif;

// Has the title been hidden?
if ( $femina_theme_options['hide_site_title'] ) : ?>

.site-title {
	position: absolute;
	width: 0;
	height: 0;
	clip: rect(1px, 1px, 1px, 1px);
}

.site-description {
	padding-top: 3em;
}

<?php endif;

if ( $femina_theme_options['hide_site_description'] ) : ?>

.site-description {
	position: absolute;
	width: 0;
	height: 0;
	clip: rect(1px, 1px, 1px, 1px);
}

<?php endif;

if ( empty( $header_image ) ) : ?>
	.site-header .home-link {
		min-height: 5em;
	}

	@media (max-width: 767px) {
	.site-header .home-link {
		min-height: 0;
	}
	}
	@media (max-width: 359px) {
	.site-header .home-link  {
		min-height: 0;
	}
	}
<?php endif;

// If the user has set a custom color for the text, use that.
if ( get_theme_support( 'custom-header', 'default-text-color' ) != $header_text_color ) : ?>
	.site-title {
		color: #<?php echo esc_html( $header_text_color ); ?>;
	}
<?php endif; ?>
	</style>
<?php
}
