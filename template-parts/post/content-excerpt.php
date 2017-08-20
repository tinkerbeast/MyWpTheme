<?php
/**
 * Backing partial template for search.
 *
 * @package gosarin.com
 * @subpackage MyWpTheme
 * @since MyWpTheme 0.0
 */
?>
<article id="post-<?php the_ID(); ?>">
    <header>
        <!-- Title -->
        <?php
        if (is_front_page() && !is_home()) {
            // TODO: When do we hit this?
            // The excerpt is being displayed within a front page section, so it's a lower hierarchy than h2.
            the_title(sprintf('<h3 class="h2"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');
        } else {
            the_title(sprintf('<h2 class="h2"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
        }
        if ('post' === get_post_type()) {
            ?>
            <p>
                <i class="fa fa-calendar-o mr-1" aria-hidden="true"></i> <?php mywptheme_posts_link_datetime_published(' ', '', '', false, ''); ?>            
                <?php mywptheme_posts_link_edit('Edit', '<i class="fa fa-edit ml-2 mr-1" aria-hidden="true"></i> ', '', false, ''); ?>
            </p>
        <?php } ?>
    </header>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->

</article><!-- #post-## -->
<hr>