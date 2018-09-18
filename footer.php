<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package batanaWeb
 */

?>
<?php 
	if(is_woocommerce()){ ?>
		</div>
		</div>
<?php } ?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<div class="footer__item">
						<h3>NOSOTROS</h3>
						<nav id="site-navigation" class="main-navigation">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-nosotros',
									'menu_id'        => 'nosotros-menu',
								) );
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>	
				<div class="col-md-2">
					<div class="footer__item">
						<h3>AYUDA</h3>
						<nav id="site-navigation" class="main-navigation">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-ayuda',
									'menu_id'        => 'ayuda-menu',
								) );
							?>
						</nav>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer__item">
						<h3>TIENDA ONLINE</h3>
						<nav id="site-navigation" class="main-navigation">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-tiendaOnline',
									'menu_id'        => 'tiendaOnline-menu',
								) );
							?>
						</nav>
					</div>
				</div>	
				<div class="col-md-3">
					<div class="footer__item">
						<h3>ENCUENTRANOS EN:</h3>
						<nav id="site-navigation" class="main-navigation socialFooter">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-socialFooter',
									'menu_id'        => 'socialFooter-menu',
								) );
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer__item">
						<h3>NEWSLETTER</h3>
						<nav id="site-navigation" class="main-navigation socialFooter">
							<ul>
								<li><a href="#">SUSCRÍBETE PARA ENTERARTE DE TODAS<br> NUESTRAS NOVEDADES</a></li>
							</ul>
						</nav>

						<form action="#" class="newsletter">
							<input type="text" placeholder="Introduce tu email">
							<button>SUSCRÍBETE</button>
						</form>
					</div>
				</div>
				<div class="col-md-12">
					<div class="copyright">
						<h4>COPYRIGHT @ 2018 BATANA</h4>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
