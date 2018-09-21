<?php
/**
 * Template name: Template Home
 *
 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package desarrollos
 */

get_template_part('template-parts/header', 'home'); ?>

	<div class="container-fluid">
		<div class="row">
			<?php
			while ( have_posts() ) : the_post();

				$imagen_superior = get_theme_mod( 'imagen_superior' );
				$responsive_imagen_superior = get_theme_mod( 'responsive_imagen_superior' );
				$imagen_abajoizquierda = get_theme_mod( 'imagen_abajoizquierda' );
				$imagen_abajoderecha = get_theme_mod( 'imagen_abajoderecha' );
				$texto_abajoizquierda = get_theme_mod( 'texto_abajoizquierda' );
				$texto_abajoderecha = get_theme_mod( 'texto_abajoderecha' );
				$enlace_abajoizquierda = get_theme_mod( 'enlace_abajoizquierda' );
				$enlace_abajoderecha = get_theme_mod( 'enlace_abajoderecha' );
				

			?>
				<div class="col-md-12 with-background superior d-none d-sm-block" style="background-image:url(<?php echo $imagen_superior; ?>);height: 90vh;">
					<div class="header__top">
					</div>
				</div>
				
				<div class="col-md-8 superior__moviles d-block d-sm-none" style="background-image:url(<?php 
					if($responsive_imagen_superior){
						echo $responsive_imagen_superior;
					}else
					echo $imagen_superior; 

				?>);">
					<div class="header__top">
					</div>
				</div>

				<div class="col-md-8 with-background" style="background-image:url(<?php echo $imagen_abajoizquierda; ?>);">
					<div class="header__left">
						<h1 class="titulos__home"><a href="<?php echo esc_url($enlace_abajoizquierda); ?>"><?php echo $texto_abajoizquierda; ?></a></h1>
					</div>	
				</div>
				<div class="col-md-4 with-background" style="background-image:url(<?php echo $imagen_abajoderecha; ?>);">
					<div class="header__right">
						<h2 class="titulos__home"><a href="<?php echo esc_url($enlace_abajoderecha); ?>"><?php echo $texto_abajoderecha; ?></a></h2>
					</div>
				</div>

			<?php	
			endwhile; // End of the loop.
			?>

		</div>
	</div>

	<div class="container contenedor">
		<div class="row">
			<div class="col-md-12">
				<div class="home__destacados">
					<h2 class="titulo_seccion">
						PV / 18<br> DESTACADOS
					</h2>
					<div class="destacados__carrousel">
						<?php $args = array( 'post_type' => 'product', 'tax_query' => array( array( 'taxonomy' => 'product_visibility', 'field' => 'name', 'terms' => 'featured', ), ), ); 
							$loop = new WP_Query( $args ); 

							if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<div class="destacados__carrousel__item">
								<?php wc_get_template_part( 'content', 'product' ); ?>
							</div>
							
							<?php endwhile; ?>
							<!-- post navigation -->
							<?php else: ?>
							<!-- no posts found -->
							<?php endif; ?>
							<?php wp_reset_postdata(); ?>
		 				</div>
					</div>
			</div>
		</div>
	</div>

<?php

get_footer();
