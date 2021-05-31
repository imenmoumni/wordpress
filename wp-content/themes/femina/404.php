<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Femina
 * @since Femina 1.0.7
 */

get_header(); ?>
	<div id="main-content">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can not be found.', 'femina' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'femina' ); ?></p>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</div><!--/main-content-->
<?php get_sidebar( 'sidebar' ); ?>
<?php get_footer();



