<?php get_header(); ?>
		<section>

			   <center>
			   	
			   		<?php the_post_thumbnail("large"); ?>

				   	<h1><?php the_title(); ?></h1>

				    <?php the_content(); ?>

			<ul>
				<li><a href="https://www.facebook.com/">Facebook</a></li>
				<li><a href="https://twitter.com/">Twitter</a></li>
				<li><a href="https://www.instagram.com/">Instagram</a></li>
			</ul>
			    </center>

		</section>
		<?php get_footer(); ?>