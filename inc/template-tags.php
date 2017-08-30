<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package gosarin.com
 * @subpackage MyWpTheme
 * @since MyWpTheme 0.0
 */
if (!function_exists('mywptheme_posts_link_author')) :

    function mywptheme_posts_link_author($text = 'by ', $before = '', $after = '', $id = false, $class = '', $srtext = 'Author: ') {
        echo __($text, 'mywptheme-en-us') . '<span class="sr-only">' . __($srtext, 'mywptheme-en-us') . '</span>' . '<a class="' . $class . '" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID', $id))) . '">' . $before . get_the_author() . $after . '</a>';
    }

endif;

if (!function_exists('mywptheme_posts_link_datetime_published')) :

    function mywptheme_posts_link_datetime_published($text = 'Posted on ', $before = '', $after = '', $id = false, $class = '', $srtext = 'Published on: ') {
        // Warning: Id is not used just kept for a uniform function interface
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        $time_string = sprintf($time_string, get_the_date(DATE_W3C), get_the_date());
        echo __($text, 'mywptheme-en-us') . '<span class="sr-only">' . __($srtext, 'mywptheme-en-us') . '</span>' . '<a class="' . $class . '" href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $before . $time_string . $after . '</a>';
    }

endif;

if (!function_exists('mywptheme_posts_link_datetime_modified')) :

    function mywptheme_posts_link_datetime_modified($text = 'Modified on ', $before = '', $after = '', $id = false, $class = '', $srtext = 'Modified on: ') {
        // Warning: Id is not used just kept for a uniform function interface
        $time_string = '<time class="updated" datetime="%1$s">%2$s</time>';
        $time_string = sprintf($time_string, get_the_modified_date(DATE_W3C), get_the_modified_date());
        echo __($text, 'mywptheme-en-us') . '<span class="sr-only">' . __($srtext, 'mywptheme-en-us') . '</span>' . '<a class="' . $class . '" href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $before . $time_string . $after . '</a>';
    }

endif;

if (!function_exists('mywptheme_posts_link_category')) :

    function mywptheme_posts_link_category($text = null, $before = '', $after = '', $id = false, $class = '', $srtext = 'Categories: ') {
        $separate_meta = __(', ', 'mywptheme-en-us');
        $categories_list = get_the_category_list($separate_meta);
        if ($categories_list) {
            echo __($text, 'mywptheme-en-us') . '<span class="sr-only">' . __($srtext, 'mywptheme-en-us') . '</span>' . $before . $categories_list . $after;
        }
    }

endif;

if (!function_exists('mywptheme_posts_link_tag')) :

    function mywptheme_posts_link_tag($text = null, $before = '', $after = '', $id = false, $class = '', $srtext = 'Tags: ') {
        $separate_meta = __(', ', 'mywptheme-en-us');
        $tags_list = get_the_tag_list('', $separate_meta);
        if ($tags_list) {
            echo __($text, 'mywptheme-en-us') . '<span class="sr-only">' . __($srtext, 'mywptheme-en-us') . '</span>' . $before . $tags_list . $after;
        }
    }

endif;

if (!function_exists('mywptheme_posts_link_edit')) :

    function mywptheme_posts_link_edit($text = null, $before = '', $after = '', $id = false, $class = '') {
        $id = $id == false ? 0 : $id;
        edit_post_link(__($text, 'mywptheme-en-us'), $before, $after, $id, $class);
    }

endif;

if (!function_exists('mywptheme_posts_image_featured')) :

    function mywptheme_posts_image_featured($text = null, $before = '', $after = '', $id = false, $class = 'img-fluid rounded', $size = 'mywptheme-featured-col-one') {
        if (has_post_thumbnail()) {
            $post_id = $id ? $id : $post->ID;
            $post_thumbnail_id = get_post_thumbnail_id($post_id);
            $alt = $text == null ? $text : get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);
            $thumbnail_attributes = wp_get_attachment_image_src($post_thumbnail_id, $size);
            echo($before . '<img class="' . $class . '" src="' . esc_url($thumbnail_attributes[0]) . '" alt="' . esc_attr($alt) . '" width="' . $thumbnail_attributes[1] . '" height="' . $thumbnail_attributes[2] . '">' . $after);
        }
    }

endif;

if (!function_exists('mywptheme_posts_content')) :

    function mywptheme_posts_content($text = 'Continue reading ', $before = '', $after = '', $id = false, $class = '') {
        the_content(__($text, 'mywptheme-en-us'));
    }

endif;

if (!function_exists('mywptheme_posts_pagination')) :

    // TODO: Write a more efficient, modular function

    function mywptheme_posts_pagination($srtext = 'Browse pages: ') {

        $prev_text = __('Previous page', 'mywptheme-en-us');
        $next_text = __('Next page', 'mywptheme-en-us');        
        $paginattion_links = paginate_links(array('type' => 'array',
            'prev_text' => '<i class="fa fa-backward" aria-hidden="true" title="' . $prev_text . '"></i><span class="sr-only">' . $prev_text . '</span>',
            'next_text' => '<i class="fa fa-forward" aria-hidden="true" title="' . $next_text . '"></i><span class="sr-only">' . $next_text . '</span>'));
        
        if (!is_null($paginattion_links)) {
            $pagination_current = intval(get_query_var('paged'));
            
            echo('<nav aria-label="...">'
                    . '<span class="sr-only">' . __($srtext, 'mywptheme-en-us') . '</span>'
                    . '<ul class="pagination">');
            foreach ($paginattion_links as $i => $pl) {
                if ($i == $pagination_current) {
                    echo('<li class="page-item disabled">');
                    echo('<a class="page-link" href="#">' . ($i ? $i : 1) . '</a>');
                    echo('</li>');
                } else {
                    echo('<li class="page-item">');
                    echo(str_replace("page-numbers", "page-link", $pl));
                    echo('</li>');
                }
            }
            echo('</ul></nav>');
        }
    }





endif;
