<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package advance-startup
 */

get_header(); ?>

<main role="main" id="maincontent" class="content-ts">
	<div class="container">
        <div class="middle-align">
			<h1><?php echo esc_html(get_theme_mod('advance_startup_title_404_page',__('404 Not Found','advance-startup')));?></h1>
			<p class="text-404"><?php echo esc_html(get_theme_mod('advance_startup_content_404_page',__('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','advance-startup')));?></p>
			<?php if( get_theme_mod('advance_startup_button_404_page','Back to Home Page') != ''){ ?>
				<div class="read-moresec my-4">
	        		<a href="<?php echo esc_url(home_url()); ?>" class="button p-2"><?php echo esc_html(get_theme_mod('advance_startup_button_404_page',__('Back to Home Page','advance-startup')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('advance_startup_button_404_page',__('Back to Home Page','advance-startup')));?></span></a>
	        	</div>
        	<?php } ?>
			<div class="clearfix"></div>
        </div>
	</div>
</main>

<?php get_footer(); ?>