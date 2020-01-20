<?php get_header(); ?>
<?php // la pagina category.php filta de de la pagina del blog por categoria ?>
<main class="pagina seccion no-sidebars contenedor">
	<?php 
		$categoria = get_queried_object();
		// echo "<pre>";
		// var_dump($categoria);
		// echo "</pre>";
	?>
	<h2 class="text-center texto-primario"> Categoria: <?php echo $categoria->name; ?></h2>
		<ul class="listado-blog">	
			<?php while(have_posts()): the_post(); ?>
				<?php get_template_part( 'template-part/loop-blog','blog' );  ?>
			<?php endwhile; ?>
		</ul>
</main>
<?php get_footer(); ?>

