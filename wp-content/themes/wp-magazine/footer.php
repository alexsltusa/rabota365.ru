<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Wp Magazine
 */
?>


	<footer class="main">
		<div class="container">
			<?php 
dynamic_sidebar( 'footer-1' );
?>
		</div>
	</footer>
		<div class="copyright text-center">
			<?php 
?>
			    	
			    	<a href="<?php 
echo  esc_url( 'https://androidprog.com/' ) ;
?>" target="_blank"  title="Игры на андроид"><?php 
esc_html_e( 'Игры андроид', 'wp-magazine' );
?></a>
			  	<?php 
?>
		</div>
		<div class="scroll-top-wrapper"> <span class="scroll-top-inner"><i class="fa fa-2x fa-angle-up"></i></span></div>
		<?php 
if ( has_action( 'wp-magazine-layouts/layouts' ) ) {
    do_action( 'wp-magazine-layouts/layouts' );
}
?>
		

		<?php 
wp_footer();
?>
	</body>
</html>