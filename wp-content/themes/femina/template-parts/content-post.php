<?php
/**
 * The Template for displaying all single posts
 *
 * @package Femina
 * @since Femina 1.0.9
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<?php
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'femina' ) );
	if ( $categories_list ) {
		echo '<div class="entry-meta"><span class="cat-links"><span class="genericon genericon-category" aria-hidden="true"></span>' . $categories_list . '</span></div>';
	}
	?>
	<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>	
		<span class="byline">
		<?php
		// Translators: there is a space after "By".
		print( __( 'By ', 'femina' ) );
		printf('<a href="%1$s" class="entry-author" rel="author">%2$s</a>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		); ?>
		</span><!-- .byline -->
		<span class="entry-meta">
		<?php
		printf( '<a href="%1$s" rel="bookmark" class="entry-date"><span class="genericon genericon-time" aria-hidden="true"></span><time datetime="%2$s">%3$s</time></a>',
			esc_url( get_day_link( get_the_date( 'Y', $post->ID ), get_the_date( 'm', $post->ID ),get_the_date( 'd', $post->ID ) ) ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);
		edit_post_link( '<span class="genericon genericon-edit" aria-hidden="true"></span>' . __( 'Edit', 'femina' ) );
		if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link">
				<span class="genericon genericon-comment" aria-hidden="true"></span>
				<?php comments_popup_link( __( 'Leave a comment', 'femina' ), __( '1 Comment', 'femina' ), __( '% Comments', 'femina' ) ); ?>
			</span>
		<?php
		endif; ?>
		</span><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<?php if ( ! get_post_format() ) : ?>
	<div class="entry-excerpt">
	<?php
	if ( has_excerpt() ) {
		the_excerpt();
	}
	?>
	</div>
	<?php endif ?>

	<?php if ( has_post_thumbnail() && ! has_post_format( array( 'image', 'gallery', 'video' ) ) ) : ?>
		<div class="featured-image">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'femina' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'femina' ) . ' </span>%',
			) );
		?>      
	</div><!-- .entry-content -->
	<footer class="entry-footer">       
		<?php
		// Translators: used between list items, there is a space after the comma.
		$tag_list = get_the_tag_list( '', __( ', ', 'femina' ) );
		if ( $tag_list ) {
			echo '<div class="tag-links">' . $tag_list . '</div>';
		}
		// Translators: There is a space after "by".
		printf( '<p class="written-by">' . __( 'This article was written by ', 'femina' ) . '<a href="%1$s">%2$s</a></p>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		);
		if ( '' != get_the_author_meta( 'description' ) ) {
			get_template_part( 'template-parts/author-bio' );
		}
		?>
	</footer><!-- .entry-footer -->
<?php
// Previous/next post navigation.
femina_post_navigation();

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {
	comments_template();
} ?>
</article><!-- #post-## -->
