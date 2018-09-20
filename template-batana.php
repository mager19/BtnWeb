<?php
/**
 * Template name: Template Batana
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

				<div class="contenido__page">
					<div class="row">
						<div class="col-md-6 order-2">
							<?php the_content(); ?>
						</div>
						<div class="col-md-6 order-1">
							<?php the_post_thumbnail( $size = 'full' ); ?>
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