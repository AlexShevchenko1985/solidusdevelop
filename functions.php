<?php
/**
 * aitech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aitech
 */

/**
 * Inc. post types
 */
include_once "App/Base/AbstractPostType.php";
include_once "App/Base/AbstractTaxonomy.php";
include_once "App/PostType/Member.php";
include_once "App/Taxonomy/Position.php";
include_once "App/PostType/DataCenter.php";
include_once "App/MenuAitech.php";

new Member();
new Position();
new DataCenter();



include_once "inc/acf_options_page.php";
include_once "inc/gpu_marketplace_page_fields.php";
include_once "inc/avachat_page_fields.php";
include_once "inc/currencies_fields.php";
include_once "inc/socials_fiels.php";

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.2' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aitech_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on aitech, use a find and replace
		* to change 'aitech' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'aitech', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'aitech' ),
            'mobile_menu' => esc_html__( 'Mobile menu', 'aitech' ),
            'footer_menu_1' => __( 'Footer Menu Company', 'aitech' ),
            'footer_menu_2' => __( 'Footer Menu Resource', 'aitech' ),
            'footer_menu_product' => __( 'Footer Menu Product', 'aitech' ),
            'footer_menu_ecosystem' => __( 'Footer Menu Ecosystem', 'aitech' ),
            'footer_menu_privacy' => __( 'Footer Menu Privacy', 'aitech' ),
            'footer_menu_resource' => __( 'Footer Menu Resource', 'aitech' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'aitech_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'aitech_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aitech_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aitech_content_width', 640 );
}
add_action( 'after_setup_theme', 'aitech_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aitech_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'aitech' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'aitech' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'aitech_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aitech_scripts() {

    wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), _S_VERSION );
    wp_enqueue_style('style', get_template_directory_uri() . '/build/assets/css/app.min.css', array('swiper-style'), _S_VERSION);

    wp_enqueue_script('lenis', get_template_directory_uri() . '/js/lenis.js', array(), _S_VERSION, true);
    wp_enqueue_script('custom-lenis-init', get_template_directory_uri() . '/js/lenis-init.js', array('lenis'), _S_VERSION, true);
    wp_enqueue_script( 'marketplace-functions', get_template_directory_uri() . '/src/js/marketplace-functions.js', array('swiper'), _S_VERSION, true );
    wp_enqueue_script( 'homepage-functions', get_template_directory_uri() . '/src/js/homepage-functions.js', array('swiper'), _S_VERSION, true );
    wp_enqueue_script('aitech-cf7', get_template_directory_uri() . '/src/js/form/cf7.js', [], _S_VERSION, true);

    wp_enqueue_script(
        'currency-widgets',
        'https://files.coinmarketcap.com/static/widget/currency.js',
        [],
        false,
        [
            'in_footer' => true,
            'strategy'  => 'defer',
        ]
    );

    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), _S_VERSION, true );

    if (is_page_template('page-computer-marketplace.php')) {
        wp_enqueue_script('aitech-navigation', get_template_directory_uri() . '/js/navigation.js', array('swiper'), _S_VERSION, true);
    }

    if (is_page_template('page-avachat.php')) {
        wp_enqueue_script( 'avachat-functions', get_template_directory_uri() . '/src/js/avachat-functions.js', array('swiper'), _S_VERSION, true );
    }
    wp_enqueue_script( 'video-functions', get_template_directory_uri() . '/src/js/scripts.js', array('swiper'), _S_VERSION, true );

    if (is_page_template('templates/aitech-labs.php')) {
        wp_enqueue_script('aitech-labs-functions', get_template_directory_uri() . '/src/js/aitech-labs-functions.js', array('swiper'), _S_VERSION, true);
    }

    wp_enqueue_script('avoid-functions', get_template_directory_uri() . '/src/js/avoid.js', [], _S_VERSION, true);

}
add_action( 'wp_enqueue_scripts', 'aitech_scripts' );


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

//Change ACF Local JSON save location to /acf folder inside this plugin
add_filter('acf/settings/save_json', 'acf_save_json');
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function acf_save_json(): string
{
    return get_stylesheet_directory() . '/acf';
}

function my_acf_json_load_point($paths)
{

    unset($paths[0]);

    $paths[] = get_stylesheet_directory() . '/acf';

    return $paths;

}

function get_time_to_read($post_id, $words_per_minute = 200) {
    $post = get_post($post_id);
    $content = $post->post_content;
    $clean_content = wp_strip_all_tags(strip_shortcodes($content));
    $word_count = str_word_count($clean_content);
    $reading_time = ceil($word_count / $words_per_minute);

    return $reading_time . ' min';
}

function custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

//show_admin_bar(false);


/**
 * START Turn on display information about the server (Server Signature, PHP Version)
 */
// Remove the X-Powered-By header
add_action('init', function() {
    header_remove('X-Powered-By');
});

// Remove the WordPress Generator Meta Tag (WordPress Version)
remove_action('wp_head', 'wp_generator');

// Remove other headers if possible
add_filter('wp_headers', function($headers) {
    unset($headers['X-Powered-By']); // Removes PHP header
    unset($headers['Server']);      // Removes the server header (if available)
    return $headers;
});

// Add protective headers
add_action('send_headers', function() {
    header('X-Content-Type-Options: nosniff'); // Protection against interpretation of MIME types
    header('X-Frame-Options: SAMEORIGIN');    // Clickjacking protection
    header('X-XSS-Protection: 1; mode=block'); // XSS protection
});

// Disable XML-RPC completely
add_filter('xmlrpc_enabled', '__return_false');

// Disable XML-RPC methods for authorization
add_action('init', function() {
    add_filter('xmlrpc_methods', function($methods) {
        unset($methods['pingback.ping']);
        return $methods;
    });
});

// Disable FILE_EDIT
add_action('admin_init', function() {
    if (!defined('DISALLOW_FILE_EDIT')) {
        define('DISALLOW_FILE_EDIT', true);
    }
});

/**
 * END
 */