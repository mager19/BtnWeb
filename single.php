<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package batanaWeb
 */

get_header();
?>

	<div class="container-fluid contenedor-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="contenido__page">
					<div class="news__items">			
						<?php 
						while ( have_posts() ) : the_post(); ?>
							<h1 class="title__page"><?php the_title(); ?></h1>
							<?php 
								if( is_single()){?>
									<article class="article__single">
										<div class="row">
											<div class="col-md-12 order-1">
												<?php the_post_thumbnail( $size = 'post-thumbnail' ); ?>
											</div>
											
											<div class="col-md-12 order-2">
												<?php the_content(); ?>												
											</div>	
											
						
										</div>
									</article>
									<div class="boton__back mt-2">
										<a href="/news">Regresar a News</a>
									</div>
								<?php
								}	
							 ?>
						<!-- post -->
						<?php endwhile; ?>

					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
