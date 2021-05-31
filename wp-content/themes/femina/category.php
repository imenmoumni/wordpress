<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Femina
 * @since Femina 1.0.7
 */

// $femina_theme_options = femina_get_options( 'femina_theme_options' );
get_header(); ?>

<div id="main-content">
<?php
if ( have_posts() ) : ?>
	<header class="archive-header">
		<h1 class="archive-title"><?php printf( __( 'All articles in %s', 'femina' ), single_cat_title( '', false ) ); ?></h1>
		<?php
			// Show an optional term description.
			$term_description = term_description();
		if ( ! empty( $term_description ) ) :
			printf( '<div class="taxonomy-description">%s</div>', $term_description );
		endif;
		?>
	</header><!-- .archive-header -->
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
<?php
	// Previous/next page navigation.
	femina_blog_navigation();

else :
	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content', 'none' );

endif; ?>
</div><!--/main-content-->
<?php get_sidebar( 'sidebar' ); ?>  
<?php get_footer(); ?>
