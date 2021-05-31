<?php
/**
 * Header Navigation File
 *
 * @package advance-startup
 */
?>

<div id="header" class="<?php if( get_theme_mod( 'advance_startup_sticky_header',false) != '' || get_theme_mod( 'advance_startup_responsive_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
  <div class="main-menu">
    <div class="container">
      <div class="menu-color">
        <div class="row ">
          <div class="col-lg-11 col-md-12">
            <?php 
              if(has_nav_menu('primary')){ ?>
              <div class="toggle-menu responsive-menu">
                <button class="mobiletoggle" role="tab"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','advance-startup'); ?></span></button>
              </div>
            <?php }?>
            <div id="menu-sidebar text-center" class="nav side-menu">
              <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'advance-startup' ); ?>">
                <?php
                  if(has_nav_menu('primary')){ 
                    wp_nav_menu( array( 
                      'theme_location' => 'primary',
                      'container_class' => 'main-menu-navigation clearfix' ,
                      'menu_class' => 'clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav text-lg-left pl-lg-0">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) );
                  } 
                ?>
              </nav>
              <div id="contact-info" class="text-center">
                <div class="phone">
                  <?php if( get_theme_mod('advance_startup_phone1') != ''){ ?>
                    <a href="tel:<?php echo esc_attr( get_theme_mod('advance_startup_phone1','' )); ?>"><i class="fas fa-phone mr-2"></i><?php echo esc_html( get_theme_mod('advance_startup_phone1','' )); ?><span class="screen-reader-text"><i class="fas fa-phone mr-2"></i><?php echo esc_html( get_theme_mod('advance_startup_phone1','' )); ?></span></a>
                  <?php } ?>
                </div> 
                <div class="mail">
                  <?php if( get_theme_mod('advance_startup_mail1') != ''){ ?>
                    <a href="mailto:<?php echo esc_attr( get_theme_mod('advance_startup_mail1','') ); ?>"><i class="fas fa-envelope mr-2"></i><?php echo esc_html( get_theme_mod('advance_startup_mail1','')); ?><span class="screen-reader-text"><i class="fas fa-envelope"></i><?php echo esc_html( get_theme_mod('advance_startup_mail1','')); ?></span></a>
                  <?php } ?>
                </div>  
                <div class="time">
                  <?php if( get_theme_mod('advance_startup_time') != ''){ ?>
                    <i class="fas fa-clock mr-2"></i><span><?php echo esc_html( get_theme_mod('advance_startup_time','')); ?></span>
                  <?php } ?>
                </div>
                <?php get_search_form();?>
                <div class="social-icons">
                  <?php if( get_theme_mod( 'advance_startup_facebook_url') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'advance_startup_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f mr-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','advance-startup' );?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'advance_startup_twitter_url') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'advance_startup_twitter_url','' ) ); ?>"><i class="fab fa-twitter mr-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','advance-startup' );?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'advance_startup_youtube_url') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'advance_startup_youtube_url','' ) ); ?>"><i class="fab fa-youtube mr-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','advance-startup' );?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'advance_startup_linkedin_url') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'advance_startup_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in mr-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','advance-startup' );?></span></a>
                  <?php } ?>
                </div>
              </div>
              <a href="javascript:void(0)" class="closebtn responsive-menu"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','advance-startup'); ?></span></a>
            </div>
          </div>
          <div class="col-lg-1 col-md-1">
            <div class="search-box">
              <button type="button" class="search-open"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
        <div class="serach_outer">
          <div class="serach_inner w-100 h-100">
            <?php get_search_form(); ?>
          </div>
          <button type="button" class="search-close">X</span></button>
        </div>
    </div>
  </div>
</div>