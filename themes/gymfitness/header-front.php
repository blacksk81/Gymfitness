<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	


<header class="site-header">
	<div class="contenedor header_grid">
		<div class="barra-navegacion">
			<div class="logo">
				<img src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="">
			</div>
			<?php 
			//menu-lakwjgdaskgfd
				$args = array(
					'theme_location' => 'menu-principal',
					'container' => 'nav',
					'container_class' => 'menu-principal'
				);
				wp_nav_menu($args);
			?>
		</div> <!-- nav -->
		<div class="tagline text-center">
			<h1><?php the_field('encabezado_hero'); ?></h1>
			<p><?php the_field('contenido_hero'); ?></p>
		</div>
	</div>
</header>