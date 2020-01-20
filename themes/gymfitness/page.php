<?php get_header(); // Template Name: Page Index sidebar ?>
	<div class="contenedor pagina seccion con-sidebar">
		<div class="contenido-principal">
			<p>page to sidebar</p>

			<?php get_template_part( 'template-part/content-post' ) ?>
			<br>
			<p><?php the_field('home_title'); ?></p>
			<p><?php the_field('descripcion_del_home'); ?></p>

			<?php 
			//advancedform plagin
				$args = array(
				    'display_title' => false,
				    'display_description' => false,
				    'submit_text' => 'Submit',
				    'echo' => true,
				    'values' => array(),
				    'exclude_fields' => array(),
				    'uploader' => 'wp',
				    'filter_mode' => false,
				    'instruction_placement' => 'label',
				    'honeypot' => true,
				);

				advanced_form( 'form_5e04bb131bcbc', $args );
			?>


			<?php //gymfitness_lista_sedes(); ?>


		</div>

		<?php get_sidebar('home'); ?>

	</div>

<?php get_footer(); ?>