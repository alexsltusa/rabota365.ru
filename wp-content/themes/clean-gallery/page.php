<?php
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2023 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="clean-gallery-outer-wrapper">
<div id="clean-gallery-content" class="clean-gallery-site-content clearfix">

<div class="clean-gallery-fullwidth-area clearfix" id="clean-gallery-fullwidth-area">
<?php dynamic_sidebar( 'top-fullwidth-area' ); ?>
</div>

<div class="clean-gallery-site-content-inside clearfix">
<div id="clean-gallery-sitemain-wrapper" class="clean-gallery-sitemain-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">

<?php clean_gallery_before_main_content(); ?>

<div class="clean-gallery-content-top clearfix" id="clean-gallery-content-top">
<?php dynamic_sidebar( 'top-content' ); ?>
</div>

<div id="clean-gallery-primary" class="clean-gallery-content-area">
<div id="clean-gallery-main" class="clean-gallery-site-main clearfix" role="main">

<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;
    ?>

<?php endwhile; ?>

</div><!-- #clean-gallery-main -->
</div><!-- #clean-gallery-primary -->

<div class="clean-gallery-content-bottom clearfix" id="clean-gallery-content-bottom">
<?php dynamic_sidebar( 'bottom-content' ); ?>
</div>

<?php clean_gallery_after_main_content(); ?>

</div>
</div>

<?php get_sidebar(); ?>
</div>

<div class="clear"></div>
<div class="clean-gallery-fullwidth-area-bottom clearfix" id="clean-gallery-fullwidth-area-bottom">
<?php dynamic_sidebar( 'bottom-fullwidth-area' ); ?>
</div>

</div><!-- #content -->
</div>

<?php get_footer(); ?>