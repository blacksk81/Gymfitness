<?php get_header(); // Template Name: Page Index Nosidebar ?>

<div class="contenedor pagina seccion no-sidebar">
	
	<div class="contenido-principal">

		<!-- Template part datos nativos de wp -->		
		<?php get_template_part( 'template-part/content-post' ) ?>
		<hr>
	
		<?php
			echo "<h3>Lista de Clases</h3>";

			//viene de inc/queries
			gymfitness_lista_clases();

			// echo "<hr>";
			// echo "<h3>Lista de Recetas</h3>";

			//esta function se encuentra en los plugins gymfitness_sede.php
			//  gymfitness_recetas();
		?>		

		
	</div>
</div>


<?php get_footer(); ?>