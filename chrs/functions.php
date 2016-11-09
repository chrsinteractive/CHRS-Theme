<?php 
//show_admin_bar( false );

/**
 * Theme functions and definitions
 *
 * @package chrs
 */

if ( ! function_exists( 'chrs_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function chrs_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on chrs, use a find and replace
		 * to change 'chrs' to the name of your theme in all the template files
		 */
		// load_theme_textdomain( 'chrs', get_template_directory() . '/languages' );
	
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
	
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header-menu' => esc_html__( 'Header Menu', 'chrs' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'chrs' ),
		) );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
	
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	
		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

	}
endif;
add_action( 'after_setup_theme', 'chrs_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function chrs_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Default Sidebar', 'chrs' ),
		'id'            => 'sidebar-default',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'chrs_widgets_init' );


// Register Scripts
function chrs_enqueue_scripts(){
	
	
}
add_action('wp_print_scripts', 'chrs_enqueue_scripts');


/**
 * Enqueue scripts and styles.
 */
function chrs_scripts() {
	if (!is_admin()):
	
	// CSS
	wp_enqueue_style( 'chrs-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
	wp_enqueue_style( 'chrs-normalize', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style( 'chrs-fonts', get_template_directory_uri() . '/css/fonts.css');
	wp_enqueue_style( 'chrs-base', get_template_directory_uri() . '/css/base.css');
	wp_enqueue_style( 'chrs-skeleton', get_template_directory_uri() . '/css/skeleton.css');
	wp_enqueue_style( 'chrs-style', get_stylesheet_uri() );
	wp_enqueue_style( 'chrs-layout', get_template_directory_uri() . '/css/layout.css');

	// JS
	wp_enqueue_script('chrs_classie',get_template_directory_uri() . '/js/classie.js',array('jquery'),'1.0.0',true);
	wp_enqueue_script('chrs_custom',get_template_directory_uri() . '/js/custom.js',array('jquery'),'1.0.0',true);
	
	endif;
}
add_action( 'wp_enqueue_scripts', 'chrs_scripts' );


/**
 * Common functions
 */
require get_template_directory() . '/functions/common.php';

/**
 * Shortcode functions
 */
require get_template_directory() . '/functions/shortcodes.php';

/**
 * Custom functions
 */
require get_template_directory() . '/functions/custom.php';
  

?>