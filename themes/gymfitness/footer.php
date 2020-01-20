		<footer class="site-footer contenedor">
			<hr>
			<div class="contenido-footer">
			<?php 
			//menu-lakwjgdaskgfd
				$args = array(
					'theme_location' => 'menu-principal',
					'container' => 'nav',
					'container_class' => 'menu-principal'
				);
				wp_nav_menu($args);
			?>
			<p class="copuright">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <?= get_bloginfo('name') . " " . date('Y'); ?></p>
			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>