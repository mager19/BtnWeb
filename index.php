<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package batanaWeb
 */

get_header();
?>

	<div class="container-fluid contenedor-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title__page">NEWS</h1>
					<div class="contenido__page">
						<div class="news__items">			
						<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<article>
								<div class="row">
									
									<div class="col-md-6">
										<h2><?php the_title(); ?></h2>
										<?php the_content(); ?>
										<a href="<?php the_permalink(); ?>">VER MÁS</a>
									</div>	
									<div class="col-md-6">
										<?php the_post_thumbnail( $size = 'post-thumbnail' ); ?>
									</div>
				
								</div>
							</article>
						<!-- post -->
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
						<?php endif; ?>		
						</div>
					</div>
			</div>
		</div>
	</div>

<?php
get_footer();
