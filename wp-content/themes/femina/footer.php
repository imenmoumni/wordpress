<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and closes main, div#container, body and html tags, which were opened in header.php
 *
 * @package Femina
 * @since Femina 1.0.7
 */

?>
			</main><!-- #main -->
<?php   get_sidebar( 'footer' ); ?>
			<footer id="page-footer" role="contentinfo">
				<div id="site-info">
					<span class="footer-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html( bloginfo( 'name' ) ); ?></a></span>
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( __( 'Proudly powered by %s', 'femina' ), 'WordPress' ); ?></a>
				</div><!--/site-info--> 
		<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav id="footer-social-menu" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Menu ', 'femina' ); ?>">
					<?php wp_nav_menu( array(
						'theme_location'	=> 'social',
						'container'			=> 'false',
						'menu_class'			=> 'social-menu',
						'depth'				=> 1,
						'link_before'		=> '<span class="screen-reader-text">',
						'link_after'		=> '</span>',
						)
					); ?>
				</nav> <!--/social--> 
		<?php endif ?>
			</footer> <!--/footer-->
		</div><!-- #container -->
<?php   wp_footer(); ?>
	</body>
</html>

