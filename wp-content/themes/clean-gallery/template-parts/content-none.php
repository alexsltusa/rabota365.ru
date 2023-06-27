<?php
/**
* Template part for displaying a message that posts cannot be found.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Clean Gallery WordPress Theme
* @copyright Copyright (C) 2023 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<section class="no-results not-found">
    <header class="clean-gallery-page-header">
        <h1 class="clean-gallery-page-title"><?php esc_html_e( 'Nothing Found', 'clean-gallery' ); ?></h1>
    </header><!-- .clean-gallery-page-header -->

    <div class="clean-gallery-page-content clean-gallery-box">
            <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

                    <p><?php
                        printf(
                            wp_kses(
                                /* translators: 1: link to WP admin new post page. */
                                __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'clean-gallery' ),
                                array(
                                    'a' => array(
                                        'href' => array(),
                                    ),
                                )
                            ),
                            esc_url( admin_url( 'post-new.php' ) )
                        );
                    ?></p>

            <?php elseif ( is_search() ) : ?>

                    <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'clean-gallery' ); ?></p>
                    <?php get_search_form( array(
                        'echo'       => true,
                        'aria_label' => esc_attr__('No Posts Search Box','clean-gallery'),
                    ) ); ?>

            <?php else : ?>

                    <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'clean-gallery' ); ?></p>
                    <?php get_search_form( array(
                        'echo'       => true,
                        'aria_label' => esc_attr__('No Posts Search Box','clean-gallery'),
                    ) ); ?>

            <?php endif; ?>
    </div><!-- .clean-gallery-page-content -->
</section><!-- .no-results -->