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
			while ( have_posts() ) : the_post();?>
				<div class="col-md-12 with-background" style="background-image:url(https://images.pexels.com/photos/144474/pexels-photo-144474.jpeg?auto=compress&cs=tinysrgb&h=1450&w=1960);height: 100vh;">
					<div class="header__top">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum laboriosam alias eveniet aut consequuntur, rem ut non eius, voluptatum repellendus repudiandae odio quos enim nisi commodi corporis ipsam? In, quas.
					</div>
				</div>
				<div class="col-md-8 with-background" style="background-image:url(https://images.pexels.com/photos/674268/pexels-photo-674268.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260);height: 60vh;">
					<div class="header__left">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis tempore, mollitia reiciendis veritatis quia tenetur sed! Odio earum vitae voluptate, perspiciatis consequatur fuga, ducimus vel nemo saepe excepturi soluta tempora.
					</div>	
				</div>
				<div class="col-md-4 with-background" style="background-image:url(https://images.pexels.com/photos/713132/pexels-photo-713132.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);height: 60vh;">
					<div class="header__right">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores delectus velit cupiditate, fugiat facere blanditiis nostrum ducimus iure omnis amet consequuntur repellendus corporis tempore optio enim impedit odio at incidunt.
					</div>
				</div>

			<?php	
			endwhile; // End of the loop.
			?>

		</div>
	</div>

<?php

get_footer();
