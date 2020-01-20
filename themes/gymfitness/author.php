<?php get_header(); ?>
<?php //filtrar authopr desde blog ?>
<main class="pagina seccion no-sidebars contenedor">

	<?php 
	
		// $categoria = get_queried_object(); 
		// echo "<pre>";
		// var_dump($categoria->data->display_name);
		// echo "</pre>";

	?>
	<?php $categoria = get_queried_object(); ?>
	<h2 class="text-center texto-primario">
		Author: <?php echo $categoria->data->display_name; ?>
	</h2>


	<ul class="listado-blog">	

	<?php while(have_posts()): the_post(); ?>
		<?php get_template_part( 'template-part/loop-blog','blog' );  ?>
	<?php endwhile; ?>

	</ul>
</main>

<?php get_footer(); ?>

