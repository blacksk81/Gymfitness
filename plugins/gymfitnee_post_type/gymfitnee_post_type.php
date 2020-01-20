<?php 
/*
    Plugin Name: Gym Fitness - Post Types
    Plugin URI: 
    Description: Añade Post Types al sitio Gym Fitness
    Version: 1.0.0
    Author: Luis bernal
    Author URI: lbernal.com.ve
    Text Domain: gymfitness
*/

 //id page -> pluclagym-97213

//por seguridad para que nadien puede la que sta en esta en plugin
if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function gymfitness_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'clases', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Clases', 'gymfitness' ),
		'name_admin_bar'        => __( 'Clase', 'gymfitness' ),
		'archives'              => __( 'Archivo', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Clase Padre', 'gymfitness' ),
		'all_items'             => __( 'Todas Las Clases', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar Clase', 'gymfitness' ),
		'add_new'               => __( 'Agregar Clase', 'gymfitness' ),
		'new_item'              => __( 'Nueva Clase', 'gymfitness' ),
		'edit_item'             => __( 'Editar Clase', 'gymfitness' ),
		'update_item'           => __( 'Actualizar Clase', 'gymfitness' ),
		'view_item'             => __( 'Ver Clase', 'gymfitness' ),
		'view_items'            => __( 'Ver Clases', 'gymfitness' ),
		'search_items'          => __( 'Buscar Clase', 'gymfitness' ),
		'not_found'             => __( 'No Encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'gymfitness' ),
		'items_list'            => __( 'Lista de Clases', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'gymfitness' ),
		'description'           => __( 'Clases para el Sitio Web', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ), //custome fild da soporte apra agregar campos personalizados 'custom-fields'
		'hierarchical'          => true, // true = post - false = pagina
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gymfitness_clases', $args );

}
add_action( 'init', 'gymfitness_clases_post_type', 0 );


/*Column filter*/



//Create new columns for the bonos Custom Post Type
function set_gymfitness_clases_posts_columns( $defaults ) {
    $defaults = array();
    $defaults['title']            = __('Nombres'); // Cambio el nombre de la columna Título
    $defaults['dias_clases']      = __('Dias de clases');
    $defaults['ciudad']           = __('Locacion');
    $defaults['instructor_clase'] = __('Intructor');

// 

    return $defaults;
}
add_filter('manage_gymfitness_clases_posts_columns', 'set_gymfitness_clases_posts_columns');


function fill_gymfitness_clases_posts_columns( $column_name, $post_id ) {
    
    // Obtenemos todos los valores Post Meta de cada película
    $clases_gymfitness = get_post_meta($post_id);

   	// var_dump($clases_gymfitness);

    // echo $clases_gymfitness['dias_clases'][0];
    // echo $clases_gymfitness['ciudad'][0];
    // Recorremos cada columna y asignamos un valor.
    switch( $column_name ):
        case 'dias_clases':
            echo $clases_gymfitness['dias_clases'][0];
            break;
        case 'ciudad':
            echo $clases_gymfitness['ciudad'][0];
            break;
        case 'instructor_clase';
            echo $clases_gymfitness['instructor_clase'][0];
            break;
    endswitch;
    
}
add_action( 'manage_gymfitness_clases_posts_custom_column', 'fill_gymfitness_clases_posts_columns', 10, 2 );


?>

