<?php
/**
 * The template for displaying Author archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Femina
 * @since Femina 1.0.7
 */

get_header(); ?>
<div id="main-content" >
<?php
if ( have_posts() ) :
	if ( '' != get_the_author_meta( 'description' ) ) :
		get_template_part( 'template-parts/author-bio' );
	endif; ?>
	<h3><?php printf( __( 'All articles by %s', 'femina' ), get_the_author() ); ?></h3>
	<div class="blog-inner flex-container">
<?php
	// Start the Loop.
	while ( have_posts() ) : the_post();

	/*
	 * Include the post format-specific template for the content. If you want to
	 * use this in a child theme, then include a file called called content-___.php
	 * (where ___ is the post format) and that will be used instead.
	 */
	get_template_part( 'template-parts/content', get_post_format() );

	endwhile; ?>
	</div>
<?php // Previous/next page navigation.
	femina_blog_navigation();

else :
	// If no content, include the "No posts found" template.
	get_template_part( 'content', 'none' );

endif; ?>	
</div><!--/main-content-->
<?php get_sidebar( 'sidebar' ); ?>
<?php get_footer(); ?>
