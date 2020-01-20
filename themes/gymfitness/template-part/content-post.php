	
	<?php 
		//template-ladfhasjhfasf
		while( have_posts()): the_post();?>
		<h1 class="text-center texto-primario"><?php the_title(); ?></h1>

		<?php
		//verfiocar si la img exist
		// if(has_post_thumbnail()):
			//img-destacada-aldujafadefs
			the_post_thumbnail('blog', array('class' => 'imagen_destacada')); 
		// else:
			// si no hay imagen muestra esto
		// 	echo "No hay imagen destecada :(";
		// endif;

		?>

		<?php 


		//revisar si el custom post type es clases
		if(get_post_type() === 'gymfitness_clases'){
			$hora_inicio = get_field('hora_de_inicio');
			$hora_fin = get_field('hora_de_fin');
		?>
			<p class="informacion-clase"><?php the_field('dias_clases'); ?>  - Horarios: <?php echo $hora_inicio . " a " . $hora_fin ?></p>
		<?php } ?>

		

		<?php the_content(); ?>

	<?php endwhile;?>