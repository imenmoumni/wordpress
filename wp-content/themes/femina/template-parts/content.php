<?php
/**
 * The default template for displaying content
 *
 * Used for index/archive/search.
 *
 * @package Femina
 * @since Femina 1.0.7
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
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
	<?php
	the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
	?>
	<?php
	if ( is_sticky() && is_home() && ! is_paged() ) {
		echo '<span class="featured-post"><span class="genericon genericon-pinned" aria-hidden="true"></span><span class="screen-reader-text">' . __( 'Featured', 'femina' ) . '</span></span>';
	}
	?>
		<div class="entry-meta">
		<?php
		$format = get_post_format(); // This is used to give a distinct style to every post format.
		$format_link = get_post_format_link( $format );
		if ( $format ) :
			printf( '<a href="%1$s" class="post-format"><span class="genericon genericon-%2$s" aria-hidden="true"></span>%2$s</a>', esc_url( $format_link ) , $format );
		endif;
		?>
			<span class="byline">
			<?php
			if ( 'post' == get_post_type() ) {
				// Translators: there is a space after "By".
				print(	__(	'By ', 'femina'	)	);
				printf( '<a href="%1$s" rel="author" class="entry-author"><span class="genericon genericon-user" aria-hidden="true"></span>%2$s</a>',
					esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
					get_the_author()
				);
			}
			?>
			</span><!--.byline -->
			<?php edit_post_link( '<span class="genericon genericon-edit" aria-hidden="true"></span>' . __( 'Edit', 'femina' ) );?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<?php
	if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail(); ?>
			</a>
		</div><!-- post-thumbnail -->
	<?php endif; ?>
	
<?php
if ( strpos( $post->post_content, '<!--more' ) || get_post_format() ) : ?>
	<div class="entry-content"> <?php
	the_content( sprintf(
		__( 'Continue reading', 'femina' ) . ' %s <span class="meta-nav">&rarr;</span>',
		the_title( '<span class="screen-reader-text">', '</span>', false )
	) );
elseif ( post_password_required() ) : ?>
	<div class="entry-content"> <?php
	the_content();

else : ?>
	<div class="entry-excerpt"> <?php
	the_excerpt();
endif;
	?>
</div><!-- .entry-content -->
<?php femina_entry_footer() ?>
</article><!-- #post-## -->

