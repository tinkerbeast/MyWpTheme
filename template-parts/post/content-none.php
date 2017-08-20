<?php
/**
 * Backing partial template for 404, ??????
 *
 * @package gosarin.com
 * @subpackage MyWpTheme
 * @since MyWpTheme 0.0
 */
?>

<section>
    <header class="page-header">
        <?php if (is_404()) : ?>
        <h2 class="display-3"><span class="text-info"><?php _e('Error 404', 'mywptheme-en-us'); ?></span> <small><?php _e('Page not found', 'mywptheme-en-us'); ?></small></h1>
            <?php else : ?>
                <h2 class="h1"><?php _e('Nothing Found', 'mywptheme-en-us'); ?></h2>
            <?php endif; ?>
    </header>
    <div>
        <?php if (!is_404() && is_home() && current_user_can('publish_posts')) : ?>
            <p><?php printf(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'mywptheme-en-us'), esc_url(admin_url('post-new.php'))); ?></p>
        <?php else : ?>
            <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mywptheme-en-us'); ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</section>
