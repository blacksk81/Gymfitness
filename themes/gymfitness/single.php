<?php get_header(); // Template Name: Simple Single Sidebar ?>
<div class="contenedor pagina seccion con-sidebar">
	<div class="contenido-principal">
	
		<?php get_template_part( 'template-part/content-post' ) ?>

	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>