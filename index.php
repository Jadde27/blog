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
				$articulos->the_post();

				the_title();
				echo '<hr>';
			} ?>

		   <center><h1 class="primero"><b>Última hora de la guerra en Ucrania, en directo | Zelenski afirma que Rusia ha rechazado una propuesta de tregua por la Pascua ortodoxa</b></h1></center>

		   <br>
		   <center><img src="https://imagenes.elpais.com/resizer/_D4DJV5FLm1AZBy_YSFadjfnWbs=/1960x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/HCOYMTV3VA2TBIB4F7E2ZO6BNU.jpg" width="600"></center>
		   <br>

		    <center><p class="textprimero">Biden anuncia un nuevo paquete de asistencia militar a Ucrania y prohibe a los barcos rusos atracar en los puertos de EE UU | Putin cancela la orden de asalto a la acería de Mariupol, pero mantiene el bloqueo | El alcalde de la ciudad asediada denuncia el hallazgo de una nueva fosa común de 30 metros | Sánchez y la primera ministra danesa, Mette Frederiksen, se reúnen con Zelenski en Kiev</p></center>
		    <br>

	       <center><h1 class="segundo">EL PAÍS ofrece de forma gratuita la última hora del conflicto en Ucrania como servicio público</h1></center>
	       <br>
	       <center><img src="https://www.semana.com/resizer/1xAB4K1SokhdCRn3NUT8N_vTYVY=/1200x675/filters:format(jpg):quality(50)//cloudfront-us-east-1.images.arcpublishing.com/semana/UNY2F3K2CNCTFFVST7EMXOTYEE.jpg" width="600"></center>
	       <br>

	       <center><p class="textsegundo">El presidente de Ucrania, Volodímir Zelenski, ha afirmado este jueves que Rusia ha rechazado una propuesta de tregua por la Pascua ortodoxa, el domingo. “Eso muestra muy bien cómo tratan en realidad a la fe cristiana”, ha señalado. Zelenski ha hecho estas declaraciones el día en el que presidente de Rusia, Vladímir Putin, ha anunciado que ha cancelado el asalto a la metalúrgica Azovstal, el último foco de resistencia en la asediada Mariupol (al sudeste de Ucrania). En su lugar, Putin ha dicho que seguirá bloqueando la urbe, donde aún quedan unos 2.000 combatientes ucranios, según su ministro de Defensa, Serguéi Shoigú. El alcalde de la ciudad , Vadim Boichenko, ha denunciado este jueves el hallazgo de una nueva fosa común de unos 30 metros de extensión cavada, según él, por las tropas rusas a unos 20 kilómetros de la ciudad. El presidente del Gobierno, Pedro Sánchez, ha llegado a Kiev con la primera ministra de Dinamarca, Mette Frederiksen, donde se han reunido con Zelenski. Sánchez ha anunciado el mayor envío de armas y equipamiento militar de España a Ucrania. El presidente de EE UU, Joe Biden, ha afirmado que prohibirá a los barcos rusos atracar en los puertos del país y ha anunciado un nuevo paquete de asistencia militar a Ucrania por valor de 800 millones de dólares.</p></center>
	       <br>

	      <center>
	      	<br>
	      	<h1 class="tercero">EE UU organizará conversaciones para la defensa de Ucrania la próxima semana</h1>
	      	<br>
	      	<img src="https://static.emol.cl/emol50/Fotos/2022/01/20/file_20220120115627.jpg" width="700">
	      	<br><br>
	      	<p class="texttercero">El secretario de Defensa de EE UU, Lloyd Austin, organizará conversaciones de defensa centradas en Ucrania la próxima semana en Alemania, ha confirmado el Pentágono este jueves. Austin se reunirá con aliados el 26 de abril en la base aérea de Ramstein, en el suroeste de Alemania, ha especificado el portavoz del Pentágono, John Kirby. El objetivo es reunir a las partes interesadas de todo el mundo en una serie de reuniones sobre las últimas necesidades de defensa de Ucrania para garantizar que se respete la seguridad y la soberanía de Ucrania a largo plazo”. Kirby no ha aclarado cuántos aliados participarían.</p>
	      	<br>

	      	<h1 class="cuarto">Zelenski propone imponer a Rusia un impuesto de guerra</h1>
	      	<br>
	      	<img src="https://img.lalr.co/cms/2022/04/05144459/Zelenzky-1.png?size=xs" width="400">
	      	<br><br>
	      	<p class="textcuarto">El presidente de Ucrania, Volodímir Zelenski, ha propuesto este jueves en su último discurso ante la mesa redonda ministerial del Banco Mundial imponer un impuesto de guerra a Rusia. "Necesitamos un impuesto especial para la guerra. Rusia, y después cualquier otro agresor, debe pagar por violar la estabilidad global. Tal impuesto para la guerra debe imponerse a todas, sin excepción, las transacciones comerciales con Rusia como Estado o con empresas rusas", ha dicho en un mensaje difundido en su canal de Telegram. Los fondos recaudados con un impuesto así, asegura Zelenski, podrían ayudar a Ucrania a reconstruir todo lo destruido en la guerra. "El mundo necesita una herramienta eficaz para responder a las acciones destructivas de aquellos que no quieren mantener la seguridad común y trabajar por el bien común de todos en el mundo”.</p>
	      	<br>
	      </center>
		</section>
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