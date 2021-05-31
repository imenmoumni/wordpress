<?php
/**
 * The Header of the theme.
 *
 * Displays all of the <head> section and everything up till <main id="main"> (i.e. until the end of the header, opens the #container and the #main div elements)
 *
 * @package Femina
 * @since Femina 1.0.7
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	 <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >
		<?php wp_body_open(); ?>
		<div id="container">
			<header id="masthead" class="site-header" role="banner">
				<a class="screen-reader-text skip-link" href="#main-content"><?php _e( 'Skip to content', 'femina' ); ?></a>
<?php
			if ( is_active_sidebar( 'sidebar-1' ) || is_active_sidebar( 'sidebar-2' ) ) : ?>
				<a class="screen-reader-text skip-link" href="#sidebar-widget-areas"><?php _e( 'Skip to sidebar', 'femina' ); ?></a>
			<?php endif ?>

				<div id="pre-menu">
				<?php if ( has_nav_menu( 'secondary' ) ) : ?>
					<nav id="categories-menu" class="site-navigation secondary-navigation" role="navigation" aria-label='<?php esc_attr_e( 'Secondary Menu ', 'femina' ); ?>' >
						<?php wp_nav_menu( array(
							'theme_location' => 'secondary',
							'depth' => 1,
							'container' => 'ul',
							'menu_id' => 'secondary-menu',
						) ); ?>
					</nav><!--categories-menu-->
				<?php
					get_search_form();
				endif ?>
				</div>
				<div id="site-identity">
		<?php if ( has_custom_logo() ) :
					the_custom_logo();
				else : ?>
					<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<h1 class="site-title"><?php esc_html( bloginfo( 'name' ) ); ?></h1>
						<h2 class="site-description"><?php esc_html( bloginfo( 'description' ) ); ?></h2>
					</a> 

		<?php endif ?>
				</div><!--/site-identity-->
				<button id="nav-button" class="menu-toggle" role="navigation button"><?php _e( 'Menu', 'femina' ); ?></button>

				<div id="navigation">
					<nav id="main-menu" class="site-navigation primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu ', 'femina' ); ?>">
						<?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' => 'ul',
							'menu_id' => 'primary-menu',
						) ); ?>
					</nav><!--main-menu-->

				<?php if ( has_nav_menu( 'secondary' ) ) : ?>
					<nav id="categories2-menu" class="site-navigation secondary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Secondary Menu ', 'femina' ); ?>">
						<?php wp_nav_menu( array(
							'theme_location' => 'secondary',
							'container' => 'ul',
							'depth' => 1,
							'menu_id' => 'secondary-menu',
						) ); ?>
					</nav><!--categories-menu-->
				<?php endif ?>

				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<nav id="header-social-menu" class="site-navigation social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Menu ', 'femina' ); ?>" >
					<?php wp_nav_menu( array(
						'theme_location' => 'social',
						'container' => 'ul',
						'depth' => 1,
						'menu_class' => 'social-menu',
						'link_before'	=> '<span class="screen-reader-text">',
						'link_after'	=> '</span>',
					) ); ?>
					</nav><!--social-menu-->
				<?php endif ?>

				</div><!--/navigation--> 
			</header><!--/header-->
			<main id="main" role="main">





