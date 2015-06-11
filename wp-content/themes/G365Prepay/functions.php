<?php

define('THEME_PATH', get_template_directory());
define('THEME_DIR', get_template_directory_uri());
define('STYLESHEET_PATH', get_stylesheet_directory());
define('STYLESHEET_DIR', get_stylesheet_directory_uri());

include_once (THEME_PATH . "/framework/theme_functions.php");
include_once (THEME_PATH . "/framework/googlefonts.php");
include_once (THEME_PATH . "/admin/index.php");
include_once (THEME_PATH . "/framework/aq_resizer.php");
require_once (THEME_PATH . "/framework/breadcrumbs.php");
include_once (THEME_PATH . "/framework/sidebar_generator.php");
include_once (THEME_PATH . "/framework/post-type/post-type.php");
include_once (THEME_PATH . "/framework/post-format.php");
include_once (THEME_PATH . "/framework/pagebuilder/pagebuilder.php");
include_once (THEME_PATH . "/framework/shortcode/shortcode.php");
include_once (THEME_PATH . "/framework/theme_css.php");
include_once (THEME_PATH . "/framework/menu/menu.php");



/* ================================================================================== */
/*      Include Widgets
/* ================================================================================== */
include_once (THEME_PATH . "/framework/widget/widget-posts.php");
include_once (THEME_PATH . "/framework/widget/widget-dribbble.php");
include_once (THEME_PATH . "/framework/widget/widget-flickr.php");
include_once (THEME_PATH . "/framework/widget/widget-social-icons.php");
include_once (THEME_PATH . "/framework/widget/widget-contact.php");
include_once (THEME_PATH . "/framework/widget/widget-facebook.php");
include_once (THEME_PATH . "/framework/widget/widget-tabbed.php");



/* ================================================================================== */
/*      Register menu
/* ================================================================================== */

register_nav_menus(array(
    'main' => 'Main Menu'
));




/* ================================================================================== */
/*      Theme Supports
/* ================================================================================== */

add_action('after_setup_theme', 'evatheme_setup');
if (!function_exists('evatheme_setup')) {

    function evatheme_setup() {
        add_editor_style();
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        load_theme_textdomain('evatheme', THEME_PATH . '/languages/');
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background' );
    }

}
if (!isset($content_width))
    $content_width = 1170;



/* ================================================================================== */
/*      Enqueue Scripts
/* ================================================================================== */

add_action('wp_enqueue_scripts', 'evatheme_scripts');

function evatheme_scripts() {

    wp_enqueue_style('bootstrap', THEME_DIR . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('plugins', THEME_DIR . '/assets/css/plugins.css');
    wp_enqueue_style('prettyphoto', THEME_DIR . '/assets/css/prettyPhoto.css');
    wp_enqueue_style('fontawesome', THEME_DIR . '/assets/css/font-awesome/font-awesome.min.css');
    wp_enqueue_style('evatheme', STYLESHEET_DIR . '/style.css');
    wp_enqueue_style('eva-responsive', THEME_DIR . '/assets/css/responsive.css');
    $protocol = is_ssl() ? 'https' : 'http';
    $defaultfonts = array('Source Sans Pro');
    $eva_googlefonts = array(
        eva_option('body_text_font','face'),
        eva_option('sidebar_widgets_title','face'),
        eva_option('footer_widgets_title','face'),
        eva_option('heading_font'),
    );
    $googlefont = '';
    foreach($eva_googlefonts as $font) {
        if(!in_array($font, $defaultfonts)) {
            $googlefont = str_replace(' ', '+', $font). ':300,400,400italic,700,700italic,900|' . $googlefont;
		}
    }
    if($googlefont != '') {
        wp_enqueue_style('google-font', "https://fonts.googleapis.com/css?family=" . substr_replace($googlefont ,"",-1) . "&subset=".eva_option('google_font_subset'));
    } else {
        wp_enqueue_style('google-font', "https://fonts.googleapis.com/css?family=" . eva_option('body_text_font', 'face') . "&subset=".eva_option('google_font_subset'));
    }

    wp_enqueue_script('jquery');
    if ( is_single() && comments_open() ) wp_enqueue_script( 'comment-reply' );
    wp_enqueue_script('prettyphoto', THEME_DIR . '/assets/js/jquery.prettyPhoto.js', false, false, true);
    wp_enqueue_script('bootstrap', THEME_DIR . '/assets/js/bootstrap.min.js', false, false, true);
    wp_enqueue_script('waypoints', THEME_DIR . '/assets/js/waypoints.min.js', false, false, true);
	wp_enqueue_script('plugins', THEME_DIR . '/assets/js/plugins.js', false, false, true);
    wp_enqueue_script('evatheme', THEME_DIR . '/assets/js/evatheme.js', false, false, true);
}



/* ================================================================================== */
/*      Register Widget Sidebar
/* ================================================================================== */

if (!function_exists('theme_widgets_init')) {

    function theme_widgets_init() {

		/* Blog Sidebar */
		register_sidebar( array(
			'name'          => 'Blog Sidebar',
			'id'            => 'blog-sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		) );

        /* Footer sidebars */
        $grid = eva_option('footer_layout')!="" ? eva_option('footer_layout') : '3-3-3-3';
        $i = 1;
        foreach (explode('-', $grid) as $g) {
            register_sidebar(array(
                'name' => __("Footer sidebar ", "evatheme") . $i,
                'id' => "footer-sidebar-$i",
                'description' => __('The footer sidebar widget area', 'evatheme'),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h6 class="widget-title">',
                'after_title' => '</h6>',
            ));
            $i++;
        }
    }
}
add_action('widgets_init', 'theme_widgets_init');
add_filter('widget_text', 'do_shortcode');





/* ================================================================================== */
/*      Has more in post
/* ================================================================================== */

function has_more() {
    global $post;
    if (empty($post))
        return;
    return (bool) preg_match('/<!--more(.*?)?-->/', $post->post_content);
}




/* ================================================================================== */
/*      Support upload .ico file
/* ================================================================================== */

if (!function_exists('custom_upload_mimes')) {
    add_filter('upload_mimes', 'custom_upload_mimes');

    function custom_upload_mimes($existing_mimes = array()) {
        $existing_mimes['ico'] = "image/x-icon";
        return $existing_mimes;
    }

}




/* ================================================================================== */
/*      IE
/* ================================================================================== */

add_filter("wpcf7_mail_tag_replaced", "suppress_wpcf7_filter");

function suppress_wpcf7_filter($value, $sub = "") {
    $out = !empty($sub) ? $sub : $value;
    $out = strip_tags($out);
    $out = wptexturize($out);
    return $out;
}



/* Wordpress Edit Gallery */
add_filter( 'use_default_gallery_style', '__return_false' );
add_filter( 'wp_get_attachment_link', 'eva_pretty_gallery', 10, 5);
function eva_pretty_gallery ($content, $id, $size, $permalink) {
    if(!$permalink)
	$content = preg_replace("/<a/","<a rel=\"prettyPhoto[gallery]\"",$content,1);
    return $content;
}

function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );

