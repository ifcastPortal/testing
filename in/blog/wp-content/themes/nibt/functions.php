<?php

/**

* NIBT functions and definitions

*

* @link https://developer.wordpress.org/themes/basics/theme-functions/

*

* @package NIBT

*/



// Register Custom Navigation Walker

require_once('wp-bootstrap-navwalker.php');



if ( ! function_exists( 'nibt_setup' ) ) :

/**

* Sets up theme defaults and registers support for various WordPress features.

*

* Note that this function is hooked into the after_setup_theme hook, which

* runs before the init hook. The init hook is too late for some features, such

* as indicating support for post thumbnails.

*/

function nibt_setup() {

	/*

	* Make theme available for translation.

	* Translations can be filed in the /languages/ directory.

	* If you're building a theme based on NIBT, use a find and replace

	* to change 'nibt' to the name of your theme in all the template files.

	*/

	load_theme_textdomain( 'nibt', get_template_directory() . '/languages' );

	

	// Add default posts and comments RSS feed links to head.

	add_theme_support( 'automatic-feed-links' );

	

	/*

	* Let WordPress manage the document title.

	* By adding theme support, we declare that this theme does not use a

	* hard-coded <title> tag in the document head, and expect WordPress to

	* provide it for us.

	*/

	add_theme_support( 'title-tag' );



	/*

	* Enable support for Post Thumbnails on posts and pages.

	*

	* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/

	*/

	add_theme_support( 'post-thumbnails' );



	// This theme uses wp_nav_menu() in one location.

	register_nav_menus( array(

		'primary' => esc_html__( 'Primary Menu', 'nibt' ),

	) );



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

	* WooCommerce support.

	*/

	add_theme_support( 'woocommerce' );



	// Set up the WordPress core custom background feature.

	add_theme_support( 'custom-background', apply_filters( 'nibt_custom_background_args', array(

		'default-color' => 'ffffff',

		'default-image' => '',

	) ) );



	// Add theme support for selective refresh for widgets.

	add_theme_support( 'customize-selective-refresh-widgets' );

}

endif;

add_action( 'after_setup_theme', 'nibt_setup' );



/**

* Set the content width in pixels, based on the theme's design and stylesheet.

*

* Priority 0 to make it available to lower priority callbacks.

*

* @global int $content_width

*/

function nibt_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'nibt_content_width', 640 );

}

add_action( 'after_setup_theme', 'nibt_content_width', 0 );



/**

* Register widget area.

*

* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar

*/

function nibt_widgets_init() {

	register_sidebar( array(

		'name'          => esc_html__( 'Sidebar', 'nibt' ),

		'id'            => 'sidebar-1',

		'description'   => esc_html__( 'Add widgets here.', 'nibt' ),

		'before_widget' => '<section id="%1$s" class="widget %2$s">',

		'after_widget'  => '</section>',

		'before_title'  => '<h2 class="widget-title">',

		'after_title'   => '</h2>',

	) );

}

add_action( 'widgets_init', 'nibt_widgets_init' );



/**

* Enqueue scripts and styles.

*/

function nibt_scripts() {

	

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.1.1', true );



	wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), true );

	

	wp_enqueue_style( 'nibt-style', get_stylesheet_uri() );

	wp_enqueue_script( 'nibt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );



	wp_enqueue_script( 'nibt-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

		wp_enqueue_script( 'comment-reply' );

	}



}

add_action( 'wp_enqueue_scripts', 'nibt_scripts' );



/**

* Filter the except length to 20 words.

*

* @param int $length Excerpt length.

* @return int (Maybe) modified excerpt length.

*/



function short_excerpt($string, $id) {

	$excerpt = substr(strip_tags($string), 0, 150); 

	echo $excerpt."...";

}



function nibt_setup() {

	

	add_theme_support( 'custom-logo', array(

		'height'      => 55,

		'width'       => 222,

		'flex-width' => true,

	) );

}

add_action( 'after_setup_theme', 'nibt_setup' );



function nibt_the_custom_logo() {

	

	if ( function_exists( 'the_custom_logo' ) ) {

		the_custom_logo();

	}

}

add_theme_support('post-thumbnails');

if ( function_exists('register_sidebar') ) {

	register_sidebar(array(

		'name' => 'Custom Sidebar',

		'id' => 'custom-sidebar',

		'description' => 'Sidebar below Header image',

		'before_title' => '<h2>',

		'after_title' => '</h2>',

	));

}

add_action( 'pre_get_posts',  'set_posts_per_page'  );

function set_posts_per_page( $query ) {

global $wp_the_query;

if ( ( ! is_admin() ) && ( $query === $wp_the_query ) && ( $query->is_search() ) ) {

$query->set( 'posts_per_page', 3 );

}

elseif ( ( ! is_admin() ) && ( $query === $wp_the_query ) && ( $query->is_archive() ) ) {

$query->set( 'posts_per_page', 5 );

}

// Etc..

return $query;

}

//Get image URL

function get_thumbnail_url($post){

if(has_post_thumbnail($post['id'])){

$imgArray = wp_get_attachment_image_src( get_post_thumbnail_id( $post['id'] ), 'full' ); // replace 'full' with 'thumbnail' to get a thumbnail

$imgURL = $imgArray[0];

return $imgURL;

} else {

return false;

}

}

//integrate with WP-REST-API

function insert_thumbnail_url() {

register_rest_field( 'post',

'featured_image',  //key-name in json response

array(

'get_callback'    => 'get_thumbnail_url',

'update_callback' => null,

'schema'          => null,

)

);

}

//register action

add_action( 'rest_api_init', 'insert_thumbnail_url' );

add_action( 'init', 'add_anuncios_to_json_api', 30 );

function add_anuncios_to_json_api(){

global $wp_post_types;

$wp_post_types['webinarjam_webinars']->show_in_rest = true;

}



add_filter('next_posts_link_attributes', 'posts_link_attributes_1');

add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');



function posts_link_attributes_1() {

    return 'class="prev-post"';

}

function posts_link_attributes_2() {

    return 'class="next-post"';

}





//-- Rest Api function for webinar

add_action( 'init', 'add_myCustomPostType_endpoint');

function add_myCustomPostType_endpoint(){



    global $wp_post_types;

    $wp_post_types['webinarjam_webinars']->show_in_rest = true;

    $wp_post_types['webinarjam_webinars']->rest_base = 'webinarjam_webinars';

    $wp_post_types['webinarjam_webinars']->rest_controller_class = 'WP_REST_Posts_Controller';

}



/**

* Implement the Custom Header feature.

*/

require get_template_directory() . '/inc/custom-header.php';

/**

* Custom template tags for this theme.

*/

require get_template_directory() . '/inc/template-tags.php';

/**

* Custom functions that act independently of the theme templates.

*/

require get_template_directory() . '/inc/extras.php';

/**

* Customizer additions.

*/

require get_template_directory() . '/inc/customizer.php';

/**

* Load Jetpack compatibility file.

*/

require get_template_directory() . '/inc/jetpack.php';







function themeslug_remove_hentry( $classes ) {

    if ( is_page() ) {

        $classes = array_diff( $classes, array( 'hentry' ) );

    }

    return $classes;

}

add_filter( 'post_class','themeslug_remove_hentry' );


/* Add noindex only to paginated subpages of archives, search and 404 pages */
function add_noindex_tags(){
	$paged = intval( get_query_var( 'paged' ) );
	
    if(is_author() || is_date() || is_paged() || is_tag() || is_404() || is_search())
		echo '<meta name="robots" content="noindex,follow">';

}
add_action('wp_head','add_noindex_tags', 4 );