<?php
/**
 * Template name: Template My account
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

					<div class="account">
						<?php the_content(); ?>
					</div>

					
				<?php endwhile; ?>			
		</div>
	</div>
</div>

<?php 
	get_footer();
?>