<?php

/**
 * Functions file for core WordPress functionality.
 *
 * Defining some constants, loading all the required files and Adding some core functionality.
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menu() To add support for navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @package gosarin.com
 * @subpackage MyWpTheme
 * @since MyWpTheme 0.0
 */
/**
 * MyWpTheme only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '<')) {
    // TODO: Provide compatibilty
    require get_template_directory() . '/inc/back-compat.php';
    return;
}

function mywptheme_setup() {
    // Make theme available for translation. Translations can be filed in the /languages/ directory.
    load_theme_textdomain('mywptheme-en-us', get_template_directory() . '/languages');
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    // Let WordPress manage the document title.
    add_theme_support('title-tag');
    // This theme uses Featured Images (also known as post thumbnails) for per-post/per-page.
    add_theme_support('post-thumbnails');
    // Cropping the images to different sizes to be used in the theme
    add_image_size('mywptheme-featured-col-one', 1110, 262, true);
    add_image_size('mywptheme-featured-col-two', 833, 197, true);
    add_image_size('mywptheme-featured-col-three', 555, 131, true);    
    add_image_size('mywptheme-thumnail', 200, 200, true);
    // Registering navigation menus.
    register_nav_menus(array(
        'top' => __('Top Menu', 'mywptheme-en-us'),
        'social' => __('Social Links Menu', 'mywptheme-en-us'),
        'footer' => __('Footer Menu', 'mywptheme-en-us'),
    ));
    // TODO: global contetnt width
    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ));
    // Enable support for Post Formats.
    add_theme_support('post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'chat', 'audio', 'status'));
    // Adds the support for the Custom Logo introduced in WordPress 4.5
    add_theme_support('custom-logo', array(
        'width' => 50,
        'height' => 50,
        'flex-width' => true,
        'flex-height' => true,
    ));
    // Add theme support for selective refresh for widgets.
    // TODO: understand this
    add_theme_support('customize-selective-refresh-widgets');
    // Header image support
    add_theme_support('custom-header', array(
        'default-image' => '',
        'default-text-color' => '222222',
        'width' => 1920,
        'height' => 1080,
        'flex-width' => true,
        'flex-height' => true,
    ));
    // Setup the WordPress core custom background feature.
    add_theme_support('custom-background', array(
        'default-color' => 'f0f0f0'
    ));
    // Adding excerpt option box for pages as well
    add_post_type_support('page', 'excerpt');
    // TODO: custom editor
    // TODO: theme support start content
}

add_action('after_setup_theme', 'mywptheme_setup');



/** Load functions */
//require_once get_parent_theme_file_path('/inc/functions.php');
require_once get_parent_theme_file_path('/inc/customizer.php');
require_once get_parent_theme_file_path('/inc/template-tags.php');
require_once get_parent_theme_file_path('/inc/bootstrap-navmenu-walker.php');
require_once get_parent_theme_file_path('/inc/fontawesome-socialmenu.php');
// TODO: reintroduce these
//require_once get_parent_theme_file_path( '/inc/admin/meta-boxes.php' );
//require_once get_parent_theme_file_path( '/inc/widgets/widgets.php' );


/* Calling in the admin area for the Welcome Page */
if (is_admin()) {
    // TODO: make this happen
    //require get_parent_theme_file_path('/inc/admin/mywptheme-admin-class.php');
}












?>
