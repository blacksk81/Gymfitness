<?php get_header('front'); //Template Name: Front-page ?>
<!-- front es del header-front.php -->


<section class="bienvenida text-center seccion">
	<h2 class="text-primario"><?php the_field('encabezado_bienvenida'); ?></h2>
	<p><?php the_field('texto_bienvenida'); ?></p>

</section>

<div class="seccion-areas">
	<ul class="contenedor-areas">
		<li class="area">
			<?php 
				$area1 = get_field('area_1');
				$imagen = wp_get_attachment_image_src( $area1['area_imagen'], 'mediano')[0];
				
			?>
			<img src="<?php echo esc_attr($imagen); ?>">
			<p><?php echo $area1['area_texto']; ?></p>
		</li>
		<li class="area">
			<?php 
				$area2 = get_field('area_2');
				$imagen = wp_get_attachment_image_src( $area2['area_imagen'], 'mediano')[0];
			?>
			<img src="<?php echo esc_attr($imagen); ?>">
			<p><?php echo $area2['area_texto']; ?></p>
		</li>
		<li class="area">
			<?php 
				$area3 = get_field('area_3');
				$imagen = wp_get_attachment_image_src( $area3['area_imagen'], 'mediano')[0];
			?>
			<img src="<?php echo esc_attr($imagen); ?>">
			<p><?php echo $area3['area_texto']; ?></p>
		</li>
		<li class="area">
			<?php 
				$area4 = get_field('area_4');
				$imagen = wp_get_attachment_image_src( $area4['area_imagen'], 'mediano')[0];
			?>
			<img src="<?php echo esc_attr($imagen); ?>">
			<p><?php echo $area4['area_texto']; ?></p>
		</li>
	</ul>
</div>


<section class="clases">
	<div class="contenedor">
		<h2 class="text-center texto-primario">Nuestras clases</h2>
		<?php 	
			//lista-clasess-aldhakjgasjkf
			gymfitness_lista_clases(3);  
		?>
		<div class="contenedor-boton">
			<a href="<?php esc_url(get_permalink(get_page_by_title('Nuestras Clases'))); ?>" class="boton boton-primario">
				Ver todas las clases
			</a>
		</div>

	</div>
</section>
	
<section class="instructores">
	<div class="contenedor seccion">
		<h2 class="text-center text-primario">Nuestros isntructores</h2>
		<p class="text-center">Intructores certificados en varios actividades</p>

		<ul class="listado-instructores">
			<?php
				$args = array(
					'post_type' => 'instructores', //plugin/gymfitness_instructores
					'posts_per_page' => -1,
					'orderby' => 'title',
					'order' => 'ASC'
				);
				$clases = new wp_query($args);
				while ( $clases->have_posts()): $clases->the_post(); ?>

					<li class="instructor">
						<?php the_post_thumbnail( 'mediano' ) ?>
						<div class="contenido text-center">	
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
							<div class="especialidad">
								<?php 
									$esp = get_field('especialidades_gynfitness');
									// echo "<pre>";
									// print_r($esp);
									// echo "</pre>";
									foreach ($esp as $e): ?> 
									<span class="etiqueta">
										<?php echo esc_html( $e ); ?>
									</span>
									<?php endforeach; ?>
							</div>
						</div>
					</li>

				<?php
					endwhile;
					wp_reset_query(); 
			?>
		</ul>

	</div>
</section>


<section class="blog contenedor seccion">
	<h2 class="text-center texto-primario">Nuestro blog</h2>
	<p class="text-center">Aprende tips de nuestros instructores expertos</p>

	<ul class="listado-blog">	
		<?php 
			$args = array(
				'post_type' => 'post', 
				'posts_per_page' => 4,
			);
			$blog = new WP_Query($args);
			while($blog->have_posts()): $blog->the_post();
				get_template_part( 'template-part/loop-blog','blog' ); 
			endwhile;
			wp_reset_postdata();
			?>
	</ul>

</section>



<?php get_footer(); ?>