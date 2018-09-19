<?php
/**
 * Template name: Template News
 *
 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package desarrollos
 */

get_header();

?>

<div class="container-fluid contenedor">
	<div class="row">
		<div class="col-md-12">
			<h1 class="title__page">NEWS</h1>
				<div class="contenido__page">
					<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="row">
							<div class="col-md-6">
								<h2><?php the_title(); ?></h2>
							</div>	
							<div class="col-md-6">
								<?php the_post_thumbnail( $size = 'post-thumbnail' ); ?>
							</div>
						</div>
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

<?php 
	get_footer();
?>