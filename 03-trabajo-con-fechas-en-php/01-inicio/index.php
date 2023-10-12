<?php
// Configura la salida de errores por pantalla
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

//UNIX timestamp o marca temporal es el numero de segundos transcurridos desde el 1 de Enero de 1970
$fecha = time(); // Obtiene la hora actual en formato UNIX TIMESTAMP
echo $fecha;

// date( $format, $timestamp ); / Convierte un timestamp a una fecha legible por humanos
$horario_actual = date("Y-m-d H:i");
echo $horario_actual;
//Para mas info, buscar la pagina DATE en la documentacion de PHP
/* FORMATOS DE DIA MES Y AÑO
	d - Dia del mes con ceros delante si aplica (01 - 31)
	D - Nombre corto para el dia de la semana (Mon - Sun)
	m - Mes con numero con ceros delante si aplica (01 a 12)
	M - Nombre corto del mes (Ene - Dic)
	F - Mes Completo(Enero - Febrero - Marzo)
	y - Año de dos digitos (75)
	Y - Año completo (1975)
*/

/* FORMATOS DE HORA
	h - Hora de 01 a 12
	H - Hora de 00 a 24
	i - Minutos con ceros delante si aplica (00 a 60)
	s - Segundos con ceros delante si aplica (00 a 60)
	A - AM o PM
	a - am or pm
	S - Segundos sin ceros delante (59)
*/



$all_posts = [
	[
		'id' => 1,
		'title' => 'Lorem ipsum dolor sit amet',
		'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae pulvinar turpis',
		'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae pulvinar turpis. Nam ut arcu tellus. Morbi sit amet elit lacinia, tincidunt leo a, posuere mi. Mauris nec odio at quam lacinia consequat. Fusce mattis orci ex, eget accumsan neque vehicula et. Vivamus consectetur tempor lacus, in tincidunt massa rutrum ut. Pellentesque augue felis, iaculis eu interdum et, semper eu purus. Vestibulum a viverra justo.',
		'published_on' => '2018-01-11 10:15:00',
	],
	[
		'id' => 2,
		'title' => 'Nunc eget enim vulputate',
		'excerpt' => 'Integer placerat hendrerit pharetra. Nunc eget enim vulputate, efficitur dolor pretium',
		'content' => 'Integer placerat hendrerit pharetra. Nunc eget enim vulputate, efficitur dolor pretium, pharetra nulla. Proin mattis aliquam sem. Morbi vel mi ac magna consequat tempus vitae eget diam. Aliquam ac sapien a tortor rutrum faucibus nec nec urna. Ut et nisl magna. Vivamus elit risus, rhoncus vitae elit suscipit, porta pulvinar justo. Aliquam sodales urna eu scelerisque ultrices. Fusce et neque id risus gravida vestibulum a et urna. Curabitur aliquam accumsan leo, pharetra tempus velit condimentum et. Donec dapibus faucibus lorem a tincidunt. Donec ultricies id metus et aliquam. Vestibulum dapibus magna nec elit ultrices, ornare pretium nisi dictum.',
		'published_on' => '2018-01-11 10:15:00',
	],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Micro CMS</title>
	<link rel="stylesheet" href="assets/style.css"></head>
<body>

<nav id="site-navigation" role="navigation" class="row row-center">
	<div class="column">
		<h1>
			<a href="index.php">Micro CMS</a>
		</h1>
		<ul class="main-menu column clearfix">
		</ul>
	</div>
</nav>

<div id="content" >
	<div class="posts">
		<?php foreach ( $all_posts as $post ): ?>
			<article class="post">
				<header>
					<h2 class="post-title">
						<?php echo $post['title']; ?>
					</h2>
				</header>
				<div class="post-content">
					<?php echo $post['content']; ?>
				</div>
				<footer>
				</footer>
			</article>
		<?php endforeach; ?>
	</div>
</div>

<footer id="footer">
	<div id="inner-footer">
		Curso de Introducción a PHP en Domestika
	</div>
</footer>
</body>
</html>
