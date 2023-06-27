<?php
/**
* Custom Hooks
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2023 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function clean_gallery_before_header() {
    do_action('clean_gallery_before_header');
}

function clean_gallery_after_header() {
    do_action('clean_gallery_after_header');
}

function clean_gallery_after_primary_menu() {
    do_action('clean_gallery_after_primary_menu');
}

function clean_gallery_before_main_content() {
    do_action('clean_gallery_before_main_content');
}

function clean_gallery_after_main_content() {
    do_action('clean_gallery_after_main_content');
}

function clean_gallery_before_single_post() {
    do_action('clean_gallery_before_single_post');
}

function clean_gallery_after_single_post_title() {
    do_action('clean_gallery_after_single_post_title');
}

function clean_gallery_after_single_post_content() {
    do_action('clean_gallery_after_single_post_content');
}

function clean_gallery_after_single_post() {
    do_action('clean_gallery_after_single_post');
}

function clean_gallery_before_single_page() {
    do_action('clean_gallery_before_single_page');
}

function clean_gallery_after_single_page_title() {
    do_action('clean_gallery_after_single_page_title');
}

function clean_gallery_after_single_page_content() {
    do_action('clean_gallery_after_single_page_content');
}

function clean_gallery_after_single_page() {
    do_action('clean_gallery_after_single_page');
}

if ( !(clean_gallery_get_option('enable_widgets_block_editor')) ) {
    // Disables the block editor from managing widgets in the Gutenberg plugin.
    add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

    // Disables the block editor from managing widgets.
    add_filter( 'use_widgets_block_editor', '__return_false' );
}