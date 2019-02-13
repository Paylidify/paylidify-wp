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

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<nav id="footer-navigation" class="footer-navigation">
			<?php
			// Show CA menu if on CA-EN version
			global $wp;
			$current_url = home_url( $wp->request );
			if (strpos($current_url, 'ca-en') !== false) {
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
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'paylidify' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'paylidify' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'paylidify' ), 'paylidify', '<a href="http://paylidify.com">Paylidify</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
