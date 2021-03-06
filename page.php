<?php
/**
 * The template for displaying all pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header('custom-page');

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main _mobileMargin<?php echo get_theme_mod( 'main_margins_mobile', '0' ); ?> _desktopMargin<?php echo get_theme_mod( 'main_margins', '0' ); ?>">
		<?php

		while ( have_posts() ) {
			the_post();

			the_content();
		}

		?>
	</main><!-- #primary -->
	<?php
					get_template_part( 'template-parts/content/contentMiddleBlock2' );
			?>
<?php
get_footer();
