<?php
/**
 * Template Name: Left Sidebar
 * Template Post Type: post
 * The template used for displaying sidebar at left in single post.
 *
 * @package Wp Magazine
 */
get_header(); ?>
<div class="inside-page content-area">

	<div class="container">
		<div class="row"> 
			      <div class="col-sm-3"><?php get_sidebar(); ?></div>

      	<div class="col-sm-9">

		<section class="page-section">		          
		      <div class="detail-content">	

	              <?php while ( have_posts() ) : the_post(); ?>
	                  <?php get_template_part( 'template-parts/content', 'single' ); ?>
	              <?php endwhile; // End of the loop. ?>

	              <?php comments_template(); ?>         

	          </div> <!-- /.end of detail-content -->		  
		</section><!-- /.end of section -->
	</div>
	</div>
</div>
</div>
<?php get_footer(); ?>