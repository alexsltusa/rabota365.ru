/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	
	// Header Options: Site Identity
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );


	wp.customize( 'wp_magazine_logo_size', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).css( 'font-size', to + "px" );
			$( 'header .logo img' ).css( 'height', ( to * 2 ) + "px" );
		} );
	} );


	wp.customize( 'site_title_color_option', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).css( 'color', to );
			$( '.site-description' ).css( 'color', to );
		} );
	} );

	wp.customize( 'site_identity_font_family', function( value ) {
		value.bind( function( to ) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + to + ":200,300,400,500,600,700,800,900|' rel='stylesheet' type='text/css'>");
			$( '.site-title a' ).css( 'font-family', to );
		} );
	} );


	wp.customize( 'header_image_height', function( value ) {
		value.bind( function( to ) {
			$( 'section.top-bar' ).css( 'padding', to + "px 0" );
		} );
	} );





	// General Options: Colors and Fonts

	wp.customize( 'container_width', function( value ) {
		value.bind( function( to ) {
			$( '.container' ).css( 'max-width', to + 'px' );
		} );
	} );

	wp.customize( 'category_news_title_colors', function( value ) {
		value.bind( function( to ) {
			$( '.category-news-title a' ).css( 'color', to );
		} );
	} );


	wp.customize( 'featured_news_title_colors', function( value ) {
		value.bind( function( to ) {
			$( '.featured-news-title a' ).css( 'color', to );
		} );
	} );


	wp.customize( 'font_color', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'color', to );
		} );
	} );


	wp.customize( 'menu_font_color', function( value ) {
		value.bind( function( to ) {
			$( '#primary-menu > li > a' ).css( 'color', to );
		} );
	} );

	wp.customize( 'body_background_color', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'background-color', to );
		} );
	} );

	wp.customize( 'menu_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.main-nav' ).css( 'background-color', to );
			$( '.main-navigation ul ul.sub-menu' ).css( 'background-color', to );
			$( '.main-navigation .nav-menu' ).css( 'background-color', to );
		} );
	} );


	wp.customize( 'heading_title_color', function( value ) {
		value.bind( function( to ) {
			$( 'h1,h2,h3,h4,h5,h6' ).css( 'color', to );
		} );
	} );

	wp.customize( 'heading_link_color', function( value ) {
		value.bind( function( to ) {
			$( 'h2 a, h3 a, h4 a,h2 a:visited, h3 a:visited, h4 a:visited' ).css( 'color', to );
		} );
	} );


	wp.customize( 'top_bar_background_color', function( value ) {
		value.bind( function( to ) {
			$( 'header .top-info.pri-bg-color' ).css( 'background-color', to );
		} );
	} );

	
	wp.customize( 'button_color', function( value ) {
		value.bind( function( to ) {
			$( 'header .search-submit,.widget .profile-link, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,form#wte_enquiry_contact_form input#enquiry_submit_button,#blossomthemes-email-newsletter-626 input.subscribe-submit-626, .jetpack_subscription_widget,.widget_search,.search-submit,.widget-instagram .owl-carousel .owl-nav .owl-prev, .widget-instagram .owl-carousel .owl-nav .owl-next,.widget_search input.search-submit' ).css( 'background-color', to );
			$( '.headline-ticker-wrapper .headline-heading' ).css( 'background-color', to );
		} );
	} );

	wp.customize( 'footer_background_color', function( value ) {
		value.bind( function( to ) {
			$( 'footer.main' ).css( 'background-color', to );
		} );
	} );


	wp.customize( 'font_family', function( value ) {
		value.bind( function( to ) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + to + ":200,300,400,500,600,700,800,900|' rel='stylesheet' type='text/css'>");
			$( 'body' ).css( 'font-family', to );
		} );
	} );


	wp.customize( 'font_size', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'font-size', to );
		} );
	} );

	wp.customize( 'wp_magazine_font_weight', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'font-weight', to );
		} );
	} );


	wp.customize( 'line_height', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'line-height', to );
		} );
	} );



	// General Options: Heading Options

	wp.customize( 'heading_font_family', function( value ) {
		value.bind( function( to ) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + to + ":200,300,400,500,600,700,800,900|' rel='stylesheet' type='text/css'>");
			$( 'h1, h2, h3, h4, h5, h6' ).css( 'font-family', to );
		} );
	} );


	wp.customize( 'heading_font_weight', function( value ) {
		value.bind( function( to ) {
			$( 'h1, h2, h3, h4, h5, h6' ).css( 'font-weight', to );
		} );
	} );



	wp.customize( 'wp_magazine_heading_1_size', function( value ) {
		value.bind( function( to ) {
			$( '.content-area h1' ).css( 'font-size', to + 'px' );
		} );
	} );

	wp.customize( 'wp_magazine_heading_2_size', function( value ) {
		value.bind( function( to ) {
			$( '.content-area h2' ).css( 'font-size', to + 'px' );
		} );
	} );

	wp.customize( 'wp_magazine_heading_3_size', function( value ) {
		value.bind( function( to ) {
			$( 'h3' ).css( 'font-size', to + 'px' );
		} );
	} );

	wp.customize( 'wp_magazine_heading_4_size', function( value ) {
		value.bind( function( to ) {
			$( 'h4' ).css( 'font-size', to + 'px' );
		} );
	} );

	wp.customize( 'wp_magazine_heading_5_size', function( value ) {
		value.bind( function( to ) {
			$( 'h5' ).css( 'font-size', to + 'px' );
		} );
	} );

	wp.customize( 'wp_magazine_heading_6_size', function( value ) {
		value.bind( function( to ) {37
			$( 'h6' ).css( 'font-size', to + 'px' );
		} );
	} );



	// Theme Options: Blog Posts

	wp.customize( 'blog_post_view', function( value ) {37
		value.bind( function( to ) {
			jQuery( 'div.blog-list-block' ).attr( 'class', 'blog-list-block' );			
			$( 'div.blog-list-block'  ).addClass( to );			
		} );
	} );




	// Theme Options: Slider Posts

	wp.customize( 'wp_magazine_slider_layouts', function( value ) {
		value.bind( function( to ) {
			var slider_class;
			var remove_class;
			if( to == 'one' ) {
				slider_class = "slider-banner-1";
				remove_class = "slider-banner-2 slider-banner-3";
			}
			if( to == 'two' ) {
				slider_class = "slider-banner-2";
				remove_class = "slider-banner-1 slider-banner-3";
			}
			if( to == 'three' ) {
				slider_class = "slider-banner-3";
				remove_class = "slider-banner-1 slider-banner-2";
			}			
			$( 'div.slider-banner'  ).removeClass( remove_class );
			$( 'div.slider-banner'  ).addClass( slider_class );
		} );
	} );


	// Theme Options: Featured Posts

	wp.customize( 'wp_magazine_featured_layouts', function( value ) {
		value.bind( function( to ) {			
			$( 'div.featured-layout').attr( 'class', 'featured-layout featured-blog-view-' + to );
		} );
	} );


	


} )( jQuery );
