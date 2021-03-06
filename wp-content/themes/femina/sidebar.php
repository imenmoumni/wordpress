<?php
/**
 * Sidebar template containing the primary and secondary widget areas
 *
 * @package Femina
 * @since Femina 1.0.9
 */

if ( is_active_sidebar( 'sidebar-1' ) || is_active_sidebar( 'sidebar-2' ) ) : ?>

<div id="sidebar-widget-areas" class="sidebar-widget-areas" role="complementary">

<?php
// A first sidebar for widgets.
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="widget-area sidebar" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary .widget-area -->
<?php endif; ?>

<?php
// A second sidebar for widgets.
if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div id="secondary-sidebar" class="widget-area sidebar" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- #secondary .widget-area -->
<?php endif; ?>

</div>

<?php   endif; ?>
