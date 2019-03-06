<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paylidify
 */
global $wp;
$current_url = home_url( $wp->request );
$in_canada = ( strpos($current_url, 'ca-en' ) !== false);
?>

		</div><!-- #content -->
		<footer id="colophon" class="site-footer">
			<div class="elementor-row">
				<div class="footer-logo">

					<?php if (strpos($current_url, 'ca-en') !== false) { ?>
						<a href="/ca-en" class="custom-logo-link" rel="home" itemprop="url">
							<img width="204" height="69" src="/wp-content/uploads/2019/02/paylidify-logo-blue.png" class="custom-logo" alt="Paylidify" itemprop="logo">
						</a>
					<?php } else { ?>
						<a href="/us-en" class="custom-logo-link" rel="home" itemprop="url">
							<img width="204" height="69" src="/wp-content/uploads/2019/02/paylidify-logo-blue.png" class="custom-logo" alt="Paylidify" itemprop="logo">
						</a>
					<?php } ?>

					<div class="copyright">
						<?php if ( is_active_sidebar( 'footer-copyright' ) ) { ?>
							<div id="footer-copyright" class="widget-area">
								<?php dynamic_sidebar( 'footer-copyright' ); ?>
							</div>
						<?php } ?>
					</div>
				</div>

				<nav id="footer-navigation" class="footer-navigation">
					<?php
					// Show CA menu if on CA-EN version
					if ($in_canada) {
						wp_nav_menu( array(
							'theme_location' => 'footer-menu-ca',
							'menu_id'        => 'footer-menu',
						) );
					} else {
						wp_nav_menu( array(
							'theme_location' => 'footer-menu-us',
							'menu_id'        => 'footer-menu',
						) );
					}
					?>
				</nav>
			</div>

			<div class="elementor-row">
				<div class="elementor-column elementor-col-33">
					<?php if ( $in_canada ) { ?>
						<div class="country-flag country-flag-us"><a href="/us-en"></a></div>
						<div class="country-flag country-flag-ca"><a class="active" href="/ca-en"></a></div>
					<?php } else { ?>
						<div class="country-flag country-flag-us"><a class="active" href="/us-en"></a></div>
						<div class="country-flag country-flag-ca"><a href="/ca-en"></a></div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer-left' ) ) { ?>
						<div id="footer-widget" class="widget-area">
							<?php dynamic_sidebar( 'footer-left' ); ?>
						</div>
					<?php } ?>
				</div>

				<div class="elementor-column elementor-col-33">
					<?php if ( is_active_sidebar( 'footer-center' ) ) { ?>
						<div id="footer-widget" class="widget-area">
							<?php dynamic_sidebar( 'footer-center' ); ?>
						</div>
					<?php } ?>
				</div>

				<div class="elementor-column elementor-col-33">
					<?php if ( is_active_sidebar( 'footer-right' ) ) { ?>
						<div id="footer-widget" class="widget-area">
							<?php dynamic_sidebar( 'footer-right' ); ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->
</div><!-- #page-wrap -->
	<script>
		jQuery(document).ready(function() {
			jQuery(".custom-image-circle .elementor-image-box-title").fitText();
			jQuery(".custom-image-box .elementor-image-box-title").fitText();
			jQuery(".custom-image-circle .elementor-image-box-description").fitText(1.5);
			jQuery(".custom-image-box .elementor-image-box-description").fitText(1.5);
			jQuery(".elementor-widget.smaller-header .elementor-image-box-title").fitText(1.2);
			jQuery(".elementor-widget.smaller-description .elementor-image-box-description").fitText(1.7);
		})
	</script>
<?php wp_footer(); ?>

</body>
</html>
