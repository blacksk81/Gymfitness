<?php get_header(); // Template Name: Clases no Sidebar ?>

<div class="contenedor pagina seccion no-sidebar">
	<div class="text-center">
	<?php
		//template viene de tempalte parte como estructura contenedora
		//template-ladfhasjhfasf
		get_template_part( 'template-part/content-post' );

		//inc/queries.php
		//lista-clasess-aldhakjgasjkf
		gymfitness_lista_clases(); 

		//plugin/recetas_gymfitness
		//recetas_sadojabfoaf
		gymfitness_recetas();
	?>
	</div>
</div>

<?php get_footer(); ?>