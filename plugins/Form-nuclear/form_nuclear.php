<?php 
/*
    Plugin Name: Formulario registro socio nuclear
    Plugin URI: 
    Description:  Formulario registro socio nuclear
    Version: 1.0.0
    Author: Luis bernal
    Author URI: blubber.es
    Text Domain: Nucleares
*/


//SOCIOS


//por seguridad para que nadien puede la que sta en esta en plugin
if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function nuclear_socios_post_type() {

	$labels = array(
		'name'                  => _x( 'socios', 'Post Type General Name', 'nuclear' ),
		'singular_name'         => _x( 'socio', 'Post Type Singular Name', 'nuclear' ),
		'menu_name'             => __( 'socios', 'nuclear' ),
		'name_admin_bar'        => __( 'socio', 'nuclear' ),
		'archives'              => __( 'Archivo', 'nuclear' ),
		'attributes'            => __( 'Atributos', 'nuclear' ),
		'parent_item_colon'     => __( 'socio Padre', 'nuclear' ),
		'all_items'             => __( 'Todas Las socios', 'nuclear' ),
		'add_new_item'          => __( 'Agregar socio', 'nuclear' ),
		'add_new'               => __( 'Agregar socio', 'nuclear' ),
		'new_item'              => __( 'Nueva socio', 'nuclear' ),
		'edit_item'             => __( 'Editar socio', 'nuclear' ),
		'update_item'           => __( 'Actualizar socio', 'nuclear' ),
		'view_item'             => __( 'Ver socio', 'nuclear' ),
		'view_items'            => __( 'Ver socios', 'nuclear' ),
		'search_items'          => __( 'Buscar socio', 'nuclear' ),
		'not_found'             => __( 'No Encontrado', 'nuclear' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'nuclear' ),
		'featured_image'        => __( 'Imagen Destacada', 'nuclear' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'nuclear' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'nuclear' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'nuclear' ),
		'insert_into_item'      => __( 'Insertar en socio', 'nuclear' ),
		'uploaded_to_this_item' => __( 'Agregado en socio', 'nuclear' ),
		'items_list'            => __( 'Lista de socios', 'nuclear' ),
		'items_list_navigation' => __( 'Navegación de socios', 'nuclear' ),
		'filter_items_list'     => __( 'Filtrar socios', 'nuclear' ),
	);
	$args = array(
		'label'                 => __( 'socio', 'nuclear' ),
		'description'           => __( 'socios para el Sitio Web', 'nuclear' ),
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
	register_post_type( 'nuclear_socios', $args );

}
add_action( 'init', 'nuclear_socios_post_type', 0 );


/*Column filter*/

//Create new columns for the bonos Custom Post Type
function set_nuclear_socios_posts_columns( $defaults ) {
    $defaults = array();
    $defaults['title']          = __('Nombres'); // Cambio el nombre de la columna Título
    $defaults['apellido']    	= __('apellido');
    $defaults['dni_socio']    	= __('Dni Socio');


    return $defaults;
}
add_filter('manage_nuclear_socios_posts_columns', 'set_nuclear_socios_posts_columns');


function fill_nuclear_socios_posts_columns( $column_name, $post_id ) {
    
    // Obtenemos todos los valores Post Meta de cada película
    $solic_socios = get_post_meta($post_id);
    
    // Recorremos cada columna y asignamos un valor.
    switch( $column_name ):
        case 'apellido':
            echo $solic_socios['apellido'][0];
            break;
        case 'dni_socio':
            echo $solic_socios['dni_socio'][0];
            break;
    endswitch;
    
}
add_action( 'manage_nuclear_socios_posts_custom_column', 'fill_nuclear_socios_posts_columns', 10, 2 );


?>