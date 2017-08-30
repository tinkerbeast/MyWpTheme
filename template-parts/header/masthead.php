<?php
/**
 * Theme template for `header` section.
 *
 * @package gosarin.com
 * @subpackage MyWpTheme
 * @since MyWpTheme 0.0
 */
?>

<?php

function mywptheme_header_style_background() {
    $header_image = get_header_image();
    if (!empty($header_image)) {
        echo("background-image: url('" . esc_url($header_image) . "');");
    } else {
        echo("background-image: none;");
    }
}

function mywptheme_header_style_height() {
    if (is_front_page() && is_home() && get_theme_mod('mywptheme_header_size_default', 1)) { // Default homepage
        echo("height: 100vh;");
    } elseif (is_front_page() && get_theme_mod('mywptheme_header_size_static', 1)) { // Static homepage
        echo("height: 100vh;");
    } elseif (is_home() && get_theme_mod('mywptheme_header_size_posts', 1)) { // Blog page
        echo("height: 100vh;");
    } else if (get_theme_mod('mywptheme_header_size_other', 1)) { // everything else
        echo("height: 100vh;");
    } else {
        echo("");
    }    
}

function mywptheme_header_show() {
    if (is_front_page() && is_home() && get_theme_mod('mywptheme_header_show_default', 1)) { // Default homepage
        return 1;
    } elseif (is_front_page() && get_theme_mod('mywptheme_header_show_static', 1)) { // Static homepage
        return 1;
    } elseif (is_home() && get_theme_mod('mywptheme_header_show_posts', 1)) { // Blog page
        return 1;
    } else if (get_theme_mod('mywptheme_header_show_other', 1)) { // everything else
        return 1;
    } else {
        return 0;
    }
}

?>

<?php if (mywptheme_header_show() == 1) : ?>
    <header id="header" class="jumbotron masthead" style="<?php mywptheme_header_style_background();
    mywptheme_header_style_height() ?>"> <!-- #header is part of WordPress 1.5 site architecture -->
        <div id="headerimg"> <!-- #headerimg is part of WordPress 1.5 site architecture -->
        <!-- TODO: Widgets in header -->
        <!-- Display site heading and description -->        
        <?php
        if (display_header_text()) {
            $display_name = get_bloginfo('name', 'display');
            if ($display_name) {
                echo('<h1 class="display-2">' . $display_name . '</h1>');
            }
            $display_description = get_bloginfo('description', 'display');
            if ($display_description != '' || is_customize_preview()) {
                echo('<p class="description wp-description lead">' . $display_description . '</p>');
            }
        }
        ?>
        <!-- TODO: Special feature header widget dropdown -->
        <!-- TODO: Special feature slider -->
        <!-- TODO: Special feature header -->
        </div>
    </header>
<?php endif; ?>


