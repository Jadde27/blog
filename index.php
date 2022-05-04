<?php get_header(); ?>

		<center><h1><?php bloginfo('name'); ?></h1></center>
		<section class="container">

			<?php $articulos = new wp_Query([
                        'showposts' => 3,
                    ]);
			while ($articulos->have_posts()) {
				$articulos->the_post(); ?>






				<div class="row caja">
					
					<div class="col-sm-3">
						<?php the_post_thumbnail("thumbnail"); ?>
					</div>

					<div class="col-sm-9">
						<center><h1 class="primero"><a href="<?php the_permalink(); ?>"><b><?php the_title(); ?></b></a></h1></center>

						<p>Publicado por <?php the_author(); ?> el <?php the_time("d/m/Y"); ?></p>
						<?php the_excerpt(); ?>
					</div>
				</div>	






			<?php } ?>
			
			

		   
		<?php get_footer(); ?>