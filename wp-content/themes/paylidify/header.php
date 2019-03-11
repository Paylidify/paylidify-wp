<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paylidify
 */
	global $wp;
	$current_url = home_url( $wp->request );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page-wrap">
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'paylidify' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php if (strpos($current_url, 'ca-en') !== false) { ?>
					<a href="/ca-en" class="custom-logo-link" rel="home" itemprop="url">
						<img src="/wp-content/uploads/2019/03/blue-logo.png" class="custom-logo" alt="Paylidify" itemprop="logo">
					</a>
				<?php } else { ?>
					<a href="/us-en" class="custom-logo-link" rel="home" itemprop="url">
						<img src="/wp-content/uploads/2019/03/blue-logo.png" class="custom-logo" alt="Paylidify" itemprop="logo">
					</a>
				<?php }

				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$paylidify_description = get_bloginfo( 'description', 'display' );
				if ( $paylidify_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $paylidify_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'paylidify' ); ?></button>
				<?php
				// Show CA menu if on CA-EN version
				if (strpos($current_url, 'ca-en') !== false) {
					wp_nav_menu( array(
						'theme_location' => 'header-menu-ca',
						'menu_id'        => 'primary-menu',
					) );
				} else {
					wp_nav_menu( array(
						'theme_location' => 'header-menu-us',
						'menu_id'        => 'primary-menu',
					) );
				}
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

	<div id="content" class="site-content">
