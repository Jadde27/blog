<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>	
		<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/estilos.css">	

	</head>
	<body>
		<header class="container">
			<center>
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv_UmK3pCeU7oB59KwTOnCfrSeOOpWFDjL0A&usqp=CAU" width="200">

				<h1><?php bloginfo('name'); ?></h1>

				<ul class="menu">
					<li><a href="#">Inicio</a></li>
					<li>Destacados</li>
					<li>Deportres</li>
					<li>Espectáculos</li>
				</ul>
			</center>
		</header>
		<section class="container">

			<?php $articulos = new wp_Query([
                        'showposts' => 3,
                    ]);
			while ($articulos->have_posts()) {
				$articulos->the_post(); ?>





				<center><h1 class="primero"><b><?php the_title(); ?></b></h1></center>

		   <br>
	   <center><?php the_post_thumbnail("medium"); ?></center>
		   <br>

		    <center><?php the_excerpt(); ?></center>
		    <br>






			<?php } ?>
			
			

		   
		<footer class="container">
			<ul>
				<li><a href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
				<li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="http://www.linkedin.com/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
			</ul>
		</footer>
	</body>
</html>