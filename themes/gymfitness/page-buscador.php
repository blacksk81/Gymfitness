<?php get_header(); // Template Name: Buscador ?>
	<div class="contenedor pagina seccion ">
		<div class="contenido-principal">
			<p>Buscador Avanzado...</p>
			<?php //buscado input 1208321oebedjlwq ?>
			<div class="buscador">
				<input type="text" name="buscar" id="buscar" placeholder="Buscar recetas">
				<button id="btn_buscar" type="button" class="button">Buscar</button>
			</div>
			<h1>soy el json weyyy</h1>
		
			<?php 
				$jsondata = file_get_contents("https://jsonplaceholder.typicode.com/users/1");
				$obj  = json_decode( $jsondata , false );
				echo "<pre>";
				print_r($obj);
				echo "</pre>";
				echo "<hr>";
				print_r($obj->address->street);
			?>



		</div>
	</div>

<?php get_footer(); ?>

