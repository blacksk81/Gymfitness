<?php get_header(); ?>

<main class="pagina seccion no-sidebars contenedor">
	<h1>Blog Gymfitness</h1>
	<ul class="listado-blog">	
	<?php while(have_posts()): the_post(); ?>
		<?php get_template_part( 'template-part/loop-blog','blog' );  ?>
	<?php endwhile; ?>
	</ul>
</main>

<?php get_footer(); ?>


