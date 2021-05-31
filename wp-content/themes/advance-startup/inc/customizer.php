<?php
/**
 * Advance Startup Theme Customizer
 *
 * @package advance-startup
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function advance_startup_customize_register($wp_customize) {

	//add home page setting pannel
	$wp_customize->add_panel('advance_startup_panel_id', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Settings', 'advance-startup'),
	));	

	// font array
	$advance_startup_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'advance_startup_typography', array(
    	'title'      => __( 'Typography', 'advance-startup' ),
		'priority'   => 30,
		'panel' => 'advance_startup_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'advance_startup_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_startup_paragraph_color', array(
		'label' => __('Paragraph Color', 'advance-startup'),
		'section' => 'advance_startup_typography',
		'settings' => 'advance_startup_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('advance_startup_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_startup_paragraph_font_family', array(
	    'section'  => 'advance_startup_typography',
	    'label'    => __( 'Paragraph Fonts','advance-startup'),
	    'type'     => 'select',
	    'choices'  => $advance_startup_font_array,
	));

	$wp_customize->add_setting('advance_startup_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','advance-startup'),
		'section'	=> 'advance_startup_typography',
		'setting'	=> 'advance_startup_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'advance_startup_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_startup_atag_color', array(
		'label' => __('"a" Tag Color', 'advance-startup'),
		'section' => 'advance_startup_typography',
		'settings' => 'advance_startup_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('advance_startup_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_startup_atag_font_family', array(
	    'section'  => 'advance_startup_typography',
	    'label'    => __( '"a" Tag Fonts','advance-startup'),
	    'type'     => 'select',
	    'choices'  => $advance_startup_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'advance_startup_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_startup_li_color', array(
		'label' => __('"li" Tag Color', 'advance-startup'),
		'section' => 'advance_startup_typography',
		'settings' => 'advance_startup_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('advance_startup_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_startup_li_font_family', array(
	    'section'  => 'advance_startup_typography',
	    'label'    => __( '"li" Tag Fonts','advance-startup'),
	    'type'     => 'select',
	    'choices'  => $advance_startup_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'advance_startup_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_startup_h1_color', array(
		'label' => __('H1 Color', 'advance-startup'),
		'section' => 'advance_startup_typography',
		'settings' => 'advance_startup_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('advance_startup_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_startup_h1_font_family', array(
	    'section'  => 'advance_startup_typography',
	    'label'    => __( 'H1 Fonts','advance-startup'),
	    'type'     => 'select',
	    'choices'  => $advance_startup_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('advance_startup_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_h1_font_size',array(
		'label'	=> __('H1 Font Size','advance-startup'),
		'section'	=> 'advance_startup_typography',
		'setting'	=> 'advance_startup_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'advance_startup_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_startup_h2_color', array(
		'label' => __('h2 Color', 'advance-startup'),
		'section' => 'advance_startup_typography',
		'settings' => 'advance_startup_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('advance_startup_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_startup_h2_font_family', array(
	    'section'  => 'advance_startup_typography',
	    'label'    => __( 'h2 Fonts','advance-startup'),
	    'type'     => 'select',
	    'choices'  => $advance_startup_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('advance_startup_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_h2_font_size',array(
		'label'	=> __('h2 Font Size','advance-startup'),
		'section'	=> 'advance_startup_typography',
		'setting'	=> 'advance_startup_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'advance_startup_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_startup_h3_color', array(
		'label' => __('h3 Color', 'advance-startup'),
		'section' => 'advance_startup_typography',
		'settings' => 'advance_startup_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('advance_startup_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_startup_h3_font_family', array(
	    'section'  => 'advance_startup_typography',
	    'label'    => __( 'h3 Fonts','advance-startup'),
	    'type'     => 'select',
	    'choices'  => $advance_startup_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('advance_startup_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_h3_font_size',array(
		'label'	=> __('h3 Font Size','advance-startup'),
		'section'	=> 'advance_startup_typography',
		'setting'	=> 'advance_startup_h3_font_size',
		'type'	=> 'text',
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'advance_startup_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_startup_h4_color', array(
		'label' => __('h4 Color', 'advance-startup'),
		'section' => 'advance_startup_typography',
		'settings' => 'advance_startup_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('advance_startup_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_startup_h4_font_family', array(
	    'section'  => 'advance_startup_typography',
	    'label'    => __( 'h4 Fonts','advance-startup'),
	    'type'     => 'select',
	    'choices'  => $advance_startup_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('advance_startup_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_h4_font_size',array(
		'label'	=> __('h4 Font Size','advance-startup'),
		'section'	=> 'advance_startup_typography',
		'setting'	=> 'advance_startup_h4_font_size',
		'type'	=> 'text',
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'advance_startup_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_startup_h5_color', array(
		'label' => __('h5 Color', 'advance-startup'),
		'section' => 'advance_startup_typography',
		'settings' => 'advance_startup_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('advance_startup_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_startup_h5_font_family', array(
	    'section'  => 'advance_startup_typography',
	    'label'    => __( 'h5 Fonts','advance-startup'),
	    'type'     => 'select',
	    'choices'  => $advance_startup_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('advance_startup_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_h5_font_size',array(
		'label'	=> __('h5 Font Size','advance-startup'),
		'section'	=> 'advance_startup_typography',
		'setting'	=> 'advance_startup_h5_font_size',
		'type'	=> 'text',
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'advance_startup_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_startup_h6_color', array(
		'label' => __('h6 Color', 'advance-startup'),
		'section' => 'advance_startup_typography',
		'settings' => 'advance_startup_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('advance_startup_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_startup_h6_font_family', array(
	    'section'  => 'advance_startup_typography',
	    'label'    => __( 'h6 Fonts','advance-startup'),
	    'type'     => 'select',
	    'choices'  => $advance_startup_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('advance_startup_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_h6_font_size',array(
		'label'	=> __('h6 Font Size','advance-startup'),
		'section'	=> 'advance_startup_typography',
		'setting'	=> 'advance_startup_h6_font_size',
		'type'	=> 'text',
	));

  	$wp_customize->add_setting('advance_startup_background_skin_mode',array(
        'default' => 'Transparent Background',
        'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control('advance_startup_background_skin_mode',array(
        'type' => 'select',
        'label' => __('Background Type','advance-startup'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','advance-startup'),
            'Transparent Background' => __('Transparent Background','advance-startup'),
        ),
	) );

	// woocommerce section
	$wp_customize->add_setting('advance_startup_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','advance-startup'),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_setting('advance_startup_show_wooproducts_border',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','advance-startup'),
       'section' => 'woocommerce_product_catalog',
    ));

    $wp_customize->add_setting( 'advance_startup_wooproducts_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'advance_startup_sanitize_choices',
	) );
	$wp_customize->add_control( 'advance_startup_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'advance-startup' ),
		'section'  => 'woocommerce_product_catalog',
		'type'     => 'select',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	)  );

	$wp_customize->add_setting('advance_startup_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'    => 'advance_startup_sanitize_float',
	));	
	$wp_customize->add_control('advance_startup_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','advance-startup'),
		'section'	=> 'woocommerce_product_catalog',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_startup_top_bottom_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_startup_sanitize_float',
	));
	$wp_customize->add_control( 'advance_startup_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','advance-startup' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_startup_left_right_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_startup_sanitize_float',
	));
	$wp_customize->add_control( 'advance_startup_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','advance-startup' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',
	));

	$wp_customize->add_setting( 'advance_startup_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_startup_sanitize_number_range',
	));
	$wp_customize->add_control('advance_startup_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','advance-startup' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting( 'advance_startup_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_startup_sanitize_number_range',
	));
	$wp_customize->add_control('advance_startup_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','advance-startup' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_section('advance_startup_product_button_section', array(
		'title'    => __('Product Button Settings', 'advance-startup'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting( 'advance_startup_top_bottom_product_button_padding',array(
		'default' => 10,
		'sanitize_callback'    => 'advance_startup_sanitize_float',
	));
	$wp_customize->add_control('advance_startup_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','advance-startup' ),
		'section' => 'advance_startup_product_button_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'advance_startup_left_right_product_button_padding',array(
		'default' => 16,
		'sanitize_callback'    => 'advance_startup_sanitize_float',
	));
	$wp_customize->add_control('advance_startup_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','advance-startup' ),
		'section' => 'advance_startup_product_button_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'advance_startup_product_button_border_radius',array(
		'default' => 30,
		'sanitize_callback'    => 'advance_startup_sanitize_number_range',
	));
	$wp_customize->add_control('advance_startup_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','advance-startup' ),
		'section' => 'advance_startup_product_button_section',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_section('advance_startup_product_sale_section', array(
		'title'    => __('Product Sale Button Settings', 'advance-startup'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('advance_startup_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control('advance_startup_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','advance-startup'),
        'section' => 'advance_startup_product_sale_section',
        'choices' => array(
            'Right' => __('Right','advance-startup'),
            'Left' => __('Left','advance-startup'),
        ),
	) );

	$wp_customize->add_setting( 'advance_startup_border_radius_product_sale',array(
		'default' => 50,
		'sanitize_callback'	=> 'advance_startup_sanitize_float',
	));
	$wp_customize->add_control('advance_startup_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','advance-startup'),
        'section'  => 'advance_startup_product_sale_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('advance_startup_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'advance_startup_sanitize_float'
	));
	$wp_customize->add_control('advance_startup_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','advance-startup'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_startup_product_sale_section',
		'type'=> 'number'
	));

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'advance_startup_theme_color_option', array( 
		'panel' => 'advance_startup_panel_id', 
		'title' => esc_html__( 'Theme Color Option', 'advance-startup' ) )
	);

  	$wp_customize->add_setting( 'advance_startup_theme_color_first', array(
	    'default' => '#df2b23',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_startup_theme_color_first', array(
  		'label' => __('First Color Option', 'advance-startup'),
  		'description' => __('One can change complete theme color on just one click.', 'advance-startup'),
	    'section' => 'advance_startup_theme_color_option',
	    'settings' => 'advance_startup_theme_color_first',
  	)));

  	$wp_customize->add_setting( 'advance_startup_theme_color_second', array(
	    'default' => '#906b00 ',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_startup_theme_color_second', array(
  		'label' => __('Second Color Option', 'advance-startup'),
  		'description' => __('One can change complete theme color on just one click.', 'advance-startup'),
	    'section' => 'advance_startup_theme_color_option',
	    'settings' => 'advance_startup_theme_color_second',
  	)));

	//Layouts
	$wp_customize->add_section('advance_startup_left_right', array(
		'title'    => __('Layout Settings', 'advance-startup'),
		'priority' => null,
		'panel'    => 'advance_startup_panel_id',
	));

	$wp_customize->add_setting('advance_startup_preloader_option',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','advance-startup'),
       'section' => 'advance_startup_left_right'
    ));

    $wp_customize->add_setting( 'advance_startup_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_startup_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Woocommerce Page Sidebar','advance-startup'),
		'section' => 'advance_startup_left_right'
    ));

	$wp_customize->add_setting( 'advance_startup_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_startup_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','advance-startup'),
		'section' => 'advance_startup_left_right'
    ));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('advance_startup_layout_options', array(
		'default'           => 'Right Sidebar', 
		'sanitize_callback' => 'advance_startup_sanitize_choices',
	));
	$wp_customize->add_control('advance_startup_layout_options',array(
		'type'           => 'radio',
		'label'          => __('Change Layouts', 'advance-startup'),
		'section'        => 'advance_startup_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-startup'),
			'Right Sidebar' => __('Right Sidebar', 'advance-startup'),
			'One Column'    => __('One Column', 'advance-startup'),
			'Grid Layout'   => __('Grid Layout', 'advance-startup')
		),
	));

	$wp_customize->add_setting('advance_startup_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'advance_startup_sanitize_choices',
	));
	$wp_customize->add_control('advance_startup_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'advance-startup'),
		'section'        => 'advance_startup_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-startup'),
			'Right Sidebar' => __('Right Sidebar', 'advance-startup'),
			'One Column'    => __('One Column', 'advance-startup'),
		),
	));

	$wp_customize->add_setting('advance_startup_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'advance_startup_sanitize_choices',
	));
	$wp_customize->add_control('advance_startup_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'advance-startup'),
		'section'        => 'advance_startup_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-startup'),
			'Right Sidebar' => __('Right Sidebar', 'advance-startup'),
			'One Column'    => __('One Column', 'advance-startup'),
		),
	));
	
	$wp_customize->add_setting('advance_startup_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control('advance_startup_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','advance-startup'),
        'description' => __('Here you can change the Width layout. ','advance-startup'),
        'section' => 'advance_startup_left_right',
        'choices' => array(
            'Default' => __('Default','advance-startup'),
            'Container' => __('Container','advance-startup'),
            'Box Container' => __('Box Container','advance-startup'),
        ),
	) );

	// Button
	$wp_customize->add_section( 'advance_startup_theme_button', array(
		'title' => __('Button Option','advance-startup'),
		'panel' => 'advance_startup_panel_id',
	));

	$wp_customize->add_setting('advance_startup_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'    => 'advance_startup_sanitize_float',
	));
	$wp_customize->add_control('advance_startup_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','advance-startup'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_startup_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_startup_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'    => 'advance_startup_sanitize_float',
	));
	$wp_customize->add_control('advance_startup_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','advance-startup'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_startup_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'advance_startup_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'    => 'advance_startup_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_startup_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','advance-startup' ),
		'section'     => 'advance_startup_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Top Bar
	$wp_customize->add_section('advance_startup_topbar',array(
		'title'	=> __('Topbar Section','advance-startup'),
		'description'	=> __('Add topbar content','advance-startup'),
		'priority'	=> null,
		'panel' => 'advance_startup_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'advance_startup_display_topbar',array(
		'default' => true,
      	'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_startup_display_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Topbar','advance-startup' ),
        'section' => 'advance_startup_topbar'
    ));

    //Sticky Header
	$wp_customize->add_setting( 'advance_startup_sticky_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_startup_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','advance-startup' ),
        'section' => 'advance_startup_topbar'
    ));

	$wp_customize->add_setting('advance_startup_mail1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email',
	));
	$wp_customize->add_control('advance_startup_mail1',array(
		'label'	=> __('Mail Address','advance-startup'),
		'section'	=> 'advance_startup_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('advance_startup_phone1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'advance_startup_sanitize_phone_number',
	));
	$wp_customize->add_control('advance_startup_phone1',array(
		'label'	=> __('Phone Number','advance-startup'),
		'section'	=> 'advance_startup_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('advance_startup_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_startup_time',array(
		'label'	=> __('Timing Text','advance-startup'),
		'section'	=> 'advance_startup_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('advance_startup_top_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('advance_startup_top_button_text',array(
		'label'	=> __('Button text','advance-startup'),
		'section'	=> 'advance_startup_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('advance_startup_top_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_startup_top_button_url',array(
		'label'	=> __('Add Link','advance-startup'),
		'section'	=> 'advance_startup_topbar',
		'setting'	=> 'advance_startup_top_button_url',
		'type'	=> 'url'
	));

	// Social Icons
	$wp_customize->add_section('advance_startup_social_icons',array(
		'title'	=> __('Social Icons','advance-startup'),
		'description'	=> __('Add topbar content','advance-startup'),
		'priority'	=> null,
		'panel' => 'advance_startup_panel_id',
	));

	$wp_customize->add_setting('advance_startup_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_startup_facebook_url',array(
		'label'	=> __('Add Facebook link','advance-startup'),
		'section'	=> 'advance_startup_social_icons',
		'setting'	=> 'advance_startup_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('advance_startup_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_startup_twitter_url',array(
		'label'	=> __('Add Twitter link','advance-startup'),
		'section'	=> 'advance_startup_social_icons',
		'setting'	=> 'advance_startup_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('advance_startup_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('advance_startup_youtube_url',array(
		'label'	=> __('Add Youtube link','advance-startup'),
		'section'	=> 'advance_startup_social_icons',
		'setting'	=> 'advance_startup_youtube_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('advance_startup_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_startup_linkedin_url',array(
		'label'	=> __('Add Linkedin link','advance-startup'),
		'section'	=> 'advance_startup_social_icons',
		'setting'	=> 'advance_startup_linkedin_url',
		'type'	=> 'url'
	));

	//Slider
	$wp_customize->add_section( 'advance_startup_slider' , array(
    	'title'      => __( 'Slider Settings', 'advance-startup' ),
		'priority'   => null,
		'panel' => 'advance_startup_panel_id'
	) );

	$wp_customize->add_setting('advance_startup_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','advance-startup'),
       'section' => 'advance_startup_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'advance_startup_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'advance_startup_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'advance_startup_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'advance-startup' ),
			'description'	=> __('Size of image should be 1500 x 600','advance-startup'),
			'section'  => 'advance_startup_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('advance_startup_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','advance-startup'),
		'description'    => __('This option will add colors over the slider.','advance-startup'),
       'section' => 'advance_startup_slider'
    ));

    $wp_customize->add_setting('advance_startup_slider_image_overlay_color_first', array(
		'default'           => '#906b00',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_startup_slider_image_overlay_color_first', array(
		'label'    => __('Home Page Slider Overlay Color First', 'advance-startup'),
		'section'  => 'advance_startup_slider',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','advance-startup'),
		'settings' => 'advance_startup_slider_image_overlay_color_first',
	)));

	$wp_customize->add_setting('advance_startup_slider_image_overlay_color_second', array(
		'default'           => '#df2b23',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_startup_slider_image_overlay_color_second', array(
		'label'    => __('Home Page Slider Overlay Color Second', 'advance-startup'),
		'section'  => 'advance_startup_slider',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','advance-startup'),
		'settings' => 'advance_startup_slider_image_overlay_color_second',
	)));

	//content layout
    $wp_customize->add_setting('advance_startup_slider_content_alignment',array(
    	'default' => 'Center',
        'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control('advance_startup_slider_content_alignment',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','advance-startup'),
        'section' => 'advance_startup_slider',
        'choices' => array(
            'Center' => __('Center','advance-startup'),
            'Left' => __('Left','advance-startup'),
            'Right' => __('Right','advance-startup'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'advance_startup_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'    => 'advance_startup_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_startup_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','advance-startup' ),
		'section'     => 'advance_startup_slider',
		'type'        => 'number',
		'settings'    => 'advance_startup_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('advance_startup_slider_image_opacity',array(
      'default'              => 0.4,
      'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control( 'advance_startup_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','advance-startup' ),
	'section'     => 'advance_startup_slider',
	'type'        => 'select',
	'settings'    => 'advance_startup_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','advance-startup'),
		'0.1' =>  esc_attr('0.1','advance-startup'),
		'0.2' =>  esc_attr('0.2','advance-startup'),
		'0.3' =>  esc_attr('0.3','advance-startup'),
		'0.4' =>  esc_attr('0.4','advance-startup'),
		'0.5' =>  esc_attr('0.5','advance-startup'),
		'0.6' =>  esc_attr('0.6','advance-startup'),
		'0.7' =>  esc_attr('0.7','advance-startup'),
		'0.8' =>  esc_attr('0.8','advance-startup'),
		'0.9' =>  esc_attr('0.9','advance-startup')
	),
	));

	$wp_customize->add_setting( 'advance_startup_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'    => 'advance_startup_sanitize_number_range',
	));
	$wp_customize->add_control( 'advance_startup_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','advance-startup' ),
		'section' => 'advance_startup_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('advance_startup_slider_image_height',array(
		'default'=> __('550','advance-startup'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_slider_image_height',array(
		'label'	=> __('Slider Image Height','advance-startup'),
		'section'=> 'advance_startup_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_startup_slider_button',array(
		'default'=> __('READ MORE','advance-startup'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_slider_button',array(
		'label'	=> __('Slider Button','advance-startup'),
		'section'=> 'advance_startup_slider',
		'type'=> 'text'
	));

	//We Provide
	$wp_customize->add_section('advance_startup_category',array(
		'title'	=> __('What We Provide Section','advance-startup'),
		'description'	=> __('Add  section below.','advance-startup'),
		'panel' => 'advance_startup_panel_id',
	));

	$wp_customize->add_setting('advance_startup_title',array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field',
   	));
   	$wp_customize->add_control('advance_startup_title',array(
	    'label' => __('Section Title','advance-startup'),
	    'section' => 'advance_startup_category',
	    'type'  => 'text'
   	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('advance_startup_we_provide_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'advance_startup_sanitize_choices',
	));	
	$wp_customize->add_control('advance_startup_we_provide_category',array(
		'type'    => 'select',
		'choices' => $cat_post,		
		'label' => __('Select Category to display post','advance-startup'),
		'description'	=> __('Size of image should be 370 x 240','advance-startup'),
		'section' => 'advance_startup_category',
	));

	//404 Page Setting
	$wp_customize->add_section('advance_startup_404_page_setting',array(
		'title'	=> __('404 Page','advance-startup'),
		'panel' => 'advance_startup_panel_id',
	));	

	$wp_customize->add_setting('advance_startup_title_404_page',array(
		'default'=> __('404 Not Found', 'advance-startup'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_title_404_page',array(
		'label'	=> __('404 Page Title','advance-startup'),
		'section'=> 'advance_startup_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_startup_content_404_page',array(
		'default'=> __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.', 'advance-startup'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_content_404_page',array(
		'label'	=> __('404 Page Content','advance-startup'),
		'section'=> 'advance_startup_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_startup_button_404_page',array(
		'default'=> __('Back to Home Page', 'advance-startup'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_button_404_page',array(
		'label'	=> __('404 Page Button','advance-startup'),
		'section'=> 'advance_startup_404_page_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('advance_startup_responsive_setting',array(
		'title'	=> __('Responsive Settings','advance-startup'),
		'panel' => 'advance_startup_panel_id',
	));

    $wp_customize->add_setting('advance_startup_responsive_sticky_header',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_responsive_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Sticky Header','advance-startup'),
       'section' => 'advance_startup_responsive_setting'
    ));

    $wp_customize->add_setting('advance_startup_responsive_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','advance-startup'),
       'section' => 'advance_startup_responsive_setting'
    ));

    $wp_customize->add_setting('advance_startup_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','advance-startup'),
       'section' => 'advance_startup_responsive_setting'
    ));

    $wp_customize->add_setting('advance_startup_responsive_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_responsive_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Sidebar','advance-startup'),
       'section' => 'advance_startup_responsive_setting'
    ));

    $wp_customize->add_setting('advance_startup_responsive_preloader',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_responsive_preloader',array(
       'type' => 'checkbox',
       'label' => __('Preloader','advance-startup'),
       'section' => 'advance_startup_responsive_setting'
    ));

	//Blog Post
	$wp_customize->add_section('advance_startup_blog_post',array(
		'title'	=> __('Blog Page Settings','advance-startup'),
		'panel' => 'advance_startup_panel_id',
	));	

	$wp_customize->add_setting('advance_startup_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','advance-startup'),
       'section' => 'advance_startup_blog_post'
    ));

    $wp_customize->add_setting('advance_startup_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','advance-startup'),
       'section' => 'advance_startup_blog_post'
    ));

    $wp_customize->add_setting('advance_startup_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','advance-startup'),
       'section' => 'advance_startup_blog_post'
    ));

    $wp_customize->add_setting('advance_startup_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','advance-startup'),
       'section' => 'advance_startup_blog_post'
    ));

    $wp_customize->add_setting('advance_startup_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','advance-startup'),
       'section' => 'advance_startup_blog_post'
    ));

    $wp_customize->add_setting('advance_startup_blog_post_description_option',array(
    	'default'   => 'Excerpt Content', 
        'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control('advance_startup_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','advance-startup'),
        'section' => 'advance_startup_blog_post',
        'choices' => array(
            'No Content' => __('No Content','advance-startup'),
            'Excerpt Content' => __('Excerpt Content','advance-startup'),
            'Full Content' => __('Full Content','advance-startup'),
        ),
	) );

    $wp_customize->add_setting( 'advance_startup_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'    => 'advance_startup_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_startup_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','advance-startup' ),
		'section'     => 'advance_startup_blog_post',
		'type'        => 'number',
		'settings'    => 'advance_startup_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'advance_startup_post_suffix_option', array(
		'default'   => __('...','advance-startup'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'advance_startup_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','advance-startup' ),
		'section'     => 'advance_startup_blog_post',
		'type'        => 'text',
		'settings'    => 'advance_startup_post_suffix_option',
	) );

	$wp_customize->add_setting('advance_startup_button_text',array(
		'default'=> __('READ MORE','advance-startup'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_button_text',array(
		'label'	=> __('Add Button Text','advance-startup'),
		'section'=> 'advance_startup_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'advance_startup_metabox_separator_blog_post', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'advance_startup_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','advance-startup' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'advance-startup' ),
        ),
		'section'     => 'advance_startup_blog_post',
		'type'        => 'text',
		'settings'    => 'advance_startup_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('advance_startup_display_blog_page_post',array(
        'default' => 'Without Box',
        'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control('advance_startup_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','advance-startup'),
        'section' => 'advance_startup_blog_post',
        'choices' => array(
            'In Box' => __('In Box','advance-startup'),
            'Without Box' => __('Without Box','advance-startup'),
        ),
	) );

	$wp_customize->add_setting('advance_startup_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','advance-startup'),
       'section' => 'advance_startup_blog_post'
    ));

	//no Result Found
	$wp_customize->add_section('advance_startup_noresult_found',array(
		'title'	=> __('No Result Found','advance-startup'),
		'panel' => 'advance_startup_panel_id',
	));	

	$wp_customize->add_setting('advance_startup_nosearch_found_title',array(
		'default'=> __('Nothing Found','advance-startup'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','advance-startup'),
		'section'=> 'advance_startup_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_startup_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','advance-startup'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_startup_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','advance-startup'),
		'section'=> 'advance_startup_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_startup_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_startup_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','advance-startup'),
       'section' => 'advance_startup_noresult_found'
    ));

	//Footer
	$wp_customize->add_section('advance_startup_footer_section', array(
		'title'       => __('Footer Text', 'advance-startup'),
		'priority'    => null,
		'panel'       => 'advance_startup_panel_id',
	));

	$wp_customize->add_setting('advance_startup_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'advance_startup_sanitize_choices',
    ));
    $wp_customize->add_control('advance_startup_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'advance-startup'),
        'section'     => 'advance_startup_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'advance-startup'),
        'choices' => array(
            '1'     => __('One', 'advance-startup'),
            '2'     => __('Two', 'advance-startup'),
            '3'     => __('Three', 'advance-startup'),
            '4'     => __('Four', 'advance-startup')
        ),
    ));

    $wp_customize->add_setting('advance_startup_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_startup_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'advance-startup'),
		'section'  => 'advance_startup_footer_section',
	)));

	$wp_customize->add_setting('advance_startup_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'advance_startup_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','advance-startup'),
        'section' => 'advance_startup_footer_section'
	)));

	$wp_customize->add_setting('advance_startup_footer_copy', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_startup_footer_copy', array(
		'label'   => __('Copyright Text', 'advance-startup'),
		'section' => 'advance_startup_footer_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('advance_startup_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control('advance_startup_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','advance-startup'),
        'section' => 'advance_startup_footer_section',
        'choices' => array(
            'left' => __('Left','advance-startup'),
            'right' => __('Right','advance-startup'),
            'center' => __('Center','advance-startup'),
        ),
	) );

	$wp_customize->add_setting('advance_startup_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'    => 'advance_startup_sanitize_float',
	));
	$wp_customize->add_control('advance_startup_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','advance-startup' ),
		'section'=> 'advance_startup_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('advance_startup_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'    => 'advance_startup_sanitize_float',
	));
	$wp_customize->add_control('advance_startup_copyright_padding',array(
		'label'	=> __('Copyright Padding','advance-startup'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_startup_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_startup_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'advance_startup_sanitize_checkbox'
	));
	$wp_customize->add_control('advance_startup_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','advance-startup'),
      	'section' => 'advance_startup_footer_section',
	));

	$wp_customize->add_setting('advance_startup_scroll_setting',array(
        'default' => 'Right',
        'sanitize_callback' => 'advance_startup_sanitize_choices'
	));
	$wp_customize->add_control('advance_startup_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','advance-startup'),
        'section' => 'advance_startup_footer_section',
        'choices' => array(
            'Left' => __('Left','advance-startup'),
            'Right' => __('Right','advance-startup'),
            'Center' => __('Center','advance-startup'),
        ),
	) );

	$wp_customize->add_setting('advance_startup_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'    => 'advance_startup_sanitize_float',
	));
	$wp_customize->add_control('advance_startup_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','advance-startup'),
		'section'=> 'advance_startup_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	)	);
	
}
add_action('customize_register', 'advance_startup_customize_register');

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Advance_Startup_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if (is_null($instance)) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action('customize_register', array($this, 'sections'));

		// Register scripts and styles for the conadvance_startup_Customizetrols.
		add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections($manager) {

		// Load custom sections.
		load_template(trailingslashit(get_template_directory()).'/inc/section-pro.php');

		// Register custom section types.
		$manager->register_section_type('Advance_Startup_Customize_Section_Pro');

		// Register sections.
		$manager->add_section(
			new Advance_Startup_Customize_Section_Pro(
				$manager,
				'advance_startup_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__('Startup Pro Theme', 'advance-startup'),
					'pro_text' => esc_html__('Go Pro', 'advance-startup'),
					'pro_url'  => esc_url('https://www.themeshopy.com/themes/startup-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script('advance-startup-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/js/customize-controls.js', array('customize-controls'));
		wp_enqueue_style('advance-startup-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');
	}
}

// Doing this customizer thang!
Advance_Startup_Customize::get_instance();