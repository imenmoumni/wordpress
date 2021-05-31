<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package advance-startup
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner">
    <?php if(get_theme_mod('advance_startup_preloader_option',true) != '' || get_theme_mod('advance_startup_responsive_preloader', true) != ''){ ?>
      <div id="loader-wrapper" class="w-100 h-100">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>
    <?php }?>
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'advance-startup' ); ?></a>
    <?php if( get_theme_mod('advance_startup_display_topbar',false) != ''){ ?>
      <div class="top-header py-3 px-0">
        <div class="container">
          <div class="row m-0">
            <div class="col-lg-2 col-md-6 p-0 ">
              <div class="phone">
                <?php if( get_theme_mod('advance_startup_phone1') != ''){ ?>
                  <a href="tel:<?php echo esc_attr( get_theme_mod('advance_startup_phone1','' )); ?>"><i class="fas fa-phone mr-2"></i><?php echo esc_html( get_theme_mod('advance_startup_phone1','' )); ?><span class="screen-reader-text"><i class="fas fa-phone"></i><?php echo esc_html( get_theme_mod('advance_startup_phone1','' )); ?></span></a>
                <?php } ?>
              </div> 
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="mail">
                <?php if( get_theme_mod('advance_startup_mail1') != ''){ ?>
                  <a href="mailto:<?php echo esc_attr( get_theme_mod('advance_startup_mail1','') ); ?>"><i class="fas fa-envelope mr-2"></i><?php echo esc_html( get_theme_mod('advance_startup_mail1','')); ?><span class="screen-reader-text"><i class="fas fa-envelope"></i><?php echo esc_html( get_theme_mod('advance_startup_mail1','')); ?></span></a>
                <?php } ?>
              </div>  
            </div>
            <div class="col-lg-3 col-md-6 time p-0">
              <?php if( get_theme_mod('advance_startup_time') != ''){ ?>
                <i class="fas fa-clock mr-2"></i><span><?php echo esc_html( get_theme_mod('advance_startup_time','')); ?></span>
              <?php } ?>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="social-icons text-right">
                <?php if( get_theme_mod( 'advance_startup_facebook_url') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'advance_startup_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f ml-3" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','advance-startup' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'advance_startup_twitter_url') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'advance_startup_twitter_url','' ) ); ?>"><i class="fab fa-twitter ml-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','advance-startup' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'advance_startup_youtube_url') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'advance_startup_youtube_url','' ) ); ?>"><i class="fab fa-youtube ml-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','advance-startup' );?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'advance_startup_linkedin_url') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'advance_startup_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in ml-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','advance-startup' );?></span></a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div> 
    <?php } ?>
    <div id="header-top" class="py-3 px-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="logo py-2 px-0">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if( get_theme_mod('advance_startup_site_title',true) != ''){ ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                    <p class="site-title p-0 m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php endif; ?>
                <?php }?>
              <?php endif; ?>
              <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
                ?>
                <?php if( get_theme_mod('advance_startup_tagline',true) != ''){ ?>
                  <p class="site-description m-0">
                    <?php echo esc_html($description); ?>
                  </p>
                <?php }?>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="talk-btn my-4 mx-0 text-lg-right">
              <?php if ( get_theme_mod('advance_startup_top_button_text','') != "" ) {?>
                <a href="<?php echo esc_html(get_theme_mod('advance_startup_top_button_url')); ?>" class="p-3"><?php echo esc_html(get_theme_mod('advance_startup_top_button_text','')); ?><i class="fas fa-angle-right ml-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Button','advance-startup' );?></span></a>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part( 'template-parts/header-navigation' ); ?> 
  </header>