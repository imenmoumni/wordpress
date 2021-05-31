<?php
/**
 * Template Name: No Sidebar
 *
 * Description: A page template without sidebar, 2/3 of the page width.
 *
 * @package Femina
 * @since Femina 1.0.7
 */

get_header(); ?>
<div id="main-content" class="main-content no-sidebar">
<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', 'page' );
	endwhile; // end of the loop. ?>
</div><!--/main-content-->	        
<?php get_footer(); ?>
