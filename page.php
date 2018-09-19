<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package batanaWeb
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

					<div class="contenido__page">
						<div class="row">
							<div class="col-md-12">
								<?php the_content(); ?>
							</div>
						</div>
						
					</div>
					<?php endwhile; ?>			
			</div>
		</div>
	</div>

<?php
get_footer();
