<?php 
/*
    Plugin Name: PersonalPageJK - Post Types
    Plugin URI:
    Description: Añade Post Types al sitio
    Version: 1.0.0
    Author: Juan Kaenel
    Author URI: https://twitter.com/juankaenel1
    Text Domain: PersonalPageJK
*/

if(!defined('ABSPATH')) die();

function personalPage_Cursos_post_type() {

	$labels = array(
		'name'                  => _x( 'Cursos', 'Post Type General Name', 'personalPage' ),
		'singular_name'         => _x( 'Curso', 'Post Type Singular Name', 'personalPage' ),
		'menu_name'             => __( 'Cursos', 'personalPage' ),
		'name_admin_bar'        => __( 'Curso', 'personalPage' ),
		'archives'              => __( 'Archivo', 'personalPage' ),
		'attributes'            => __( 'Atributos', 'personalPage' ),
		'parent_item_colon'     => __( 'Curso Padre', 'personalPage' ),
		'all_items'             => __( 'Todas Las Cursos', 'personalPage' ),
		'add_new_item'          => __( 'Agregar Curso', 'personalPage' ),
		'add_new'               => __( 'Agregar Curso', 'personalPage' ),
		'new_item'              => __( 'Nueva Curso', 'personalPage' ),
		'edit_item'             => __( 'Editar Curso', 'personalPage' ),
		'update_item'           => __( 'Actualizar Curso', 'personalPage' ),
		'view_item'             => __( 'Ver Curso', 'personalPage' ),
		'view_items'            => __( 'Ver Cursos', 'personalPage' ),
		'search_items'          => __( 'Buscar Curso', 'personalPage' ),
		'not_found'             => __( 'No Encontrado', 'personalPage' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'personalPage' ),
		'featured_image'        => __( 'Imagen Destacada', 'personalPage' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'personalPage' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'personalPage' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'personalPage' ),
		'insert_into_item'      => __( 'Insertar en Curso', 'personalPage' ),
		'uploaded_to_this_item' => __( 'Agregado en Curso', 'personalPage' ),
		'items_list'            => __( 'Lista de Cursos', 'personalPage' ),
		'items_list_navigation' => __( 'Navegación de Cursos', 'personalPage' ),
		'filter_items_list'     => __( 'Filtrar Cursos', 'personalPage' ),
	);

    $args = array(
		'label'                 => __( 'Curso', 'personalPage' ),
		'description'           => __( 'Cursos para el Sitio Web', 'personalPage' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
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
	register_post_type( 'personalPage_Cursos', $args );

}
add_action( 'init', 'personalPage_Cursos_post_type', 0 );