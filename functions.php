<?php

function clean_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
	//load_theme_textdomain( 'twentyseventeen' );

	// Add default posts and comments RSS feed links to head.
	//add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	//add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'client-fotos', 210, 140, true );
	add_image_size( 'clean-featured-image', 2365, 1774, true );
//    add_theme_support( 'custom-header' );

	// Set the default content width.
	//$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
//	register_nav_menus( array(
//		'top'    => __( 'Top Menu', 'twentyseventeen' ),
//		'social' => __( 'Social Links Menu', 'twentyseventeen' ),
//	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	 
//	$starter_content = apply_filters( 'twentyseventeen_starter_content', $starter_content );
//
//	add_theme_support( 'starter-content', $starter_content );
}
add_action( 'after_setup_theme', 'clean_setup' );







function clean_styles(){
  
        wp_enqueue_style( 'css_styles', get_stylesheet_uri() );
        wp_enqueue_style( 'animations', get_template_directory_uri().'/css/animate.css', null, null );
        wp_enqueue_style( 'styles', get_template_directory_uri().'/css/style.css', null, null );
        wp_enqueue_style( 'simple_line', get_template_directory_uri().'/css/simple-line-icons.css', null, null );
        wp_enqueue_style( 'font_min_styles', get_template_directory_uri().'/css/font-awesome.min.css', null, null );
        wp_enqueue_style( 'font_styles', get_template_directory_uri().'/css/font-awesome.css', null, null );
        wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/bootstrap/css/bootstrap.min.css', null, null );
        wp_enqueue_script('jquery');
        
        wp_enqueue_script('custom_mod', get_template_directory_uri() . '/js/modernizr.custom.js', null, null, true);
        wp_enqueue_script('bootstrap2', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', null, null, true);
        wp_enqueue_script('jquery5', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', null, null, true);
        wp_enqueue_script('jquery2', get_template_directory_uri() . '/js/imagesloaded.pkgd.js', null, null, true);
        wp_enqueue_script('jquery1', get_template_directory_uri() . '/js/jquery.sticky.js', null, null, true);
        wp_enqueue_script('scroll', get_template_directory_uri() . '/js/smoothscroll.js', null, null, true);
        wp_enqueue_script('jquery3', get_template_directory_uri() . '/js/jquery.cbpQTRotator.js', null, null, true);
        wp_enqueue_script('jquery4', get_template_directory_uri() . '/js/jquery.easypiechart.js', null, null, true);
        wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', null, null, true);
        wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', null, null, true);
        wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', null, null, true);
    
        
    
    
    

}
add_action( 'wp_enqueue_scripts', 'clean_styles' );


//function clean_header_image_tag( $html, $header, $attr ) {
//	if ( isset( $attr['sizes'] ) ) {
//		$html = str_replace( $attr['sizes'], '100vw', $html );
//	}
//	return $html;
//}
//add_filter( 'get_header_image_tag', 'clean_header_image_tag', 10, 3 );

?>