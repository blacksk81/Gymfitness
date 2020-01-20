<?php 
/*
    Plugin Name: Gymfitness - Instructores
    Plugin URI: 
    Description: Instructores del gymfitness
    Version: 1.0.0
    Author: Luis bernal
    Author URI: lbernal.com.ve
    Text Domain: gymfitness
*/

// Register Custom Post Type
function gymfitness_instructores() {

	$labels = array(
		'name'                  => _x( 'Instructores', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Instructores', 'gymfitness' ),
		'name_admin_bar'        => __( 'Instructor', 'gymfitness' ),
		'archives'              => __( 'Archivo', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Instructor Padre', 'gymfitness' ),
		'all_items'             => __( 'Todas Las Instructores', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar Instructor', 'gymfitness' ),
		'add_new'               => __( 'Agregar Instructor', 'gymfitness' ),
		'new_item'              => __( 'Nueva Instructor', 'gymfitness' ),
		'edit_item'             => __( 'Editar Instructor', 'gymfitness' ),
		'update_item'           => __( 'Actualizar Instructor', 'gymfitness' ),
		'view_item'             => __( 'Ver Instructor', 'gymfitness' ),
		'view_items'            => __( 'Ver Instructores', 'gymfitness' ),
		'search_items'          => __( 'Buscar Instructor', 'gymfitness' ),
		'not_found'             => __( 'No Encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en Instructor', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en Instructor', 'gymfitness' ),
		'items_list'            => __( 'Lista de Instructores', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegación de Instructores', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar Instructores', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Instructores', 'gymfitness' ),
		'description'           => __( 'Instructores para el Sitio Web', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'instructores', $args );

}
add_action( 'init', 'gymfitness_instructores', 0 );

/* taxonomia - horarios de comida */
function pais_origen(){
	$labels = array(
		'name'             => _x('Pais de Origen','taxonomia general name '),
		'singular_name'    => _x('Pais de Origen' ,'taxonomia singular name'),
		'search_items'     => __('Buscar Horario', 'gymfitness' ),		
		'all_items' 	   => __('Todos los Pais de Origen'),
		'parent_item' 	   => __('Pais de Origen  padre'),
		'parent_item_colon'=> __('Pais de Origen padre'),
		'edit_item'		   => __('Editar Pais de Origen'),
		'update_item'      => __('Actualizar Pais de Origen'),
		'add_new_item'     => __('Agregar Pais de Origen'),
		'new_item_name'    => __('Nuevo Pais de Origen'),
		'menu_name'        => __('Pais de Origen'),
	);
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'pais-origen-instructor') 
	);
	register_taxonomy( 'pais-origen', array('instructores'), $args );
}
add_action( 'init', 'pais_origen' );




?>