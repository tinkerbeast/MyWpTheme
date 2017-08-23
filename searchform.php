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
<div id="search"> <!-- #search is part of WordPress 1.5 site architecture -->
<label for="s" class="sr-only">Search</label>
<form  id="searchform "class="form-inline mt-2 mt-md-0"> <!-- #searchform is part of WordPress 1.5 site architecture -->    
    <div class="input-group">
    <input class="form-control btn-outline-secondary" type="search" 
           placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>"
           value="<?php echo get_search_query() ?>" name="s"
           title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
    <span class="input-group-btn">
    <button id="searchsubmit" class="btn btn-outline-secondary" type="submit"
            value="<?php echo esc_attr_x('Search', 'submit button') ?>" >Search</button>
        <!-- #searchsubmit is part of WordPress 1.5 site architecture -->    
    </span>
    </div>
</form>
</div>