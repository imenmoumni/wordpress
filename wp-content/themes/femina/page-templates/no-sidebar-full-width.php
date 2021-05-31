<?php
/**
 * Template Name: Full Width, No Sidebar
 *
 * Description: A page template without sidebar, full width. This template can be used as blog posts page when using a static front page if a blog page without sidebars is preferred.
 *
 * @package Femina
 * @since Femina 1.0.7
 */

get_header(); ?>

<div id="main-content" class="main-content no-sidebar-full-width">
<?php
	if ( have_posts() ) :
		// Start the Loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', 'page' );

		endwhile;

		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	else :
		// If no content, include the "No posts found" template.
		get_template_part( 'template-parts/content', 'none' );

	endif;
?>
	
</div><!--/main-content-->
<?php get_footer(); ?>
