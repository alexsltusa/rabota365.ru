<?php

if( get_theme_mod( 'cta_display_option', true ) ) :
   
    $title = get_theme_mod( 'cta_title' );
    $sub_title = get_theme_mod( 'cta_sub_title' );
    $image = get_theme_mod( 'cta_image' );
    $text = get_theme_mod( 'cta_text' );
    $button_label = get_theme_mod( 'cta_button_label' );
    $link = get_theme_mod( 'cta_link' );

?>


	<div class="cta-block-1 cta-block-wrapper spacer">
		<div class="container">
			<div class="cta-image-wrapper">
				
				<div class="cta-featured-content">
					<h6 class="cta-title"><?php echo esc_html( $sub_title ); ?></h6>
					<h3 class="cta-title"><?php echo esc_html( $title ); ?></h2>
					<p><?php echo wp_kses_post( $text ); ?></p>
					<a class="btn btn-primary" href="<?php echo esc_url( $link ); ?>" target="_blank"><?php echo esc_html( $button_label ); ?></a>
				</div>
				<div class="cta-featured-image">
					<?php if( $image ) { ?>
						<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>">
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

<?php endif;