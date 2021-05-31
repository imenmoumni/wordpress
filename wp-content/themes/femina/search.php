<?php
/**
 * The template for displaying search results pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Femina
 * @since Femina 1.0.7
 */

get_header(); ?>
	<div id="main-content">
<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'femina' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h2>
		</header><!-- .page-header -->
		<div class="blog-inner flex-container">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( 'template-parts/content', 'search' );
		endwhile; // End the loop. ?>
		</div>
		<?php
		// Previous/next page navigation.
		femina_blog_navigation();

		// If no content, include the "No posts found" template.
	else :
		get_template_part( 'template-parts/content', 'none' );

	endif;
?>
	</div><!--/main-content-->
<?php get_sidebar( 'sidebar' ); ?>    
<?php get_footer(); ?>
