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
	<!-- #Search Modal -->
<div style="display: none;" class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
			<div class="popBuscar">
				<label class="screen-reader-text" for="s">Search for:</label>
				<input type="text" value="<?php __('Buscar', 'woocommerce')?>" name="s" id="s" placeholder="Search for products">
				<input type="submit" id="searchsubmit" value="Search">
				<input type="hidden" name="post_type" value="product">
			</div>
		</form></div>
      
    </div>
  </div>
</div>
<!-- #Envios Modal -->
<div style="display: none;" class="modal fade" id="enviosModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      	<h4 style="text-align: center;">Envíos</h4>
      	<p>
      	<?php echo get_theme_mod( 'textoEnvios' ); ?>
      	</p>
      	</div>

      
    </div>
  </div>
</div>

<!-- #devoluciones Modal -->
<div style="display: none;" class="modal fade" id="devolucionesModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      	<h4 style="text-align: center;">Devoluciones</h4>
      	<?php echo get_theme_mod( 'textoCambioDevoluciones' ); ?>
      	</div>
      
    </div>
  </div>
</div>

<!-- #pago a plazos Modal -->
<div style="display: none;" class="modal fade" id="plazosModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      	<h4 style="text-align: center;">Pago a plazos</h4>
      	<?php echo get_theme_mod( 'textoPagoPlazos' ); ?>
      	</div>
      
    </div>
  </div>
</div>

<style type="text/css">	jQuery(".agotado").attr({"data-toggle": "modal","data-target": "#largeModal"});</style>
<!-- #disponibilidad Modal -->
<div style="display: none;" class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">'
.do_shortcode(get_field('disponible', $post_id)).
      '</div>
      
    </div>
  </div>
</div>
</div>
	<footer id="colophon" class="site-footer">
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer__item">
						<h3>NOSOTROS</h3>
						<nav>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-nosotros',
									'menu_id'        => 'nosotros-menu',
								) );
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>	
				<div class="col-lg-2 col-md-4 col-sm-6 ">
					<div class="footer__item">
						<h3>AYUDA</h3>
						<nav>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-ayuda',
									'menu_id'        => 'ayuda-menu',
								) );
							?>
						</nav>
						<div class="pagoafooter">
							<?php 

							$texto_plazos = get_theme_mod( 'textoPagoPlazos' );

							echo '<ul style="margin-top:-16px;"><li>
								  <a href="#" class="color-white" data-toggle="modal" data-target="#plazosModal">'.__( 'Pago a plazos', 'woocommerce' ).'</a></li></ul>';
								
						?>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="footer__item">
						<h3>TIENDA ONLINE</h3>
						<nav>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-tiendaOnline',
									'menu_id'        => 'tiendaOnline-menu',
								) );
							?>
						</nav>
					</div>
				</div>	
				<div class="col-lg-3 col-md-4">
					<div class="footer__item">
						<h3>ENCUENTRANOS EN:</h3>
						<nav>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-socialFooter',
									'menu_id'        => 'socialFooter-menu',
								) );
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
				<div class="col-lg-3 col-md-8">
					<div class="footer__item">
						<h3>NEWSLETTER</h3>
						<nav >
							<ul>
								<li><a href="#">SUSCRÍBETE PARA ENTERARTE DE TODAS<br> NUESTRAS NOVEDADES</a></li>
							</ul>
						</nav>
						<?php echo do_shortcode('[contact-form-7 id="912" title="newsletter" html_class="newsletter"]'); ?>
						<!-- <form action="#" class="newsletter">
							<input type="text" placeholder="Introduce tu email">
							<button>SUSCRIBETE</button>
						</form> -->
					</div>
				</div>
				<div class="col-md-12">
					<div class="copyright">
						<h4>COPYRIGHT @ 2018 BATANA</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="totop"><a href="#page"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a></div>
		<div class="carttotop"><a href="<?php echo wc_get_cart_url() ?>"><i class="fas fa-shopping-bag"></i></a></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-64292992-47"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-64292992-47');
</script>
</body>
</html>
