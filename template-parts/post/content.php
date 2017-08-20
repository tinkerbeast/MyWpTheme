<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gosarin.com
 * @subpackage MyWpTheme
 * @since MyWpTheme 0.0
 */
?>
?>
<article id="post-<?php the_ID(); ?>" class="card my-5">

    <?php if (!is_single()) : // TODO: Why avoid thumbnail for single? Because of permalink? ?> 
        <!-- Featured image -->
        <a href="<?php the_permalink(); ?>">
        <?php mywptheme_posts_image_featured(null, '', '', false, 'card-img-top img-fluid', 'mywptheme-featured-col-one'); ?>
        </a>
    <?php endif; ?>

    <div class="card-body">
        <?php
        // TODO: explore all cases and assign the rigth header values
        if (is_single()) { // accessessed from single.php
            the_title('<h2 class="card-title">', '</h2>');
        } else if (is_home()) { // accessessed from home.php or index.php
            the_title('<h3 class="card-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
        } else { // accessessed from archive.php
            the_title('<h3 class="card-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
        }
        ?>

        <?php
        /* TODO: content */
        the_content(sprintf(
                        __('Continue reading<span class="sr-only"> "%s"</span>', 'twentyseventeen'), get_the_title()
        ));

        /* TODO: link pages */
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'twentyseventeen'),
            'after' => '</div>',
            'link_before' => '<span class="page-number">',
            'link_after' => '</span>',
        ));
        ?>
    </div>

    <footer class="card-footer">
        <?php if (is_home() &&  is_sticky()) : ?>
            <!-- Sticky -->            
            <i class="fa fa-thumb-tack mr-3" aria-hidden="true" title="Sticky post"></i>
            <span class="sr-only">Sticky post</span>
        <?php endif; ?>

        <?php if ('post' === get_post_type()) : ?>
            <!-- Date/Time -->
            <?php mywptheme_posts_link_datetime_published('<i class="fa fa-calendar mx-2" aria-hidden="true" title="Published on"></i>', '', '', false, ''); ?>
            <!-- Author -->
            <?php mywptheme_posts_link_author('<i class="fa fa-user mx-2" aria-hidden="true" title="Author"></i>', '', '', false, ''); ?>
            <!-- Categories link -->
            <?php mywptheme_posts_link_category('<i class="fa fa-sitemap mx-2" aria-hidden="true" title="Categories"></i>', '', '', false, ''); ?>
            <!-- Tags link -->
            <?php mywptheme_posts_link_tag('<i class="fa fa-tags mx-2" aria-hidden="true" title="Tags"></i>', '', '', false, ''); ?>
            <!-- Edit link -->
            <?php mywptheme_posts_link_edit('Edit', '<i class="fa fa-edit mx-2" aria-hidden="true" title="Edit"></i>', '', false, ''); ?>
            <!-- TODO: Modified on -->
        <?php endif; ?>
    </footer>

</article><!-- #post-## -->
