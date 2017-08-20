<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
            <h1>404.php</h1>
            <?php get_template_part('template-parts/post/content', 'none') ?>
        </main><!-- #main.col -->        
    </div><!-- #primary -->
</div><!-- .wrap -->
<?php
get_footer();

