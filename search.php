<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package gosarin.com
 * @subpackage MyWpTheme
 * @since MyWpTheme 0.0
 */
?>
<?php
get_header();
?>
<div class="container">
    <div class="row">
        <main id="main" role="main"  class="col-sm-12">
            <h1>search.php</h1>

            <?php
            if (have_posts()) :

                echo('<h2 class="h1">');
                printf(__('Search results for: %s', 'mywptheme-en-us'), '<span class="text-info">' . get_search_query() . '</span>');
                echo('</h2>');
                echo('<hr>');
                while (have_posts()) : the_post();

                    /**
                     * Run the loop for the search to output the results.
                     * If you want to overload this in a child theme then include a file
                     * called content-search.php and that will be used instead.
                     */
                    get_template_part('template-parts/post/content', 'excerpt');

                endwhile; // End of the loop.

                mywptheme_posts_pagination();

            else :
                get_template_part('template-parts/post/content', 'none');
            endif;
            ?>
        </main><!-- #main.col -->        
    </div><!-- #primary -->
</div><!-- .wrap -->
<?php
get_footer();
