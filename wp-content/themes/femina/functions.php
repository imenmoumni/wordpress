<?php
/**
 * Femina functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package Femina
 * @since Femina 1.0.7
 *
 * @uses femina_header_style() to style front-end.
 */

/**
 * Femina only works in WordPress 4.9 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '5.0', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'femina_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Femina 1.0.7
	 */
	function femina_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on femina, use a find and replace
		 * to change 'femina' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'femina', get_template_directory() . '/languages' );

		// Add theme support for Custom Header.
		add_theme_support( 'custom-header', array(
			'default-text-color' => 'a83e3e',
			'width' => 1920,
			'height' => 300,
			'header-text' => true,
			'wp-head-callback' => 'femina_header_style',
		) );

		// Add theme support for Custom Background.
		add_theme_support( 'custom-background', array(
			'default-color' => 'f2f2ef',
		) );

		// Add theme support for Custom Logo.
		add_theme_support( 'custom-logo', array(
			'width'       => 100,
			'height'      => 100,
			'flex-width'  => true,
			'flex-height' => false,
		) );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// Add theme support for block styles and responsive embeds and wide alignment.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 825, 510, true );

		// This theme uses wp_nav_menu() in three locations.
		register_nav_menus( array(
			'primary' 	=> __( 'Primary Menu', 'femina' ),
			'secondary' => __( 'Secondary Menu', 'femina' ),
			'social' 	=> __( 'Social Links Menu', 'femina' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		) );

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_theme_support( 'editor-styles' );
		add_editor_style( array(
			'css/editor-style.css',
			'genericons/genericons.css',
			femina_fonts_url(),
		) );
	}
endif; // femina_setup.
add_action( 'after_setup_theme', 'femina_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Femina 1.0.7
 */
function femina_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'femina_content_width', 825 );
}
add_action( 'after_setup_theme', 'femina_content_width', 0 );

/**
 * Register widget area.
 *
 * @since Femina 1.0.7
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function femina_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'First Sidebar Area', 'femina' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your first sidebar.', 'femina' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Second Sidebar Area', 'femina' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your second sidebar.', 'femina' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'First Footer Area', 'femina' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your first footer area.', 'femina' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Second Footer Area', 'femina' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your second footer area.', 'femina' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Third Footer Area', 'femina' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your third footer area.', 'femina' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'femina_widgets_init' );

if ( ! function_exists( 'femina_fonts_url' ) ) :
	/**
	 * Register Google fonts for Femina.
	 *
	 * @since Femina 1.0.7
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function femina_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';

		/*
		 * Translators: If there are characters in your language that are not supported
		 * by Lato, translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== _x( 'on', 'Lato font: on or off', 'femina' ) ) {
			$fonts[] = 'Lato:300italic,400italic,700italic,900italic,300,400,700,900';
		}

		/*
		 * Translators: If there are characters in your language that are not supported
		 * by Bitter, translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== _x( 'on', 'Bitter font: on or off', 'femina' ) ) {
			$fonts[] = 'Bitter:400italic,400,700';
		}

		/*
		 * Translators: If there are characters in your language that are not supported
		 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'femina' ) ) {
			$fonts[] = 'Inconsolata:400,700';
		}

		/*
		 * Translators: To add an additional character subset specific to your language,
		 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
		 */
		$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'femina' );

		if ( 'cyrillic' == $subset ) {
			$subsets .= ',cyrillic,cyrillic-ext';
		} elseif ( 'greek' == $subset ) {
			$subsets .= ',greek,greek-ext';
		} elseif ( 'devanagari' == $subset ) {
			$subsets .= ',devanagari';
		} elseif ( 'vietnamese' == $subset ) {
			$subsets .= ',vietnamese';
		}

		if ( $fonts ) {
			$fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $fonts ) ),
				'subset' => urlencode( $subsets ),
			), 'https://fonts.googleapis.com/css' );
		}

		return $fonts_url;
	}
endif;

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Femina 1.0.7
 */
function femina_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'femina-fonts', femina_fonts_url(), array(), null );

	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_parent_theme_file_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Load our main stylesheet.
	wp_enqueue_style( 'femina-style', get_parent_theme_file_uri( 'style.css' ) );

	// Load the JavaScript functions.
	wp_enqueue_script( 'femina-script', get_parent_theme_file_uri() . '/js/functions.js', array( 'jquery' ), '20200515', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_localize_script( 'femina-script', 'feminaScreenReaderText', array(
		'expand'   => __( 'Expand child menu', 'femina' ),
		'collapse' => __( 'Collapse child menu', 'femina' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'femina_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Femina 1.0.7
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function femina_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' )  && ! is_active_sidebar( 'sidebar-2' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'femina_body_classes' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path() . '/inc/template-tags.php';
/**
 * Customizer additions.
 */
require get_parent_theme_file_path() . '/inc/customizer.php';
require get_parent_theme_file_path() . '/inc/custom-header.php';

