<?php
/**
 * Food Restaurant functions and definitions
 *
 * @package Food Restaurant
 */

if ( ! function_exists( 'food_restaurant_setup' ) ) :

/* Theme Setup */

function food_restaurant_setup() {

	$GLOBALS['content_width'] = apply_filters( 'food_restaurant_content_width', 640 );

	load_theme_textdomain( 'food-restaurant', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('food-restaurant-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'food-restaurant' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_editor_style( array( 'css/editor-style.css', food_restaurant_font_url() ) );

	// Theme Activation Notice
	global $pagenow;
	
	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'food_restaurant_activation_notice' );
	}

}
endif; // food_restaurant_setup
add_action( 'after_setup_theme', 'food_restaurant_setup' );

// Notice after Theme Activation
function food_restaurant_activation_notice() {
	echo '<div class="foodwelcome notice notice-success is-dismissible">';
		echo '<h3>'. esc_html__( 'Warm Greetings to you!!', 'food-restaurant' ) .'</h3>';
		echo '<p>'. esc_html__( ' Our sincere thanks for choosing our food restaurant theme. We assure you a high performing theme for your food business. Please proceed towards welcome section to start an amazing journey with us. ', 'food-restaurant' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=food_restaurant_guide' ) ) .'" class="button button-primary">'. esc_html__( 'Welcome...', 'food-restaurant' ) .'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function food_restaurant_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'food-restaurant' ),
		'description'   => __( 'Appears on blog page sidebar', 'food-restaurant' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Posts and Pages Sidebar', 'food-restaurant' ),
		'description'   => __( 'Appears on posts and pages', 'food-restaurant' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'food-restaurant' ),
		'description'   => __( 'Appears on posts and pages', 'food-restaurant' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'food-restaurant' ),
		'description'   => __( 'Appears in footer', 'food-restaurant' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'food-restaurant' ),
		'description'   => __( 'Appears in footer', 'food-restaurant' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'food-restaurant' ),
		'description'   => __( 'Appears in footer', 'food-restaurant' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'food-restaurant' ),
		'description'   => __( 'Appears in footer', 'food-restaurant' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'food_restaurant_widgets_init' );

/* Theme Font URL */
function food_restaurant_font_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';

	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function food_restaurant_scripts() {
	wp_enqueue_style( 'food-restaurant-font', food_restaurant_font_url(), array() );
	wp_enqueue_style( 'css-bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'food-restaurant-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'food-restaurant-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_style( 'css-nivo-style', get_template_directory_uri().'/css/nivo-slider.css' );
	//topbar
		//logo
	    $food_restaurant_logo_atag_color = get_theme_mod('food_restaurant_logo_atag_color', '');
	    //logo heading
	    $food_restaurant_logo_font_family = get_theme_mod('food_restaurant_logo_font_family', '');
	    $food_restaurant_logo_font_size = get_theme_mod('food_restaurant_logo_font_size', '');
	    //description
	    $food_restaurant_description_color = get_theme_mod('food_restaurant_description_color', '');
	    $food_restaurant_description_font_family = get_theme_mod('food_restaurant_description_font_family', '');
	    $food_restaurant_description_font_size = get_theme_mod('food_restaurant_description_font_size', '');
	// Slider
		$food_restaurant_slider_heading_color = get_theme_mod('food_restaurant_slider_heading_color', '');
	    $food_restaurant_slider_heading_font_family = get_theme_mod('food_restaurant_slider_heading_font_family', '');
	    $food_restaurant_slider_heading_font_size = get_theme_mod('food_restaurant_slider_heading_font_size', '');
	    // button
		$food_restaurant_slider_atag_color = get_theme_mod('food_restaurant_slider_atag_color', '');
	    $food_restaurant_slider_atag_font_family = get_theme_mod('food_restaurant_slider_atag_font_family', '');
	    $food_restaurant_slider_atag_font_size = get_theme_mod('food_restaurant_slider_atag_font_size', '');
	//Our Product
	    $food_restaurant_product_heading_color = get_theme_mod('food_restaurant_product_heading_color', '');
	    $food_restaurant_product_heading_font_family = get_theme_mod('food_restaurant_product_heading_font_family', '');
	    $food_restaurant_product_heading_font_size = get_theme_mod('food_restaurant_product_heading_font_size', '');
	    // Paragraph
	    $food_restaurant_product_paragraph_color = get_theme_mod('food_restaurant_product_paragraph_color', '');
	    $food_restaurant_product_paragraph_font_family = get_theme_mod('food_restaurant_product_paragraph_font_family', '');
	    $food_restaurant_product_paragraph_font_size = get_theme_mod('food_restaurant_product_paragraph_font_size', '');
	    // subtitle
	    $food_restaurant_product_subtitle_font_size = get_theme_mod('food_restaurant_product_subtitle_font_size', '');
	    //Add to cart button
		$food_restaurant_product_atag_color = get_theme_mod('food_restaurant_product_atag_color', '');
	    $food_restaurant_product_atag_font_family = get_theme_mod('food_restaurant_product_atag_font_family', '');
	    $food_restaurant_product_atag_font_size = get_theme_mod('food_restaurant_product_atag_font_size', '');

	    $custom_css ='
	    	.header .logo a{
				color:'.esc_html($food_restaurant_logo_atag_color).'!important;
			}
			.header .logo h1,.header .logo a{
				font-family: '.esc_html($food_restaurant_logo_font_family).'!important;
			    font-size: '.esc_html($food_restaurant_logo_font_size).'!important;
			}
			.header .logo p{
			    color:'.esc_html($food_restaurant_description_color).'!important;
			    font-family: '.esc_html($food_restaurant_description_font_family).'!important;
			    font-size: '.esc_html($food_restaurant_description_font_size).'!important;
			}
			#slider .slide-cap h2{
			    color:'.esc_html($food_restaurant_slider_heading_color).'!important;
			    font-family: '.esc_html($food_restaurant_slider_heading_font_family).'!important;
			    font-size: '.esc_html($food_restaurant_slider_heading_font_size).'!important;
			}
			#slider .slide-cap a.read-more{
				color:'.esc_html($food_restaurant_slider_atag_color).'!important;
			    font-family: '.esc_html($food_restaurant_slider_atag_font_family).'!important;
			    font-size: '.esc_html($food_restaurant_slider_atag_font_size).'!important;
			}
			.blog-head h4,.blog-head h3{
			    color:'.esc_html($food_restaurant_product_heading_color).'!important;
			    font-family: '.esc_html($food_restaurant_product_heading_font_family).'!important;
			    font-size: '.esc_html($food_restaurant_product_heading_font_size).'!important;
			}
			.blog-head h4{
				font-size: '.esc_html($food_restaurant_product_subtitle_font_size).'!important;
			}
			.blog-head p{
			    color:'.esc_html($food_restaurant_product_paragraph_color).'!important;
			    font-family: '.esc_html($food_restaurant_product_paragraph_font_family).'!important;
			    font-size: '.esc_html($food_restaurant_product_paragraph_font_size).'!important;
			}
			.woocommerce ul.products li.product .button{
				color:'.esc_html($food_restaurant_product_atag_color).'!important;
			    font-family: '.esc_html($food_restaurant_product_atag_font_family).'!important;
			    font-size: '.esc_html($food_restaurant_product_atag_font_size).'!important;
			}
			';

		wp_add_inline_style( 'food-restaurant-basic-style',$custom_css );

	wp_enqueue_script( 'nivo-slider-jquery', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-jquery', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'food-restaurant-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'food_restaurant_scripts' );

function food_restaurant_ie_stylesheet(){
	wp_enqueue_style('food-restaurant-ie', get_template_directory_uri().'/css/ie.css', array('food-restaurant-basic-style'));
	wp_style_add_data( 'food-restaurant-ie', 'conditional', 'IE' );
}
add_action('wp_enqueue_scripts','food_restaurant_ie_stylesheet');

define('FOOD_RESTAURANT_FREE_THEME_DOC','https://logicalthemes.com/docs/free-food-restaurant/','food-restaurant');
define('FOOD_RESTAURANT_SUPPORT','https://www.logicalthemes.com/support/forum/lt-food-and-restaurant/','food-restaurant');
define('FOOD_RESTAURANT_REVIEW','https://www.logicalthemes.com/support/forum/reviews-testimonials/','food-restaurant');
define('FOOD_RESTAURANT_BUY_NOW','https://www.logicalthemes.com/premium/food-restaurant-wordpress-theme/','food-restaurant');
define('FOOD_RESTAURANT_LIVE_DEMO','https://www.logicalthemes.com/food-restaurant-theme/','food-restaurant');
define('FOOD_RESTAURANT_PRO_DOC','https://www.logicalthemes.com/docs/food-restaurant-pro/','food-restaurant');
define('FOOD_RESTAURANT_DEMO_DATA','https://logicalthemes.com/docs/food-restaurant-demo.xml.zip','food-restaurant');

define('food_restaurant_CREDIT','http://www.logicalthemes.com/','food-restaurant');

if ( ! function_exists( 'food_restaurant_credit' ) ) {
	function food_restaurant_credit(){
		echo "<a href=".esc_url(food_restaurant_CREDIT)." target='_blank'>".esc_html__('LogicalThemes','food-restaurant')."</a>";
	}
}

/*radio button sanitization*/
 function food_restaurant_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Load Jetpack compatibility file. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Implement the About theme page */
require get_template_directory() . '/inc/getting-started/getting-started.php';