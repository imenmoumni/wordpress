<?php
/**
 * The template for displaying all pages, single posts and attachments
 *
 * This is a new template file that WordPress introduced in
 * version 4.3. Note that it uses conditional logic to display
 * different content based on the post type.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Femina
 * @since Femina 1.0.10
 */

get_header(); ?>
<div id="main-content" >
	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();
		get_template_part('template-parts/content', get_post_type() );
		// End of the loop.
	endwhile;
	?>

</div><!--/main-content-->
<?php get_sidebar( 'sidebar' ); ?>  
<?php get_footer(); ?>
