<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Femina
 * @since Femina 1.0.7
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta">
		<?php
		// Translators: used between list items, there is a space after the comma.
		$categories_list = get_the_category_list( __( ', ', 'femina' ) );
		if ( $categories_list ) {
			echo '<span class="cat-links"><span class="genericon genericon-category" aria-hidden="true"></span>' . $categories_list . '</span>';
		}
		?>
		</div><!-- .entry-meta -->
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php
		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
		<?php
		$format = get_post_format(); // This is used to give a distinct style to every post format.
		$format_link = get_post_format_link( $format );
		if ( $format ) :
			printf( '<span class="post-format"><a href="%1$s"><span class="genericon genericon-%2$s" aria-hidden="true"></span>%2$s</a></span>', esc_url( $format_link ) , $format );
		endif;
		?>
				<span class="byline">
				<?php
				if ( 'post' == get_post_type() ) {
					// Translators: there is a space after "By".
					print( __( 'By ', 'femina' )	);
					printf( '<span><a href="%1$s" rel="author"><span class="genericon genericon-user" aria-hidden="true"></span>%2$s</a></span>',
						esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
						get_the_author()
					);
				}
				?>
				</span><!--.byline -->
			<?php edit_post_link( '<span class="genericon genericon-edit" aria-hidden="true"></span>' . __( 'Edit', 'femina' ), '<span class="edit-link">', '</span>' );?>
			</div><!-- .entry-meta -->
				<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<?php femina_entry_footer() ?>
</article><!-- #post-## -->
