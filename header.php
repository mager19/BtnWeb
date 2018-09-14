<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package batanaWeb
 */

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
<div id="page" class="site">
	<header class="header--home">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<div class="site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">	<?php the_custom_logo();?>
						</a>
						<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1> -->
					</div><!-- .site-branding -->
				</div>
				
				<div class="col-md-7">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'batanaweb' ); ?></button>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
				</div>

				<div class="col-md-3">
					<nav class="menu-aux">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-aux',
							'menu_id'        => 'auxiliar-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
				</div>

				
			</div>
		</div>
	</header><!-- #masthead -->

