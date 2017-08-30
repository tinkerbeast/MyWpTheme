<?php
/**
 * Displays the searchform of the theme.
 *
 * @package gosarin.com
 * @subpackage myWpTheme
 * @since myWpTheme 0.0
 */
// TODO: with id present, searchform can only be included once in the entire page
?>
<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
<div id="search"> <!-- #search is part of WordPress 1.5 site architecture -->
<label for="<?php echo $unique_id; ?>" class="sr-only"><?php _e('Search', 'mywptheme-en-us') ?></label>
<form role="search" id="searchform "class="form-inline mt-2 mt-md-0"> <!-- #searchform is part of WordPress 1.5 site architecture -->    
    <div class="input-group">
    <input type="search" id="<?php echo $unique_id; ?>" class="form-control btn-outline-secondary" title="<?php echo esc_attr_x('Search for:', 'label', 'mywptheme-en-us') ?>"           
           name="s" value="<?php echo get_search_query() ?>" placeholder="<?php echo esc_attr_x('Search …', 'placeholder', 'mywptheme-en-us') ?>" />
    <span class="input-group-btn">
    <!-- TODO: Search text is rendered twice in screen readers -->    
    <button id="searchsubmit" class="btn btn-outline-secondary" type="submit"
            value="<?php echo esc_attr_x('Search', 'submit button') ?>" ><?php _e('Search', 'mywptheme-en-us') ?></button>
        <!-- #searchsubmit is part of WordPress 1.5 site architecture -->    
    </span>
    </div>
</form>
</div>