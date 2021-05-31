<?php
/**
 * Custom template tags for Femina
 *
 * @package Femina
 * @since Femina 1.0.7
 */

/**
 * Prints Femina's custom logo markup.
 *
 * @since Femina 1.0.7
 */
function femina_the_custom_logo() {
	$html = sprintf( '<a href="%1$s" class="custom-logo-link home-link" rel="home" itemprop="url"><img class="custom-logo" src="%2$s" alt="logo"><div class="title-description"><h1 class="site-title">%3$s</h1><h2 class="site-description">%4$s</h2></div></a>',
		esc_url( home_url( '/' ) ),
		esc_attr( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ),
		esc_html( get_bloginfo( 'name' ) ) ,
		esc_html( get_bloginfo( 'description' ) )
	);
	return $html;
}
add_filter( 'get_custom_logo', 'femina_the_custom_logo' );

/**
 * Prints the entry footer markup in index/archive pages.
 *
 * @since Femina 1.0.9
 */
function femina_entry_footer() { ?>
	<footer class="entry-footer">
		<div class="entry-meta">
		<?php
		printf( '<a href="%1$s" class="entry-date" rel="bookmark"><span class="screen-reader-text"> %2$s</span><span class="genericon genericon-time" aria-hidden="true"></span><time datetime="%3$s">%4$s</time></a>',
			esc_url( get_permalink() ),
			esc_html( get_the_title() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		// Translators: used between list items, there is a space after the comma.
		$tag_list = get_the_tag_list( '', __( ', ', 'femina' ) );
		if ( $tag_list ) {
			echo '<span class="tags-links"><span class="genericon genericon-tag" aria-hidden="true"></span>' . $tag_list . '</span>';
		}

		if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link">
				<span class="genericon genericon-comment" aria-hidden="true"></span>
				<?php femina_comments_popup_link(); ?>
			</span>
		<?php endif; ?>
			
		</div><!-- .entry-meta -->
	</footer><!-- .entry-footer -->
<?php }

if ( ! function_exists( 'femina_post_navigation' ) ) :
	/**
	 * Prints the markup for the navigation between posts and changes the default strings of the_post_navigation().
	 *
	 * @since Femina 1.0.9
	 */
	function femina_post_navigation() {
		the_post_navigation( array(
			'next_text' => '<span class="post-title">%title</span><span class="screen-reader-text">' . __( 'Next post:', 'femina' ) . '</span> <span class="genericon genericon-next" aria-hidden="true"></span> ',
			'prev_text' => '<span class="genericon genericon-previous" aria-hidden="true"></span> <span class="screen-reader-text">' . __( 'Previous post:', 'femina' ) . '</span> <span class="post-title">%title</span>',
		) );
	}
endif;


if ( ! function_exists( 'femina_blog_navigation' ) ) :
	/**
	 * Applies the user's choice for navigation/pagination and changes the default strings in the_posts_navigation() and the_posts_pagination().
	 *
	 * @since Femina 1.0.9
	 */
	function femina_blog_navigation() {
		$femina_theme_options = femina_get_options( 'femina_theme_options' );
		if ( $femina_theme_options['blog_navigation'] == 'navigation' ) :
			the_posts_navigation( array(
				'prev_text' => '<span class="genericon genericon-previous" aria-hidden="true"></span>' . __( 'Older articles', 'femina' ),
				'next_text' => __( 'Newer articles', 'femina' ) . '<span class="genericon genericon-next" aria-hidden="true"></span>',
			) );
		else :
			the_posts_pagination( array(
				'prev_text' => '<span class="genericon genericon-previous" aria-hidden="true"></span><span class="screen-reader-text">' . __( 'Previous page', 'femina' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'femina' ) . '</span><span class="genericon genericon-next" aria-hidden="true"></span>',
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'femina' ) . ' </span>',
			) );
		endif;
	}
endif;

if ( ! function_exists( 'femina_comments_navigation' ) ) :
	/**
	 * Prints custom html markup for the_comments_navigation()
	 *
	 * @since Femina 1.0.9
	 */
	function femina_comments_navigation() {
		the_comments_navigation( array(
			'prev_text' => '<span class="genericon genericon-previous" aria-hidden="true"></span> ' . __( 'Older', 'femina' ),
			'next_text' => __( 'Newer', 'femina' ) . ' <span class="genericon genericon-next" aria-hidden="true"></span>',
		));
	}
endif;

if ( ! function_exists( 'femina_comments_popup_link' ) ) :
	/**
	 * Prints the markup for the navigation between posts and changes the default strings of the_post_navigation().
	 *
	 * @since Femina 1.0.9
	 */
	function femina_comments_popup_link() {
		comments_popup_link(
			// Translators: there is a space after "on.
			'<span aria-hidden="true">0</span><span class="screen-reader-text">' . __( 'No comments on ', 'femina' ) . get_the_title() . '</span>',
			// Translators: there is a space after "on.
			'<span aria-hidden="true">1</span><span class="screen-reader-text">' . __( 'Only one comment on ', 'femina' ) . get_the_title() . '</span>',
			// Translators: there is a space after "on.
			'<span aria-hidden="true">%</span><span class="screen-reader-text">' . __( '% comments on ', 'femina' ) . get_the_title() . '</span>'
		);
	}
endif;

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ...
 * and a Continue reading link.
 *
 * @since Femina 1.0.7
 *
 * @param string $more Default Read More excerpt link.
 * @return string Filtered Read More excerpt link.
 */
function femina_excerpt_more( $more ) {
	if ( ! is_single() ) {
		$link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
			esc_url( get_permalink( get_the_ID() ) ),
			/* Translators: %s: Name of current post */
			sprintf( __( 'More', 'femina' ) . ' %s <span class="meta-nav">&rarr;</span>', '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
		);
		return ' &hellip; ' . $link;
	} else {
		return '. ';
	}
}
add_filter( 'excerpt_more', 'femina_excerpt_more' );

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function femina_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'femina_excerpt_length', 999 );

/**
 * Filters the edit comment link.
 */
function femina_edit_comment_link() {
	printf( '<span class="edit-link"><a href="%1$s" class="comment-edit-link"><span class="genericon genericon-edit" aria-hidden="true"></span>%2$s</a></span>',
		esc_url( get_edit_comment_link() ),
		esc_html( __( 'Edit', 'femina' ) )
	);
}
add_filter( 'edit_comment_link', 'femina_edit_comment_link' );

