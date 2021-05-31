<?php
/**
 * Template for displaying search forms in Femina
 *
 * @package Femina
 * @since Femina 1.0.4
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'femina' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'femina' ) . ' &hellip;'; ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'femina' ); ?>" />
	</label>
	<button type="submit" class="search-submit"><span class="genericon genericon-search" aria-hidden="true"></span><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'femina' ); ?></span></button>
</form>
