<?php

/**
 * Theme functios for customisation.
 *
 * @package gosarin.com
 * @subpackage MyWpTheme
 * @since MyWpTheme 0.0
 */
function mywptheme_customize_register($wp_customize) {

    // About options area
    // ==================

    class mywptheme_Important_Links extends WP_Customize_Control {

        public $type = "mywptheme-important-links";

        public function render_content() {
            $important_links = array(
                'example' => array(
                    'link' => esc_url('http://gosarin.com/'),
                    'text' => __('example page', 'mywptheme-en-us'),
                ),
            );
            foreach ($important_links as $important_link) {
                echo('<p><a target="_blank" href="' . $important_link['link'] . '" >' . esc_attr($important_link['text']) . ' </a></p>');
            }
        }

    }

    $wp_customize->add_section('mywptheme_important_links', array(
        'priority' => 900,
        'title' => __('About MyWpTheme', 'mywptheme-en-us'),
    ));
    $wp_customize->add_setting('mywptheme_important_links', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'mywptheme_links_sanitize'
    ));
    $wp_customize->add_control(new mywptheme_Important_Links($wp_customize, 'important_links', array(
        'section' => 'mywptheme_important_links',
        'settings' => 'mywptheme_important_links'
    )));


    // Navbar options area
    // ===================

    $wp_customize->add_panel('mywptheme_navbar_options', array(
        'priority' => 30,
        'capabitity' => 'edit_theme_options',
        'title' => __('Navbar Options', 'mywptheme-en-us')
    ));

    // Navbar options area - brand options 

    $wp_customize->add_section('mywptheme_navbar_brand', array(
        'priority' => 31,
        'title' => __('Navbar Logo', 'mywptheme-en-us'),
        'panel' => 'mywptheme_navbar_options'
    ));
    $wp_customize->add_setting('mywptheme_navbar_show_text', array(
        'default' => 0,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'mywptheme_checkbox_sanitize'
    ));
    $wp_customize->add_control('mywptheme_navbar_show_text_checkbox', array(
        'type' => 'checkbox',
        'label' => __('Show brand name', 'mywptheme-en-us'),
        'section' => 'mywptheme_navbar_brand',
        'settings' => 'mywptheme_navbar_show_text'
    ));
    $wp_customize->add_setting('mywptheme_navbar_show_image', array(
        'default' => 1,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'mywptheme_checkbox_sanitize'
    ));
    $wp_customize->add_control('mywptheme_navbar_show_image_checkbox', array(
        'type' => 'checkbox',
        'label' => __('Show brand logo', 'mywptheme-en-us'),
        'section' => 'mywptheme_navbar_brand',
        'settings' => 'mywptheme_navbar_show_image'
    ));

    // TODO: Navbar options responsive menu
    // Navbar options area - position

    $wp_customize->add_section('mywptheme_navbar_position_section', array(
        'priority' => 32,
        'title' => __('Navbar Position', 'mywptheme-en-us'),
        'panel' => 'mywptheme_navbar_options'
    ));
    $wp_customize->add_setting('mywptheme_navbar_position', array(
        'default' => 'sticky',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'mywptheme_radio_select_sanitize'
    ));
    $wp_customize->add_control('mywptheme_navbar_position', array(
        'type' => 'radio',
        'label' => __('Choose top navbar display position.', 'mywptheme-en-us'),
        'section' => 'mywptheme_navbar_position_section',
        'choices' => array(
            'sticky' => __('Position Sticky (Default): Display the navbar below the header, but lock while scrolling.', 'mywptheme-en-us'),
            'scrollable' => __('Position Scroll: Display the navbar below the header and allow scrolling.', 'mywptheme-en-us'),
            'fixedtop' => __('Position Top: Float the container at the top of the page.', 'mywptheme-en-us'),
            'fixedbottom' => __('Position Bottom: Float the container at the bottom of the page.', 'mywptheme-en-us'),
            'none' => __('Position None: Do not display the navbar.', 'mywptheme-en-us')
        )
    ));


    // Header options area
    // ===================

    $wp_customize->add_panel('mywptheme_header_options', array(
        'priority' => 41,
        'capabitity' => 'edit_theme_options',
        'title' => __('Header Options', 'mywptheme-en-us')
    ));
    
    // Header options area - show

    $wp_customize->add_section('mywptheme_header_options_show', array(
        'priority' => 42,
        'title' => __('Show Header', 'mywptheme-en-us'),
        'panel' => 'mywptheme_header_options'
    ));
    $header_show_opts = array('default', 'static', 'posts', 'other');
    $header_show_texts = array(
        'Default: Show the header when blog post page is the landing page.',
        'Static: Show the header for any landing page.',
        'Posts: Show the header for any blog posts page.',
        'Other: Show the header for other types of pages as well.');
    for ($i = 0; $i < count($header_show_opts); $i++) {
        $wp_customize->add_setting('mywptheme_header_show_' . $header_show_opts[$i], array(
            'default' => 1,
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'mywptheme_checkbox_sanitize'
        ));
        $wp_customize->add_control('mywptheme_header_show_' . $header_show_opts[$i] . '_checkbox', array(
            'type' => 'checkbox',
            'label' => __($header_show_texts[$i], 'mywptheme-en-us'),
            'section' => 'mywptheme_header_options_show',
            'settings' => 'mywptheme_header_show_' . $header_show_opts[$i]
        ));
    }
    
    // Header options area - size

    $wp_customize->add_section('mywptheme_header_options_size', array(
        'priority' => 43,
        'title' => __('Header Full Page', 'mywptheme-en-us'),
        'panel' => 'mywptheme_header_options'
    ));
    $header_size_opts = array('default', 'static', 'posts', 'other');
    $header_size_texts = array(
        'Default: Show the full page header when blog post page is the landing page.',
        'Static: Show the full page header for any landing page.',
        'Posts: Show the full page header for any blog posts page.',
        'Other: Show the full page header for other types of pages as well.');
    for ($i = 0; $i < count($header_show_opts); $i++) {
        $wp_customize->add_setting('mywptheme_header_size_' . $header_size_opts[$i], array(
            'default' => 1,
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'mywptheme_checkbox_sanitize'
        ));
        $wp_customize->add_control('mywptheme_header_size_' . $header_size_opts[$i] . '_checkbox', array(
            'type' => 'checkbox',
            'label' => __($header_size_texts[$i], 'mywptheme-en-us'),
            'section' => 'mywptheme_header_options_size',
            'settings' => 'mywptheme_header_size_' . $header_size_opts[$i]
        ));
    }

    // Sanitization functions
    // ======================
    
    // radio/select buttons sanitization
    function mywptheme_radio_select_sanitize($input, $setting) {
        // Ensuring that the input is a slug.
        $input = sanitize_key($input);
        // Get the list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control($setting->id)->choices;
        // If the input is a valid key, return it, else, return the default.
        return ( array_key_exists($input, $choices) ? $input : $setting->default );
    }

    // checkbox sanitize
    function mywptheme_checkbox_sanitize($input) {
        if ($input == 1) {
            return 1;
        } else {
            return '';
        }
    }

    // color sanitization
    function mywptheme_color_option_hex_sanitize($color) {
        if ($unhashed = sanitize_hex_color_no_hash($color))
            return '#' . $unhashed;

        return $color;
    }

    function mywptheme_color_escaping_option_sanitize($input) {
        $input = esc_attr($input);
        return $input;
    }

    // slider pages number sanitization
    function mywptheme_slider_page_sanitize_integer($input) {
        if (is_numeric($input)) {
            return intval($input);
        }
    }

    // sanitization of links
    function mywptheme_links_sanitize() {
        return false;
    }

}

add_action('customize_register', 'mywptheme_customize_register');

