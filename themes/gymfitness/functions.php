<?php

/* Consultar reutilizable */
require get_template_directory() .'/inc/queries.php';

//id_laisgfdaoplñfigae
require get_template_directory() .'/inc/shortcodes.php';


// Menus de navegación, agregar más utilizando el arreglo
//menu-lakwjgdaskgfd
function gymfitness_menus() {
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'gymfitness' )
    ));
}
add_action('init', 'gymfitness_menus');

//script y estilo
//fichero-aldawgdjohasfh
function gymfitness_scripts_styles() {


	wp_enqueue_style('normalized', get_template_directory_uri(). '/css/normalized.css', array(),'8.0.1');
	wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0' );
	wp_enqueue_style('slicknav', get_template_directory_uri(). '/css/slicknav.min.css',  array(), '1.0.0' );

// la hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');
    wp_enqueue_script('slicknac', get_template_directory_uri().'/js/jquery.slicknav.min.js',array('jquery'),'1.0.0', true);
    wp_enqueue_script('script', get_template_directory_uri().'/js/scripts.js',array('jquery','slicknac'),'1.0.0', true);

}
add_action('wp_enqueue_scripts','gymfitness_scripts_styles');


// Remove WP Version From Styles	
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Elimina los versionamiento de js css
function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

//Cual es el tema es activado
function gymfitness_setup(){

	//habilitar imagenes destacad
	//img-destacada-aldujafadefss
	add_theme_support('post-thumbnails');


	//Titulos SEO
	add_theme_support('title-tag');

	//registrar tamaño de imagen personañlizada
	add_image_size('square', 350, 350, true);
	add_image_size('portrait', 350, 724, true);
	add_image_size('cajas', 400, 375, true);
	add_image_size('mediano', 700, 400, true);
	add_image_size('blog', 966, 644, true);


}
add_action('after_setup_theme','gymfitness_setup');



/*  Widgets  */
 function gymfitness_widgets(){
 	//widget-0817dsda
 	register_sidebar( array(
 		'name' =>'Sidebar_1',
 		'id'=>'sidebar_1',
 		'before_widget'=>'<div class="widget">',
 		'after_widget'=> '</div>',
 		'before_title' =>'<h3 class="text-center texto-primario">',
 		'after_title'=>'</h3>'
 	));
 	 register_sidebar( array(
 		'name' =>'Sidebar_2',
 		'id'=>'sidebar_2',
 		'before_widget'=>'<div class="widget">',
 		'after_widget'=> '</div>',
 		'before_title' =>'<h3 class="text-center texto-primario">',
 		'after_title'=>'</h3>'
 	));

 }
 add_action( 'widgets_init','gymfitness_widgets' );



//insertar registro del form SOCIOS
	if(isset($_POST['nombre'])){

		// create post object
		$my_post = array(
				'post_type' => 'nuclear_socios',
				'post_title' => $_POST['nombre'],
				'post_content' => $_POST['apellido'],
				'post_status' => 'publish', // and more status like publish,draft,private 
				
		);
		wp_insert_post($my_post);
		echo 'New Post Saved !';
		die; 

	}



/** imagen hero **/
function gymfitness_hero_imagen(){

	//obtener id pagina principal
	$front_page_id = get_option('page_on_front');

	//obtener el id de la imagen
	$id_imagen = get_field('imagen_hero',$front_page_id);

	//obtener la imagen
	$imagen = wp_get_attachment_image_src( $id_imagen, 'full' )[0];

	//style
	// se crea un fichero ficticio de css
	wp_register_style('custom', false);
	wp_enqueue_style( 'custom' );

	$imagen_destacada_css = " 
		body.home .site-header{
			background-image: linear-gradient( rgba(0,0,0,0.75), rgba(0,0,0,0.75) ) , url($imagen);
		}
	";

	// la funcion inyecta en la hoja de estilo ficticia la variable imagen_destacada_css
	wp_add_inline_style( 'custom', $imagen_destacada_css );

}
add_action( 'init', 'gymfitness_hero_imagen' )

?>