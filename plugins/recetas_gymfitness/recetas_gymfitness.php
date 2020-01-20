<?php 
/*
    Plugin Name: Recetas y Eventos GymFitNess
    Plugin URI: 
    Description: Recetas balanciadas en la temporada de fitness
    Version: 1.0.0
    Author: Luis bernal
    Author URI: lbernal.com.ve
    Text Domain: gymfitness
*/
//por seguridad para que nadien puede la que sta en esta en plugin
if(!defined('ABSPATH')) die();

//++++* Receta *++++//
function crear_post_type_recetas(){
	$labels = array(
		'name'               => __( 'receta', 'gymfitness' ),
		'singular_name'      => __( 'Receta', 'gymfitness' ),
		'add_new'            => _x( 'Agrega nueva receta', 'gymfitness', 'gymfitness' ),
		'add_new_item'       => __( 'Añade receta', 'gymfitness' ),
		'edit_item'          => __( 'Edita receta', 'gymfitness' ),
		'new_item'           => __( 'Nueva receta', 'gymfitness' ),
		'view_item'          => __( 'Mirar receta', 'gymfitness' ),
		'search_items'       => __( 'Buscar recetas', 'gymfitness' ),
		'not_found'          => __( 'Receta no encontrada', 'gymfitness' ),
		'not_found_in_trash' => __( 'Receta no encontrada en la Basura', 'gymfitness' ),
		'parent_item_colon'  => __( 'Parent receta:', 'gymfitness' ),
		'menu_name'          => __( 'Recetas', 'gymfitness' ),
	);
	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'menu_icon'           =>'dashicons-carrot',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'page',
		'supports'            => array(
			'title',
			'editor',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'trackbacks',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);
	register_post_type( 'receta', $args );
}
add_action( 'init', 'crear_post_type_recetas',0 );

/*taxonomias*/
function taxonomia_tipo_recetas(){
	$labels = array(
		'name'             => _x('Tipo de Comida','taxonomia general name '),
		'singular_name'    => _x('Tipo de Comida' ,'taxonomia singular name'),
		'search_items'     => __('Buscar eventos', 'gymfitness' ),		
		'all_items' 	   => __('Todos los tipo de comida'),
		'parent_item' 	   => __('Tipo de comida  padre'),
		'parent_item_colon'=> __('Tipo de comida padre'),
		'edit_item'		   => __('Editar tipo de comida'),
		'update_item'      => __('Actualizar tipo de comida'),
		'add_new_item'     => __('Agregar tipo de comida'),
		'new_item_name'    => __('Nuevo tipo de comida'),
		'menu_name'        => __('Tipo de Comida'),
	);
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'tipo-comida') 
	);
	register_taxonomy( 'tipo-comida', array('receta'), $args );

	// register_taxonomy(
	// 	'tipo_receta',
	// 	'receta', // del register_post_type
	// 	array(
	// 		'label' => __('Tipo de Receta'),
	// 		'rewrite' => array('slug' => 'tipo-receta'),
	// 		'hierarchical' => true,
	// 	)
	// );
}
add_action( 'init', 'taxonomia_tipo_recetas' );

/* taxonomia - horarios de comida */
function pais_comida(){
	$labels = array(
		'name'             => _x('Pais de Comida','taxonomia general name '),
		'singular_name'    => _x('Pais de Comida' ,'taxonomia singular name'),
		'search_items'     => __('Buscar Pais', 'gymfitness' ),		
		'all_items' 	   => __('Todos los Pais de comida'),
		'parent_item' 	   => __('Pais de comida  padre'),
		'parent_item_colon'=> __('Pais de comida padre'),
		'edit_item'		   => __('Editar Pais de comida'),
		'update_item'      => __('Actualizar Pais de comida'),
		'add_new_item'     => __('Agregar Pais de comida'),
		'new_item_name'    => __('Nuevo Pais de comida'),
		'menu_name'        => __('Pais de Comida'),
	);
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'pais-de-comida') 
	);
	register_taxonomy( 'pais-menu', array('receta'), $args );
}
add_action( 'init', 'pais_comida' );

function estado_animo_taxonomia(){
	$labels = array(
		'name'             => _x('Estado de Animo','taxonomia general name '),
		'singular_name'    => _x('Estado de Animo' ,'taxonomia singular name'),
		'search_items'     => __('Buscar Horario', 'gymfitness' ),		
		'all_items' 	   => __('Todos los Estado de Animo'),
		'parent_item' 	   => __('Estado de Animo  padre'),
		'parent_item_colon'=> __('Estado de Animo padre'),
		'edit_item'		   => __('Editar Estado de Animo'),
		'update_item'      => __('Actualizar Estado de Animo'),
		'add_new_item'     => __('Agregar Estado de Animo'),
		'new_item_name'    => __('Nuevo Estado de Animo'),
		'menu_name'        => __('Estado de Animo'),
	);
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'estado-animo') 
	);

	register_taxonomy('estado-animo', array('receta'), $args);
}
add_action( 'init', 'estado_animo_taxonomia' );

//Metaboxes para recetas
function receta_agregar_metaboxes(){
	add_meta_box('recetas-metaxobox','Ingredientes Recetas','recetas_diseno_metaboxes','receta','normal','high', null );
}
add_action( 'add_meta_boxes','receta_agregar_metaboxes');

//Insertar en la bd por el idea del post creado
function receta_update_metabox($post_id, $post, $update){

	//Filtros de seguridad y verificacion 
	if(!isset($_POST['meta-box-nonce'])  || !wp_verify_nonce( $_POST['meta-box-nonce'], basename(__FILE__) ))
	return $post_id;

	if (!current_user_can( 'edit_post', $post_id )) 
	return $post_id;

	if(define("DOING_AUTOSAVE") && DOING_AUTOSAVE)
	return $post_id;

	//Definimos la varias vacias
	$input_metabox = "";
	$textarea_metabox = "";
	$dropdown_metabox = "";

	//Recibimos la variable del dash
	if (isset($_POST['input-metabox'])) {
		$input_metabox = $_POST['input-metabox'];
	}
	update_post_meta($post_id, 'input-metabox', $input_metabox );

	if (isset($_POST['textarea-metabox'])) {
		$textarea_metabox = $_POST['textarea-metabox'];
	}
	update_post_meta($post_id, 'textarea-metabox', $textarea_metabox );

	if (isset($_POST['dropdown-metabox'])) {
		$dropdown_metabox = $_POST['dropdown-metabox'];
	}
	update_post_meta($post_id, 'dropdown-metabox', $dropdown_metabox );

}
add_action('save_post','receta_update_metabox', 10, 3);

// muestra el contenido del metabox de los campos que vamos a ingresar
function recetas_diseno_metaboxes($post){
	//filtro de seguridad
	wp_nonce_field( basename(__FILE__), 'meta-box-nonce' );

	?> 
		<div style="display: flex; flex-direction: column; width: 50%;">
			<label for="input-metabox">Ingrediente principal</label>
			<input name="input-metabox" type="text" value="<?php echo get_post_meta( $post->ID, 'input-metabox', TRUE ); ?>">
			<br>

			<label for="textarea-metabox">Complementos</label>
			<textarea name="textarea-metabox">
				<?php echo get_post_meta( $post->ID, 'textarea-metabox', TRUE ); ?>
			</textarea>
			<br>

			<label for="dropdown-metabox">Dia de la semana</label>
			<select name="dropdown-metabox" id="dropdown-metabox">
				<?php
					$options = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
					foreach ($options as $key => $value) {
						if ($valor = get_post_meta( $post->ID, 'dropdown-metabox', TRUE )) {
							?> <option selected><?php echo $value ?></option> <?php
							}else{ ?>
							<option><?php echo $valor ?></option>
						<?php } ?>
					<?php } ?>
			</select>
			<p>Dumping Code:</p>
				<?php
					// var_dump($post->post_name);
					// echo get_post_meta( $post_id, 'input-metabox' );
					print_r($post);
				?> 
		</div>
	<?php
}

//recetas_sadojabfoaf
//llama la funcion   para mostrat el contenido de custom post type
// gymfitness_recetas();
function gymfitness_recetas(){
	$args = array(
		'post_type' => 'receta',
		'posts_per_page' => -1,
	);
	$recetax = new wp_query($args);

	?> 	<h2>Recetas saludable</h2> <?php
	while ( $recetax->have_posts()): $recetax->the_post(); ?>
	
	<div class="contenedor">

		<p><?php the_title(); ?></p>
		<br>
		<p><?php the_content( ); ?></p>
		<br>
		<?php 
			$send_recetas = get_post_meta(get_the_id(),'input-metabox',true );
			$Complementos = get_post_meta(get_the_id(),'textarea-metabox',true );
			$dias_semanas = get_post_meta(get_the_id(),'dropdown-metabox',true );

			echo $Complementos;
			echo "<br>";
			print_r($send_recetas);
			echo "<br>";
			print_r($dias_semanas);
			// echo "<hr>";
			//var_dump($args);
		?>

	</div>

	<?php endwhile; wp_reset_query();  
} 

//endgymfitness_recetas





