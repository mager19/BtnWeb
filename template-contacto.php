<?php
/**
 * Template name: Template Contacto
 *
 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package desarrollos
 */

get_header();

?>

<div class="container contenedor">
	<div class="row">
		<div class="col-md-12">
			<?php 
				while ( have_posts() ) : the_post(); ?>
				<!-- post -->
				<h1 class="title__page"><?php the_title(); ?></h1>

				<div class="contenido__page contacto">
					<div class="row">
						<div class="col-md-6">
							<div class="item__contacto">
								<h3>LLÁMANOS</h3>
								<a href="tel:<?php the_field( 'telefono' ); ?>" class="telefono"><?php the_field('telefono'); ?></a>
							</div>

							<div class="item__contacto">
								<h3>ENVÍA UN EMAIL A:</h3>
								<a href="mailto:<?php the_field( 'email' ); ?>">e-mail: <?php the_field( 'email' ); ?></a>
							</div>

							<div class="item__contacto">
								<h3>HORARIO DE ATENCIÓN AL <br>
								<span>CLIENTE POR TELÉFONO:</span> </h3>
								<p><?php the_field( 'horario' ); ?></p>
							</div>

							<div class="item__contacto ">
								<nav id="site-navigation" class="main-navigation socialFooter">
								<?php
										wp_nav_menu( array(
											'theme_location' => 'menu-socialFooter',
											'menu_id'        => 'socialFooter-menu',
										) );
									?>
								</nav><!-- #site-navigation -->						
							</div>

							<div class="item__contacto  item__contacto__newsletter">
								<div class="footer__item">
									<h3>NEWSLETTER</h3>
									<p>SUSCRÍBETE PARA ENTERARTE DE TODAS<br> NUESTRAS NOVEDADES</p>
										
									<form action="#" class="newsletter">
										<input type="text" placeholder="Introduce tu email">
										<button>SUSCRÍBETE</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="item__contacto">
								<h3>CONTACTA CON NOSOTROS</h3>

								<?php echo do_shortcode( '[contact-form-7 id="298" title="Formulario de contacto 1"]' ); ?>
							</div>
						</div>
					</div>
					
				</div>
				<?php endwhile; ?>			
		</div>
	</div>
</div>

<?php 
	get_footer();
?>