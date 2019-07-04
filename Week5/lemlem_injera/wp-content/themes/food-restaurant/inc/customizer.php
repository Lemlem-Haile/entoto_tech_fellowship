<?php
/**
 * Food Restaurant Theme Customizer
 *
 * @package Food Restaurant
 */

/**
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function food_restaurant_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'food_restaurant_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'LT Settings', 'food-restaurant' ),
	    'description' => __( 'Description of what this panel does.', 'food-restaurant' ),
	) );

	$wp_customize->add_section( 'food_restaurant_left_right' , array(
    	'title'      => __( 'General Settings', 'food-restaurant' ),
		'priority'   => 30,
		'panel' => 'food_restaurant_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('food_restaurant_theme_options',array(
	        'default' => __( 'Right Sidebar', 'food-restaurant' ),
	        'sanitize_callback' => 'food_restaurant_sanitize_choices'	        
	    )
    );

	$wp_customize->add_control('food_restaurant_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Do you want this section', 'food-restaurant' ),
	        'section' => 'food_restaurant_left_right',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','food-restaurant'),
	            'Right Sidebar' => __('Right Sidebar','food-restaurant'),
	            'One Column' => __('One Column','food-restaurant'),
	            'Three Columns' => __('Three Columns','food-restaurant'),
	            'Four Columns' => __('Four Columns','food-restaurant'),
	            'Grid Layout' => __('Grid Layout','food-restaurant')
	        ),
	    )
    );

	$font_array = array(
    '' => __( 'No Fonts', 'food-restaurant' ),
    'Abril Fatface' => __( 'Abril Fatface', 'food-restaurant' ),
    'Acme' => __( 'Acme', 'food-restaurant' ),
    'Anton' => __( 'Anton', 'food-restaurant' ),
    'Architects Daughter' => __( 'Architects Daughter', 'food-restaurant' ),
    'Arimo' => __( 'Arimo', 'food-restaurant' ),
    'Arsenal' => __( 'Arsenal', 'food-restaurant' ),
    'Arvo' => __( 'Arvo', 'food-restaurant' ),
    'Alegreya' => __( 'Alegreya', 'food-restaurant' ),
    'Alfa Slab One' => __( 'Alfa Slab One', 'food-restaurant' ),
    'Averia Serif Libre' => __( 'Averia Serif Libre', 'food-restaurant' ),
    'Bangers' => __( 'Bangers', 'food-restaurant' ),
    'Boogaloo' => __( 'Boogaloo', 'food-restaurant' ),
    'Bad Script' => __( 'Bad Script', 'food-restaurant' ),
    'Bitter' => __( 'Bitter', 'food-restaurant' ),
    'Bree Serif' => __( 'Bree Serif', 'food-restaurant' ),
    'BenchNine' => __( 'BenchNine', 'food-restaurant' ),
    'Cabin' => __( 'Cabin', 'food-restaurant' ),
    'Cardo' => __( 'Cardo', 'food-restaurant' ),
    'Courgette' => __( 'Courgette', 'food-restaurant' ),
    'Cherry Swash' => __( 'Cherry Swash', 'food-restaurant' ),
    'Cormorant Garamond' => __( 'Cormorant Garamond', 'food-restaurant' ),
    'Crimson Text' => __( 'Crimson Text', 'food-restaurant' ),
    'Cuprum' => __( 'Cuprum', 'food-restaurant' ),
    'Cookie' => __( 'Cookie', 'food-restaurant' ),
    'Chewy' => __( 'Chewy', 'food-restaurant' ),
    'Days One' => __( 'Days One', 'food-restaurant' ),
    'Dosis' => __( 'Dosis', 'food-restaurant' ),
    'Droid Sans' => __( 'Droid Sans', 'food-restaurant' ),
    'Economica' => __( 'Economica', 'food-restaurant' ),
	'Fredoka One' => __( 'Fredoka One', 'food-restaurant' ),
    'Fjalla One' => __( 'Fjalla One', 'food-restaurant' ),
    'Francois One' => __( 'Francois One', 'food-restaurant' ),
    'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'food-restaurant' ),
    'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'food-restaurant' ),
    'Great Vibes' => __( 'Great Vibes', 'food-restaurant' ),
    'Handlee' => __( 'Handlee', 'food-restaurant' ),
    'Hammersmith One' => __( 'Hammersmith One', 'food-restaurant' ),
    'Inconsolata' => __( 'Inconsolata', 'food-restaurant' ),
    'Indie Flower' => __( 'Indie Flower', 'food-restaurant' ),
    'IM Fell English SC' => __( 'IM Fell English SC', 'food-restaurant' ),
    'Julius Sans One' => __( 'Julius Sans One', 'food-restaurant' ),
    'Josefin Slab' => __( 'Josefin Slab', 'food-restaurant' ),
    'Josefin Sans' => __( 'Josefin Sans', 'food-restaurant' ),
    'Kanit' => __( 'Kanit', 'food-restaurant' ),
    'Lobster' => __( 'Lobster', 'food-restaurant' ),
    'Lato' => __( 'Lato', 'food-restaurant' ),
    'Lora' => __( 'Lora', 'food-restaurant' ),
    'Libre Baskerville' => __( 'Libre Baskerville', 'food-restaurant' ),
    'Lobster Two' => __( 'Lobster Two', 'food-restaurant' ),
    'Merriweather' => __( 'Merriweather', 'food-restaurant' ),
    'Monda' => __( 'Monda', 'food-restaurant' ),
    'Montserrat' => __( 'Montserrat', 'food-restaurant' ),
    'Muli' => __( 'Muli', 'food-restaurant' ),
    'Marck Script' => __( 'Marck Script', 'food-restaurant' ),
    'Noto Serif' => __( 'Noto Serif', 'food-restaurant' ),
    'Open Sans' => __( 'Open Sans', 'food-restaurant' ),
    'Overpass' => __( 'Overpass', 'food-restaurant' ),
    'Overpass Mono' => __( 'Overpass Mono', 'food-restaurant' ),
    'Oxygen' => __( 'Oxygen', 'food-restaurant' ),
    'Orbitron' => __( 'Orbitron', 'food-restaurant' ),
    'Patua One' => __( 'Patua One', 'food-restaurant' ),
    'Pacifico' => __( 'Pacifico', 'food-restaurant' ),
    'Padauk' => __( 'Padauk', 'food-restaurant' ),
    'Playball' => __( 'Playball', 'food-restaurant' ),
    'Playfair Display' => __( 'Playfair Display', 'food-restaurant' ),
    'PT Sans' => __( 'PT Sans', 'food-restaurant' ),
    'Philosopher' => __( 'Philosopher', 'food-restaurant' ),
    'Permanent Marker' => __( 'Permanent Marker', 'food-restaurant' ),
    'Poiret One' => __( 'Poiret One', 'food-restaurant' ),
    'Quicksand' => __( 'Quicksand', 'food-restaurant' ),
    'Quattrocento Sans' => __( 'Quattrocento Sans', 'food-restaurant' ),
    'Raleway' => __( 'Raleway', 'food-restaurant' ),
    'Rubik' => __( 'Rubik', 'food-restaurant' ),
    'Rokkitt' => __( 'Rokkitt', 'food-restaurant' ),
    'Russo One' => __( 'Russo One', 'food-restaurant' ),
    'Righteous' => __( 'Righteous', 'food-restaurant' ),
    'Slabo' => __( 'Slabo', 'food-restaurant' ),
    'Source Sans Pro' => __( 'Source Sans Pro', 'food-restaurant' ),
    'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'food-restaurant'),
    'Shadows Into Light' => __( 'Shadows Into Light', 'food-restaurant' ),
    'Sacramento' => __( 'Sacramento', 'food-restaurant' ),
    'Shrikhand' => __( 'Shrikhand', 'food-restaurant' ),
    'Tangerine' => __( 'Tangerine', 'food-restaurant' ),
    'Ubuntu' => __( 'Ubuntu', 'food-restaurant' ),
    'VT323' => __( 'VT323', 'food-restaurant' ),
    'Varela Round' => __( 'Varela Round', 'food-restaurant' ),
    'Vampiro One' => __( 'Vampiro One','food-restaurant' ),
    'Vollkorn' => __( 'Vollkorn', 'food-restaurant' ),
    'Volkhov' => __( 'Volkhov','food-restaurant' ),
    'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz','food-restaurant' )
    );

	//Topbar section
	$wp_customize->add_section('food_restaurant_topbar',array(
		'title'	=> __('Topbar','food-restaurant'),
		'description'	=> __('Add Topbar Content here','food-restaurant'),
		'priority'	=> null,
		'panel' => 'food_restaurant_panel_id',
	));
	
	// This is Logo Tag Color picker setting
	$wp_customize->add_setting( 'food_restaurant_logo_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_restaurant_logo_atag_color', array(
		'label' => __('Logo', 'food-restaurant'),
		'section' => 'food_restaurant_topbar',
		'settings' => 'food_restaurant_logo_atag_color',
	)));

	//This is logo FontFamily picker setting
	$wp_customize->add_setting('food_restaurant_logo_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_restaurant_sanitize_choices'
	));
	$wp_customize->add_control('food_restaurant_logo_font_family', array(
	    'section'  => 'food_restaurant_topbar',
	    'label'    => __( 'Logo Font','food-restaurant'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('food_restaurant_logo_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('food_restaurant_logo_font_size',array(
		'label'	=> __('Logo Font Size','food-restaurant'),
		'section'	=> 'food_restaurant_topbar',
		'setting'	=> 'food_restaurant_logo_font_size',
		'type'	=> 'text'
	));
	// This is Description Color picker setting
	$wp_customize->add_setting( 'food_restaurant_description_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_restaurant_description_color', array(
		'label' => __('Description Color', 'food-restaurant'),
		'section' => 'food_restaurant_topbar',
		'settings' => 'food_restaurant_description_color',
	)));

	//This is Description FontFamily picker setting
	$wp_customize->add_setting('food_restaurant_description_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_restaurant_sanitize_choices'
	));
	$wp_customize->add_control('food_restaurant_description_font_family', array(
	    'section'  => 'food_restaurant_topbar',
	    'label'    => __( 'Description Fonts','food-restaurant'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('food_restaurant_description_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('food_restaurant_description_font_size',array(
		'label'	=> __('Description Font Size','food-restaurant'),
		'section'	=> 'food_restaurant_topbar',
		'setting'	=> 'food_restaurant_description_font_size',
		'type'	=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'food_restaurant_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'food-restaurant' ),
		'priority'   => null,
		'panel' => 'food_restaurant_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

	// Add color scheme setting and control.
	$wp_customize->add_setting( 'food_restaurant_slidersettings-page-' . $count, array(
		'default'           => '',
		'sanitize_callback' => 'absint'
	) );

	$wp_customize->add_control( 'food_restaurant_slidersettings-page-' . $count, array(
		'label'    => __( 'Select Slide Image Page', 'food-restaurant' ),
		'section'  => 'food_restaurant_slidersettings',
		'type'     => 'dropdown-pages'
	) );

	// This is slider title Color picker setting
	$wp_customize->add_setting( 'food_restaurant_slider_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_restaurant_slider_heading_color', array(
		'label' => __('Title Color', 'food-restaurant'),
		'section' => 'food_restaurant_slidersettings',
		'settings' => 'food_restaurant_slider_heading_color',
	)));

	//This is slider FontFamily picker setting
	$wp_customize->add_setting('food_restaurant_slider_heading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_restaurant_sanitize_choices'
	));
	$wp_customize->add_control('food_restaurant_slider_heading_font_family', array(
	    'section'  => 'food_restaurant_slidersettings',
	    'label'    => __( 'Title Fonts','food-restaurant'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is slider FontSize setting
	$wp_customize->add_setting('food_restaurant_slider_heading_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('food_restaurant_slider_heading_font_size',array(
		'label'	=> __('Title Font Size','food-restaurant'),
		'section'	=> 'food_restaurant_slidersettings',
		'setting'	=> 'food_restaurant_slider_heading_font_size',
		'type'	=> 'text'
	));

	// This is Button Color picker setting

	$wp_customize->add_setting( 'food_restaurant_slider_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_restaurant_slider_atag_color', array(
		'label' => __('Button Color', 'food-restaurant'),
		'section' => 'food_restaurant_slidersettings',
		'settings' => 'food_restaurant_slider_atag_color',
	)));

	//This is Button FontFamily picker setting

	$wp_customize->add_setting('food_restaurant_slider_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_restaurant_sanitize_choices'
	));
	$wp_customize->add_control('food_restaurant_slider_atag_font_family', array(
	    'section'  => 'food_restaurant_slidersettings',
	    'label'    => __( 'Button Fonts','food-restaurant'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is button FontSize setting
	
	$wp_customize->add_setting('food_restaurant_slider_atag_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('food_restaurant_slider_atag_font_size',array(
		'label'	=> __('Button Font Size','food-restaurant'),
		'section'	=> 'food_restaurant_slidersettings',
		'setting'	=> 'food_restaurant_slider_atag_font_size',
		'type'	=> 'text'
	));

	}
	
	//Our Product
	$wp_customize->add_section('food_restaurant_product',array(
		'title'	=> __('Food Products','food-restaurant'),
		'description'=> __('This section will appear below the slider.','food-restaurant'),
		'panel' => 'food_restaurant_panel_id',
	));

	$wp_customize->add_setting('food_restaurant_product_sec_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('food_restaurant_product_sec_title',array(
		'label'	=> __('Title','food-restaurant'),
		'section'	=> 'food_restaurant_product',
		'setting'	=> 'food_restaurant_product_sec_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('food_restaurant_product_sec_subtitle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('food_restaurant_product_sec_subtitle',array(
		'label'	=> __('Sub Title','food-restaurant'),
		'section'	=> 'food_restaurant_product',
		'setting'	=> 'food_restaurant_product_sec_subtitle',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('food_restaurant_product_sec_short_line',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('food_restaurant_product_sec_short_line',array(
		'label'	=> __('Short Line','food-restaurant'),
		'section'	=> 'food_restaurant_product',
		'setting'	=> 'food_restaurant_product_sec_short_line',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('food_restaurant_product_sec_box_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'food_restaurant_product_sec_box_image',array(
        'label' => __('Product Leftside Image','food-restaurant'),
        'section' => 'food_restaurant_product',
        'settings' => 'food_restaurant_product_sec_box_image'
	)));
	
	for ( $count = 0; $count <= 0; $count++ ) {

		$wp_customize->add_setting( 'food_restaurant_product_settings' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		));
		$wp_customize->add_control( 'food_restaurant_product_settings' . $count, array(
			'label'    => __( 'Select Product Page', 'food-restaurant' ),
			'section'  => 'food_restaurant_product',
			'type'     => 'dropdown-pages'
		));

	// This is our product title Color picker setting
	$wp_customize->add_setting( 'food_restaurant_product_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_restaurant_product_heading_color', array(
		'label' => __('Title Color', 'food-restaurant'),
		'section' => 'food_restaurant_product',
		'settings' => 'food_restaurant_product_heading_color',
	)));

	//This is our product FontFamily picker setting
	$wp_customize->add_setting('food_restaurant_product_heading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_restaurant_sanitize_choices'
	));
	$wp_customize->add_control('food_restaurant_product_heading_font_family', array(
	    'section'  => 'food_restaurant_product',
	    'label'    => __( 'Title Fonts','food-restaurant'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is our product FontSize setting
	$wp_customize->add_setting('food_restaurant_product_heading_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('food_restaurant_product_heading_font_size',array(
		'label'	=> __('Title Font Size','food-restaurant'),
		'section'	=> 'food_restaurant_product',
		'setting'	=> 'food_restaurant_product_heading_font_size',
		'type'	=> 'text'
	));

	//This is our product subtitle FontSize setting
	$wp_customize->add_setting('food_restaurant_product_subtitle_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('food_restaurant_product_subtitle_font_size',array(
		'label'	=> __('Subtitle Font Size','food-restaurant'),
		'section'	=> 'food_restaurant_product',
		'setting'	=> 'food_restaurant_product_subtitle_font_size',
		'type'	=> 'text'
	));

	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'food_restaurant_product_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_restaurant_product_paragraph_color', array(
		'label' => __('Content Color', 'food-restaurant'),
		'section' => 'food_restaurant_product',
		'settings' => 'food_restaurant_product_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('food_restaurant_product_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_restaurant_sanitize_choices'
	));
	$wp_customize->add_control(	'food_restaurant_product_paragraph_font_family', array(
	    'section'  => 'food_restaurant_product',
	    'label'    => __( 'Content Fonts','food-restaurant'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('food_restaurant_product_paragraph_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('food_restaurant_product_paragraph_font_size',array(
		'label'	=> __('Content Font Size','food-restaurant'),
		'section'	=> 'food_restaurant_product',
		'setting'	=> 'food_restaurant_product_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is Button Color picker setting
	$wp_customize->add_setting( 'food_restaurant_product_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'food_restaurant_product_atag_color', array(
		'label' => __('Button Color', 'food-restaurant'),
		'section' => 'food_restaurant_product',
		'settings' => 'food_restaurant_product_atag_color',
	)));

	//This is Button FontFamily picker setting
	$wp_customize->add_setting('food_restaurant_product_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'food_restaurant_sanitize_choices'
	));
	$wp_customize->add_control('food_restaurant_product_atag_font_family', array(
	    'section'  => 'food_restaurant_product',
	    'label'    => __( 'Button Fonts','food-restaurant'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('food_restaurant_product_atag_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('food_restaurant_product_atag_font_size',array(
		'label'	=> __('Button Font Size','food-restaurant'),
		'section'	=> 'food_restaurant_product',
		'setting'	=> 'food_restaurant_product_atag_font_size',
		'type'	=> 'text'
	));

	}
	//footer
	$wp_customize->add_section('food_restaurant_footer_section',array(
		'title'	=> __('Footer Text','food-restaurant'),
		'description'	=> __('Add some text for footer like copyright etc.','food-restaurant'),
		'panel' => 'food_restaurant_panel_id'
	));
	
	$wp_customize->add_setting('food_restaurant_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('food_restaurant_footer_copy',array(
		'label'	=> __('Copyright Text','food-restaurant'),
		'section'	=> 'food_restaurant_footer_section',
		'type'		=> 'text'
	));

}
add_action( 'customize_register', 'food_restaurant_customize_register' );	


/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Food_Restaurant_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
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
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Food_Restaurant_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Food_Restaurant_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Food Restaurant Pro', 'food-restaurant' ),
					'pro_text' => esc_html__( 'Go Pro',         'food-restaurant' ),
					'pro_url'  => esc_url( 'https://www.logicalthemes.com/premium/food-restaurant-wordpress-theme/' ),
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

		wp_enqueue_script( 'food-restaurant-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'food-restaurant-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Food_Restaurant_Customize::get_instance();