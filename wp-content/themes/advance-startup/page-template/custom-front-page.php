<?php
/**
 * Template Name: Custom home
 */
get_header(); ?>

<main role="main" id="maincontent">
  <?php do_action( 'advance_startup_above_slider' ); ?>

  <?php if( get_theme_mod( 'advance_startup_slider_hide', false) != '' || get_theme_mod( 'advance_startup_responsive_slider', false) != '') { ?>
    <section id="slider" class="mw-100 m-auto p-0">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('advance_startup_slider_speed_option', 3000)); ?>"> 
        <?php $advance_startup_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'advance_startup_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $advance_startup_slider_pages[] = $mod;
            }
          }
          if( !empty($advance_startup_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $advance_startup_slider_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption">
                <div class="inner_carousel text-center">
                  <h1 class="text-capitalize my-2"><?php the_title(); ?></h1>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( advance_startup_string_limit_words( $excerpt, esc_attr(get_theme_mod('advance_startup_slider_excerpt_length','20')))); ?></p>
                  <?php if( get_theme_mod('advance_startup_slider_button','READ MORE') != ''){ ?>
                    <div class="readbtn mt-md-3">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('advance_startup_slider_button','READ MORE'));?><i class="fas fa-angle-right ml-2"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('advance_startup_slider_button','READ MORE'));?><i class="fas fa-angle-right"></i></span></a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <div class="slider-nex-pre">
          <a class="carousel-control-prev" href="#carouselExampleIndicators"  role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left p-3"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','advance-startup' );?></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators"  role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right p-3"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next','advance-startup' );?></span>
          </a>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php } ?>

  <?php do_action( 'advance_startup_below_slider' ); ?>

  <div class="header-nav">
    <?php get_template_part( 'template-parts/header-navigation' ); ?> 
  </div>

  <?php do_action( 'advance_startup_above_we_provide_section' ); ?>

  <?php if( get_theme_mod('advance_startup_title') != '' || get_theme_mod( 'advance_startup_we_provide_category' )!= ''){ ?>
    <section id="we_provide" class="py-5 px-0 text-center">
      <div class="container">
        <?php if( get_theme_mod('advance_startup_title') != ''){ ?>
          <h2><?php echo esc_html(get_theme_mod('advance_startup_title','')); ?></h2>
        <?php } ?>
        <div class="row">
          <?php 
           $advance_startup_catData =  get_theme_mod('advance_startup_we_provide_category');
           if($advance_startup_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html($advance_startup_catData,'advance-startup')));?>
              <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                <div class=" col-lg-4 col-md-6">
                  <div class="cat-posts p-3 my-2">
                    <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                    <div class="cat_body mb-2">
                      <h3 class="title"><?php the_title(); ?></h3>
                      <p>
                        <?php $excerpt = get_the_excerpt(); echo esc_html( advance_startup_string_limit_words( $excerpt,12 ) ); ?>
                      </p> 
                      <div class="theme_button my-2 mx-0">
                        <a href="<?php the_permalink(); ?>"><?php echo esc_html_e('VIEW DETAILS','advance-startup'); ?><i class="fas fa-angle-right ml-2"></i><span class="screen-reader-text"><?php esc_html_e( 'VIEW DETAILS','advance-startup' );?></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div> 
              <?php endwhile;
              wp_reset_postdata();
              }
            ?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'advance_startup_below_we_provide_section' ); ?>

  <div id="content">
    <div class="container entry-content">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>