<?php
/**
 * Theme template for `nav` section.
 *
 * @package gosarin.com
 * @subpackage MyWpTheme
 * @since MyWpTheme 0.0
 */
?>

<?php

function mywptheme_navbar_style_position() {
    $navbar_position = get_theme_mod('mywptheme_navbar_position', 'sticky');
    if ($navbar_position == 'sticky') {
        return 'sticky-top';
    } else if ($navbar_position == 'scrollable') {
        return '';
    } else if ($navbar_position == 'fixedtop') {
        return 'fixed-top';
    } else if ($navbar_position == 'fixedbottom') {
        return 'fixed-bottom';
    } else {
        error_log('mywptheme: invalid navbar postion: ' . $navbar_position);
        return 'sticky-top';
    }
}
?>

<?php if (get_theme_mod('mywptheme_navbar_position', 'sticky') != 'none') : ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark <?php echo mywptheme_navbar_style_position(); ?> mb-4">

        <!-- Display brand logo -->
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
            <!-- Display brand image -->
            <?php
            if (get_theme_mod('mywptheme_navbar_show_image', 1)) {
                if (has_custom_logo()) {
                    $brand_logo_id = get_theme_mod('custom_logo');
                    $brand_logo = wp_get_attachment_image_src($brand_logo_id, 'full');
                    echo('<img src="' . esc_url($brand_logo[0]) . '" alt="' . esc_attr(get_bloginfo('name', 'display')) . '" width="' . $brand_logo[1] . '" height="' . $brand_logo[2] . '" >');
                } else {
                    error_log('No available options to display logo');
                }
            }
            ?>
            <!-- Display brand heading -->
            <?php
            if (get_theme_mod('mywptheme_navbar_show_text', 0)) {
                bloginfo('name');
            }
            ?>
        </a>


        <!-- Mobile device collapsible button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapsible navbar -->
        <div id="navbarNav" class="collapse navbar-collapse">
            <!-- Display page menu -->
            <?php
            if (has_nav_menu('top')) {
                wp_nav_menu(array('theme_location' => 'top', 'container' => false, 'menu_class' => 'navbar-nav', 'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mr-auto">%3$s</ul>', 'depth' => 5, 'walker' => new bootstrap_4_walker_nav_menu()));
            } else {
                // TODO: Active menu display
                echo('<strong>Page menu is unsupported in this theme</strong>');
                wp_page_menu(array('container' => 'ul', 'menu_class' => 'navbar-nav mr-auto', 'before' => '', 'after' => ''));
            }
            ?>
            <!-- Display social menu -->
            <?php
            if (has_nav_menu('social')) {
                wp_nav_menu(array('theme_location' => 'social', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'depth' => 1, 'walker' => new bootstrap_4_walker_nav_menu()));
            }
            ?>
            <!-- Display search form -->
            <?php get_search_form(); ?>                
        </div>

    </nav>
<?php endif; ?>

