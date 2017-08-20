<?php
/**
 * Displays the searchform of the theme.
 *
 * @package gosarin.com
 * @subpackage myWpTheme
 * @since myWpTheme 0.0
 */
?>
<form class="form-inline mt-2 mt-md-0">
    
    <div class="input-group">
    <input class="form-control btn-outline-secondary" type="search" 
           placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>"
           value="<?php echo get_search_query() ?>" name="s"
           title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
    <span class="input-group-btn">
    <button class="btn btn-outline-secondary" type="submit"
            value="<?php echo esc_attr_x('Search', 'submit button') ?>" >Search</button>
    </span>
    </div>
</form>