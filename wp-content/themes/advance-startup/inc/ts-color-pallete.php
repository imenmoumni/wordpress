<?php
	
/*---------------------------Theme color option-------------------*/
	$advance_startup_theme_color_first = get_theme_mod('advance_startup_theme_color_first');

	$advance_startup_custom_css = '';

	$advance_startup_custom_css .='#slider .inner_carousel .readbtn a, #we_provide h3:before, #we_provide .theme_button a:hover ,.read-more-btn a:hover, .copyright, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #sidebar input[type="submit"]:hover, #menu-sidebar input[type="submit"]{';
		$advance_startup_custom_css .='background-color: '.esc_attr($advance_startup_theme_color_first).' !important;';
	$advance_startup_custom_css .='}';

	$advance_startup_custom_css .='#slider .carousel-control-next-icon i,#slider .carousel-control-prev-icon i{';
		$advance_startup_custom_css .='color: '.esc_attr($advance_startup_theme_color_first).' !important;';
	$advance_startup_custom_css .='}';

	$advance_startup_custom_css .='.primary-navigation ul ul a:hover{';
		$advance_startup_custom_css .='color: '.esc_attr($advance_startup_theme_color_first).'';
	$advance_startup_custom_css .='}';

	$advance_startup_custom_css .='#slider .inner_carousel .readbtn a{';
		$advance_startup_custom_css .='border-color: '.esc_attr($advance_startup_theme_color_first).';';
	$advance_startup_custom_css .='}';

	$advance_startup_custom_css .='.primary-navigation ul ul li:first-child{';
		$advance_startup_custom_css .='border-color: '.esc_attr($advance_startup_theme_color_first).';';
	$advance_startup_custom_css .='}';
	
	/*------------------Theme color option-------------------*/
	$advance_startup_theme_color_second = get_theme_mod('advance_startup_theme_color_second');

	$advance_startup_custom_css .='.read-moresec a:hover, .read-moresec a:hover, .talk-btn a:hover,  #footer input[type="submit"], #footer .tagcloud a:hover, .woocommerce span.onsale, #sidebar .tagcloud a:hover,.page-template-custom-front-page .main-menu .menu-color,input[type="submit"], .tags p a:hover, #comments a.comment-reply-link, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button{';
		$advance_startup_custom_css .='background-color: '.esc_attr($advance_startup_theme_color_second).';';
	$advance_startup_custom_css .='}';

	$advance_startup_custom_css .='#comments input[type="submit"].submit, nav.woocommerce-MyAccount-navigation ul li, #sidebar ul li a:hover:before{';
		$advance_startup_custom_css .='background-color: '.esc_attr($advance_startup_theme_color_second).'!important;';
	$advance_startup_custom_css .='}';

	$advance_startup_custom_css .='a, h1, h2, h3, h4, h5, h6,.read-moresec a,.metabox i, section h4,#comments a time,.woocommerce-message::before,.woocommerce .quantity .qty, #sidebar caption, h1.entry-title,.new-text p a, h3.widget-title a,.new-text h2 a, article.page-box-single h3 a, div#comments a, a.added_to_cart.wc-forward, .meta-nav, .tags i, .entry-content li code, #sidebar ul li:hover,#sidebar ul li:active, #sidebar ul li:focus,.metabox span a:hover, a.showcoupon, .woocommerce-MyAccount-content a, nav.woocommerce-MyAccount-navigation a, tr.woocommerce-cart-form__cart-item.cart_item a, .entry-content a, .woocommerce-product-details__short-description p a, .comment-body p a, #sidebar .woocommerce ul.product_list_widget li:hover, #sidebar ul li:hover, #sidebar ul li:hover a, #sidebar ul li:active, #sidebar ul li:focus, #sidebar .woocommerce ul.product_list_widget li{';
		$advance_startup_custom_css .='color: '.esc_attr($advance_startup_theme_color_second).';';
	$advance_startup_custom_css .='}';

	$advance_startup_custom_css .='.main-menu{';
		$advance_startup_custom_css .='border-bottom-color: '.esc_attr($advance_startup_theme_color_second).';';
	$advance_startup_custom_css .='}';

	$advance_startup_custom_css .='.woocommerce-message{';
		$advance_startup_custom_css .='border-top-color: '.esc_attr($advance_startup_theme_color_second).';';
	$advance_startup_custom_css .='}';

	$advance_startup_custom_css .='.talk-btn a:hover, #footer input[type="search"], .woocommerce .quantity .qty, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .tags p a:hover, .tags p a{';
		$advance_startup_custom_css .='border-color: '.esc_attr($advance_startup_theme_color_second).';';
	$advance_startup_custom_css .='}';

	$advance_startup_custom_css .='#sidebar ul li a:hover,#sidebar ul li:active, #sidebar ul li:focus,#sidebar ul li:hover:before {';
		$advance_startup_custom_css .='color: '.esc_attr($advance_startup_theme_color_second).'!important;';
	$advance_startup_custom_css .='}';

	if($advance_startup_theme_color_second != false || $advance_startup_theme_color_first != false){
		$advance_startup_custom_css .='#we_provide h3:before{
		background: linear-gradient(130deg, '.esc_attr($advance_startup_theme_color_second).' 40%, '.esc_attr($advance_startup_theme_color_first).' 77%)!important;
		}';
	}
	if($advance_startup_theme_color_second){
		$advance_startup_custom_css .='.page-template-custom-front-page .main-menu .menu-color{
		background: linear-gradient(90deg, #fff 94%, '.esc_attr($advance_startup_theme_color_second).' 19%);
		}';
	}
	if($advance_startup_theme_color_second != false || $advance_startup_theme_color_first != false){
		$advance_startup_custom_css .='#we_provide .theme_button a:hover, .read-more-btn a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #sidebar input[type="submit"]:hover, .copyright, #slider .carousel-item{
		background-image: linear-gradient(130deg, '.esc_attr($advance_startup_theme_color_second).' 40%, '.esc_attr($advance_startup_theme_color_first).' 77%);
		}';
	}

	// media
	$advance_startup_custom_css .='@media screen and (max-width:1000px) {';
	if($advance_startup_theme_color_first != false || $advance_startup_theme_color_second != false){
	$advance_startup_custom_css .='#menu-sidebar, .primary-navigation ul ul a, .primary-navigation li a:hover, .primary-navigation li:hover a{
	background-image: linear-gradient(-90deg, '.esc_attr($advance_startup_theme_color_first).' 0%, '.esc_attr($advance_startup_theme_color_second).' 120%);
		}';
	}
	$advance_startup_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$advance_startup_theme_lay = get_theme_mod( 'advance_startup_theme_options','Default');
    if($advance_startup_theme_lay == 'Default'){
		$advance_startup_custom_css .='body{';
			$advance_startup_custom_css .='max-width: 100%;';
		$advance_startup_custom_css .='}';
		$advance_startup_custom_css .='.page-template-custom-home-page .middle-header{';
			$advance_startup_custom_css .='width: 97.3%';
		$advance_startup_custom_css .='}';
	}else if($advance_startup_theme_lay == 'Container'){
		$advance_startup_custom_css .='body{';
			$advance_startup_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$advance_startup_custom_css .='}';
		$advance_startup_custom_css .='.page-template-custom-front-page #header-top{';
			$advance_startup_custom_css .='width: 97.7%';
		$advance_startup_custom_css .='}';
		$advance_startup_custom_css .='.serach_outer{';
			$advance_startup_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$advance_startup_custom_css .='}';
	}else if($advance_startup_theme_lay == 'Box Container'){
		$advance_startup_custom_css .='body{';
			$advance_startup_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$advance_startup_custom_css .='}';
		$advance_startup_custom_css .='.serach_outer{';
			$advance_startup_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$advance_startup_custom_css .='}';
		$advance_startup_custom_css .='.page-template-custom-front-page #header-top{';
			$advance_startup_custom_css .='max-width: 1110px; ';
		$advance_startup_custom_css .='}';
	}

	// css
	$advance_startup_show_slider = get_theme_mod( 'advance_startup_slider_hide', false);
	if($advance_startup_show_slider == false){
		$advance_startup_custom_css .='.page-template-custom-front-page #header-top{';
			$advance_startup_custom_css .='position: static;background: rgba(0, 0, 0, 1);';
		$advance_startup_custom_css .='}';
	}
	if($advance_startup_show_slider == false){
		$advance_startup_custom_css .='.page-template-custom-front-page .main-menu{';
			$advance_startup_custom_css .='margin:0; border-bottom-color: #906b00;border-bottom: 1px solid #906b00;padding:0;';
		$advance_startup_custom_css .='}';
	}

	$advance_startup_fixed_header = get_theme_mod( 'advance_startup_sticky_header', false);
	if($advance_startup_fixed_header == false){
		$advance_startup_custom_css .='@media screen and (min-width: 576px){
		.page-template-custom-front-page .fixed-header .main-menu{';
			$advance_startup_custom_css .='z-index: 999;border: none; margin-top: -7em;position: relative;padding: 10px;margin-bottom: 3%; background:none;';
		$advance_startup_custom_css .='} }';
	}

	/*-----------------------Slider Content Layout ------------------*/
	$advance_startup_theme_lay = get_theme_mod( 'advance_startup_slider_content_alignment','Center');
    if($advance_startup_theme_lay == 'Left'){
		$advance_startup_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_startup_custom_css .='text-align:left !important; left:15%; right:45%;';
		$advance_startup_custom_css .='}';
	}else if($advance_startup_theme_lay == 'Center'){
		$advance_startup_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_startup_custom_css .='text-align:center !important; left:20%; right:20%;';
		$advance_startup_custom_css .='}';
	}else if($advance_startup_theme_lay == 'Right'){
		$advance_startup_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_startup_custom_css .='text-align:right !important; left:45%; right:15%;';
		$advance_startup_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$advance_startup_theme_lay = get_theme_mod( 'advance_startup_slider_image_opacity','0.4');
	if($advance_startup_theme_lay == '0'){
		$advance_startup_custom_css .='#slider img{';
			$advance_startup_custom_css .='opacity:0';
		$advance_startup_custom_css .='}';
		}else if($advance_startup_theme_lay == '0.1'){
		$advance_startup_custom_css .='#slider img{';
			$advance_startup_custom_css .='opacity:0.1';
		$advance_startup_custom_css .='}';
		}else if($advance_startup_theme_lay == '0.2'){
		$advance_startup_custom_css .='#slider img{';
			$advance_startup_custom_css .='opacity:0.2';
		$advance_startup_custom_css .='}';
		}else if($advance_startup_theme_lay == '0.3'){
		$advance_startup_custom_css .='#slider img{';
			$advance_startup_custom_css .='opacity:0.3';
		$advance_startup_custom_css .='}';
		}else if($advance_startup_theme_lay == '0.4'){
		$advance_startup_custom_css .='#slider img{';
			$advance_startup_custom_css .='opacity:0.4';
		$advance_startup_custom_css .='}';
		}else if($advance_startup_theme_lay == '0.5'){
		$advance_startup_custom_css .='#slider img{';
			$advance_startup_custom_css .='opacity:0.5';
		$advance_startup_custom_css .='}';
		}else if($advance_startup_theme_lay == '0.6'){
		$advance_startup_custom_css .='#slider img{';
			$advance_startup_custom_css .='opacity:0.6';
		$advance_startup_custom_css .='}';
		}else if($advance_startup_theme_lay == '0.7'){
		$advance_startup_custom_css .='#slider img{';
			$advance_startup_custom_css .='opacity:0.7';
		$advance_startup_custom_css .='}';
		}else if($advance_startup_theme_lay == '0.8'){
		$advance_startup_custom_css .='#slider img{';
			$advance_startup_custom_css .='opacity:0.8';
		$advance_startup_custom_css .='}';
		}else if($advance_startup_theme_lay == '0.9'){
		$advance_startup_custom_css .='#slider img{';
			$advance_startup_custom_css .='opacity:0.9';
		$advance_startup_custom_css .='}';
		}

	/*-------------------------- Button Settings option------------------*/
	$advance_startup_button_padding_top_bottom = get_theme_mod('advance_startup_button_padding_top_bottom');
	$advance_startup_button_padding_left_right = get_theme_mod('advance_startup_button_padding_left_right');
	$advance_startup_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .readbtn a, #comments .form-submit input[type="submit"],#category .explore-btn a, #we_provide .theme_button a{';
		$advance_startup_custom_css .='padding-top: '.esc_attr($advance_startup_button_padding_top_bottom).'px !important; padding-bottom: '.esc_attr($advance_startup_button_padding_top_bottom).'px !important; padding-left: '.esc_attr($advance_startup_button_padding_left_right).'px !important; padding-right: '.esc_attr($advance_startup_button_padding_left_right).'px !important; display:inline-block;';
	$advance_startup_custom_css .='}';

	$advance_startup_button_border_radius = get_theme_mod('advance_startup_button_border_radius');
	$advance_startup_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .readbtn a, #comments .form-submit input[type="submit"], #category .explore-btn a, #we_provide .theme_button a{';
		$advance_startup_custom_css .='border-radius: '.esc_attr($advance_startup_button_border_radius).'px;';
	$advance_startup_custom_css .='}';

	/*-----------------------------Responsive Setting --------------------*/
	$advance_startup_stickyheader = get_theme_mod( 'advance_startup_responsive_sticky_header',false);
	if($advance_startup_stickyheader == true && get_theme_mod( 'advance_startup_sticky_header') == false){
    	$advance_startup_custom_css .='.fixed-header{';
			$advance_startup_custom_css .='position:static; box-shadow: none;';
		$advance_startup_custom_css .='} ';
	}
    if($advance_startup_stickyheader == true){
    	$advance_startup_custom_css .='@media screen and (max-width:575px) {';
		$advance_startup_custom_css .='.fixed-header{';
			$advance_startup_custom_css .='position:fixed;';
		$advance_startup_custom_css .='} }';
	}else if($advance_startup_stickyheader == false){
		$advance_startup_custom_css .='@media screen and (max-width:575px) {';
		$advance_startup_custom_css .='.fixed-header{';
			$advance_startup_custom_css .='position:static; box-shadow: none;';
		$advance_startup_custom_css .='} }';
	}

	$advance_startup_slider = get_theme_mod( 'advance_startup_responsive_slider',false);
	if($advance_startup_slider == true && get_theme_mod( 'advance_startup_slider_hide', false) == false){
    	$advance_startup_custom_css .='#slider{';
			$advance_startup_custom_css .='display:none;';
		$advance_startup_custom_css .='} ';
	}
    if($advance_startup_slider == true){
    	$advance_startup_custom_css .='@media screen and (max-width:575px) {';
		$advance_startup_custom_css .='#slider{';
			$advance_startup_custom_css .='display:block;';
		$advance_startup_custom_css .='} }';
	}else if($advance_startup_slider == false){
		$advance_startup_custom_css .='@media screen and (max-width:575px) {';
		$advance_startup_custom_css .='#slider{';
			$advance_startup_custom_css .='display:none;';
		$advance_startup_custom_css .='} }';
	}

	$advance_startup_slider = get_theme_mod( 'advance_startup_responsive_scroll',true);
	if($advance_startup_slider == true && get_theme_mod( 'advance_startup_enable_disable_scroll', true) == false){
    	$advance_startup_custom_css .='#scroll-top{';
			$advance_startup_custom_css .='display:none !important;';
		$advance_startup_custom_css .='} ';
	}
    if($advance_startup_slider == true){
    	$advance_startup_custom_css .='@media screen and (max-width:575px) {';
		$advance_startup_custom_css .='#scroll-top{';
			$advance_startup_custom_css .='visibility: visible !important;';
		$advance_startup_custom_css .='} }';
	}else if($advance_startup_slider == false){
		$advance_startup_custom_css .='@media screen and (max-width:575px) {';
		$advance_startup_custom_css .='#scroll-top{';
			$advance_startup_custom_css .='visibility: hidden !important;';
		$advance_startup_custom_css .='} }';
	}

	$advance_startup_sidebar = get_theme_mod( 'advance_startup_responsive_sidebar',true);
    if($advance_startup_sidebar == true){
    	$advance_startup_custom_css .='@media screen and (max-width:575px) {';
		$advance_startup_custom_css .='#sidebar{';
			$advance_startup_custom_css .='display:block;';
		$advance_startup_custom_css .='} }';
	}else if($advance_startup_sidebar == false){
		$advance_startup_custom_css .='@media screen and (max-width:575px) {';
		$advance_startup_custom_css .='#sidebar{';
			$advance_startup_custom_css .='display:none;';
		$advance_startup_custom_css .='} }';
	}

	$advance_startup_loader = get_theme_mod( 'advance_startup_responsive_preloader', true);
	if($advance_startup_loader == true && get_theme_mod( 'advance_startup_preloader_option', true) == false){
    	$advance_startup_custom_css .='#loader-wrapper{';
			$advance_startup_custom_css .='display:none;';
		$advance_startup_custom_css .='} ';
	}
    if($advance_startup_loader == true){
    	$advance_startup_custom_css .='@media screen and (max-width:575px) {';
		$advance_startup_custom_css .='#loader-wrapper{';
			$advance_startup_custom_css .='display:block;';
		$advance_startup_custom_css .='} }';
	}else if($advance_startup_loader == false){
		$advance_startup_custom_css .='@media screen and (max-width:575px) {';
		$advance_startup_custom_css .='#loader-wrapper{';
			$advance_startup_custom_css .='display:none;';
		$advance_startup_custom_css .='} }';
	}

	/*------------ Woocommerce Settings  --------------*/
	$advance_startup_top_bottom_product_button_padding = get_theme_mod('advance_startup_top_bottom_product_button_padding', 10);
	$advance_startup_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$advance_startup_custom_css .='padding-top: '.esc_attr($advance_startup_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($advance_startup_top_bottom_product_button_padding).'px;';
	$advance_startup_custom_css .='}';

	$advance_startup_left_right_product_button_padding = get_theme_mod('advance_startup_left_right_product_button_padding', 16);
	$advance_startup_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$advance_startup_custom_css .='padding-left: '.esc_attr($advance_startup_left_right_product_button_padding).'px; padding-right: '.esc_attr($advance_startup_left_right_product_button_padding).'px;';
	$advance_startup_custom_css .='}';

	$advance_startup_product_button_border_radius = get_theme_mod('advance_startup_product_button_border_radius', 30);
	$advance_startup_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$advance_startup_custom_css .='border-radius: '.esc_attr($advance_startup_product_button_border_radius).'px;';
	$advance_startup_custom_css .='}';

	$advance_startup_show_related_products = get_theme_mod('advance_startup_show_related_products',true);
	if($advance_startup_show_related_products == false){
		$advance_startup_custom_css .='.related.products{';
			$advance_startup_custom_css .='display: none;';
		$advance_startup_custom_css .='}';
	}

	$advance_startup_show_wooproducts_border = get_theme_mod('advance_startup_show_wooproducts_border', true);
	if($advance_startup_show_wooproducts_border == false){
		$advance_startup_custom_css .='.woocommerce .products li{';
			$advance_startup_custom_css .='border: none;';
		$advance_startup_custom_css .='}';
	}

	$advance_startup_top_bottom_wooproducts_padding = get_theme_mod('advance_startup_top_bottom_wooproducts_padding',0);
	$advance_startup_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$advance_startup_custom_css .='padding-top: '.esc_attr($advance_startup_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($advance_startup_top_bottom_wooproducts_padding).'px !important;';
	$advance_startup_custom_css .='}';

	$advance_startup_left_right_wooproducts_padding = get_theme_mod('advance_startup_left_right_wooproducts_padding',0);
	$advance_startup_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$advance_startup_custom_css .='padding-left: '.esc_attr($advance_startup_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($advance_startup_left_right_wooproducts_padding).'px !important;';
	$advance_startup_custom_css .='}';

	$advance_startup_wooproducts_border_radius = get_theme_mod('advance_startup_wooproducts_border_radius',0);
	$advance_startup_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$advance_startup_custom_css .='border-radius: '.esc_attr($advance_startup_wooproducts_border_radius).'px;';
	$advance_startup_custom_css .='}';

	$advance_startup_wooproducts_box_shadow = get_theme_mod('advance_startup_wooproducts_box_shadow',0);
	$advance_startup_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$advance_startup_custom_css .='box-shadow: '.esc_attr($advance_startup_wooproducts_box_shadow).'px '.esc_attr($advance_startup_wooproducts_box_shadow).'px '.esc_attr($advance_startup_wooproducts_box_shadow).'px #e4e4e4;';
	$advance_startup_custom_css .='}';

	/*------------------ Skin Option  -------------------*/
	$advance_startup_theme_lay = get_theme_mod( 'advance_startup_background_skin_mode','Transparent Background');
    if($advance_startup_theme_lay == 'With Background'){
		$advance_startup_custom_css .='.page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$advance_startup_custom_css .='background-color: #fff; padding:10px;';
		$advance_startup_custom_css .='}';
	}else if($advance_startup_theme_lay == 'Transparent Background'){
		$advance_startup_custom_css .='.page-box-single,#we_provide, .cat-posts{';
			$advance_startup_custom_css .='background-color: transparent;';
		$advance_startup_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$advance_startup_copyright_content_align = get_theme_mod('advance_startup_copyright_content_align');
	if($advance_startup_copyright_content_align != false){
		$advance_startup_custom_css .='.copyright{';
			$advance_startup_custom_css .='text-align: '.esc_attr($advance_startup_copyright_content_align).';';
		$advance_startup_custom_css .='}';
	}

	$advance_startup_footer_content_font_size = get_theme_mod('advance_startup_footer_content_font_size', 16);
	$advance_startup_custom_css .='.copyright p{';
		$advance_startup_custom_css .='font-size: '.esc_attr($advance_startup_footer_content_font_size).'px !important;';
	$advance_startup_custom_css .='}';

	$advance_startup_copyright_padding = get_theme_mod('advance_startup_copyright_padding', 15);
	$advance_startup_custom_css .='.copyright{';
		$advance_startup_custom_css .='padding-top: '.esc_attr($advance_startup_copyright_padding).'px; padding-bottom: '.esc_attr($advance_startup_copyright_padding).'px;';
	$advance_startup_custom_css .='}';

	$advance_startup_footer_widget_bg_color = get_theme_mod('advance_startup_footer_widget_bg_color');
	$advance_startup_custom_css .='#footer{';
		$advance_startup_custom_css .='background-color: '.esc_attr($advance_startup_footer_widget_bg_color).';';
	$advance_startup_custom_css .='}';

	$advance_startup_footer_widget_bg_image = get_theme_mod('advance_startup_footer_widget_bg_image');
	if($advance_startup_footer_widget_bg_image != false){
		$advance_startup_custom_css .='#footer{';
			$advance_startup_custom_css .='background: url('.esc_attr($advance_startup_footer_widget_bg_image).');';
		$advance_startup_custom_css .='}';
	}

	// scroll to top
	$advance_startup_scroll_font_size_icon = get_theme_mod('advance_startup_scroll_font_size_icon', 22);
	$advance_startup_custom_css .='#scroll-top .fas{';
		$advance_startup_custom_css .='font-size: '.esc_attr($advance_startup_scroll_font_size_icon).'px;';
	$advance_startup_custom_css .='}';

	// Slider Height 
	$advance_startup_slider_image_height = get_theme_mod('advance_startup_slider_image_height');
	$advance_startup_custom_css .='#slider img{';
		$advance_startup_custom_css .='height: '.esc_attr($advance_startup_slider_image_height).'px;';
	$advance_startup_custom_css .='}';

	// primary menu 
	if((has_nav_menu('primary')) != true){
		$advance_startup_custom_css .='@media screen and (max-width:1000px) {';
		$advance_startup_custom_css .='.main-menu{';
			$advance_startup_custom_css .='display:none;';
		$advance_startup_custom_css .='} }';
	}

	// Display Blog Post 
	$advance_startup_display_blog_page_post = get_theme_mod( 'advance_startup_display_blog_page_post','Without Box');
    if($advance_startup_display_blog_page_post == 'In Box'){
		$advance_startup_custom_css .='.page-box{';
			$advance_startup_custom_css .='border:solid 1px #262626; margin:20px 0;';
		$advance_startup_custom_css .='}';
	}

	// slider overlay
	$advance_startup_slider_overlay = get_theme_mod('advance_startup_slider_overlay', true);
	if($advance_startup_slider_overlay == false){
		$advance_startup_custom_css .='#slider img{';
			$advance_startup_custom_css .='opacity:1;';
		$advance_startup_custom_css .='}';
	} 
	$advance_startup_slider_image_overlay_color_first = get_theme_mod('advance_startup_slider_image_overlay_color_first', true);
	$advance_startup_slider_image_overlay_color_second = get_theme_mod('advance_startup_slider_image_overlay_color_second', true);
	if($advance_startup_slider_overlay != false){
		$advance_startup_custom_css .='#slider .carousel-item{';
			$advance_startup_custom_css .='background: linear-gradient(130deg, '.esc_attr($advance_startup_slider_image_overlay_color_first).' 40%, '.esc_attr($advance_startup_slider_image_overlay_color_second).' 77%);';
		$advance_startup_custom_css .='}';
	}

	// site title and tagline font size option
	$advance_startup_site_title_size_option = get_theme_mod('advance_startup_site_title_size_option', 35);{
	$advance_startup_custom_css .='.logo h1 a, .logo p a{';
	$advance_startup_custom_css .='font-size: '.esc_attr($advance_startup_site_title_size_option).'px;';
		$advance_startup_custom_css .='}';
	}

	$advance_startup_site_tagline_size_option = get_theme_mod('advance_startup_site_tagline_size_option', 12);{
	$advance_startup_custom_css .='.logo p{';
	$advance_startup_custom_css .='font-size: '.esc_attr($advance_startup_site_tagline_size_option).'px !important;';
		$advance_startup_custom_css .='}';
	}

	// woocommerce product sale settings
	$advance_startup_border_radius_product_sale = get_theme_mod('advance_startup_border_radius_product_sale',50);
	$advance_startup_custom_css .='.woocommerce span.onsale {';
		$advance_startup_custom_css .='border-radius: '.esc_attr($advance_startup_border_radius_product_sale).'% !important;';
	$advance_startup_custom_css .='}';

	$advance_startup_align_product_sale = get_theme_mod('advance_startup_align_product_sale', 'Right');
	if($advance_startup_align_product_sale == 'Right' ){
		$advance_startup_custom_css .='.woocommerce ul.products li.product .onsale{';
			$advance_startup_custom_css .=' left:auto; right:0;';
		$advance_startup_custom_css .='}';
	}elseif($advance_startup_align_product_sale == 'Left' ){
		$advance_startup_custom_css .='.woocommerce ul.products li.product .onsale{';
			$advance_startup_custom_css .=' left:0; right:auto;';
		$advance_startup_custom_css .='}';
	}

	$advance_startup_product_sale_font_size = get_theme_mod('advance_startup_product_sale_font_size',14);
	$advance_startup_custom_css .='.woocommerce span.onsale{';
		$advance_startup_custom_css .='font-size: '.esc_attr($advance_startup_product_sale_font_size).'px;';
	$advance_startup_custom_css .='}';