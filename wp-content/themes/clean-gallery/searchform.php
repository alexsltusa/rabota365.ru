<?php
/**
* The file for displaying the search form
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2023 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label>
    <span class="clean-gallery-sr-only"><?php echo esc_html_x( 'Search for:', 'label', 'clean-gallery' ); ?></span>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr( clean_gallery_search_box_placeholder_text() ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</label>
<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'clean-gallery' ); ?>" />
</form>