<?php get_header(); // Template Name: Single clases Con Sidebar ?>
<div class="contenedor pagina seccion con-sidebar">
	<div class="contenido-principal">
	
		<?php get_template_part( 'template-part/content-post' ) ?>

	</div>

	<?php 
	//widget-0817dsda
	get_sidebar(); 
	// get_sidebar('clases'); del fichero sidebar-clases.php ya gregar el otro sidebar
	?>

</div>

<?php get_footer(); ?>