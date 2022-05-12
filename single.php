<?php get_header(); ?>
		<section>

			   <center>
			   	
			   		

				   	<h1><?php the_title(); ?></h1>
				   	 <h4>Resumen: <?php the_field('resumen'); ?></h4>
				   	<?php the_post_thumbnail("large"); ?>

				    <?php the_content(); ?>
				    <h4>Fuente: <?php the_field('fuente'); ?></h4>
				    

			<ul>
				<li><a href="https://www.facebook.com/">Facebook</a></li>
				<li><a href="https://twitter.com/">Twitter</a></li>
				<li><a href="https://www.instagram.com/">Instagram</a></li>
			</ul>
			    </center>

		</section>
		<?php get_footer(); ?>