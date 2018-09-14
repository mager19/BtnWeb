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
				$imagen_abajoizquierda = get_theme_mod( 'imagen_abajoizquierda' );
				$imagen_abajoderecha = get_theme_mod( 'imagen_abajoderecha' );
				$texto_abajoizquierda = get_theme_mod( 'texto_abajoizquierda' );
				$texto_abajoderecha = get_theme_mod( 'texto_abajoderecha' );

			?>
				<div class="col-md-12 with-background" style="background-image:url(<?php echo $imagen_superior; ?>);height: 90vh;">
					<div class="header__top">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum laboriosam alias eveniet aut consequuntur, rem ut non eius, voluptatum repellendus repudiandae odio quos enim nisi commodi corporis ipsam? In, quas.
					</div>
				</div>
				<div class="col-md-8 with-background" style="background-image:url(<?php echo $imagen_abajoizquierda; ?>);">
					<div class="header__left">
						<h3><?php echo $texto_abajoizquierda; ?></h3>
					</div>	
				</div>
				<div class="col-md-4 with-background" style="background-image:url(<?php echo $imagen_abajoderecha; ?>);">
					<div class="header__right">
						<h3><?php echo $texto_abajoderecha; ?></h3>
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
