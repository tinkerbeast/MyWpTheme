<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gosarin.com
 * @subpackage MyWpTheme
 * @since MyWpTheme 0.0
 */
?>
<?php
get_header();
?>

<!-- This is rendered from index.php -->
<div id="content" class="container"> <!-- #content is part of WordPress 1.5 site architecture -->
    <div class="row">
        <main id="main" role="main"  class="col-sm-12">            
            <header>
                <?php if (is_home() && !is_front_page()) : ?>                
                    <h2 class="h1"><?php single_post_title(); ?></h2>
                <?php else : ?>                
                    <h2 class="h1"><?php _e('Posts', 'mywptheme-en-us'); ?></h2>
                <?php endif; ?>
            </header>
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('template-parts/post/content', get_post_format());
                endwhile;
                echo('<hr class="invisible">');
                mywptheme_posts_pagination();
            else :
                get_template_part('template-parts/post/content', 'none');
            endif;
            ?>
        </main><!-- #main.col -->
        <?php /* get_sidebar(); */ // TODO: sidebar implementation ?>
    </div><!-- .row -->
</div><!-- .container -->

<?php
get_footer();
