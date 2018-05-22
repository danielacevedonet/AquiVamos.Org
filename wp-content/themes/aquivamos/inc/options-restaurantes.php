<?php

// Con este codigo se puede añadir post para conferencistas
add_action('init', 'aquivamos_restaurantes');

// Con este codigo se ponen los textos y titulos de los conferencistas
function aquivamos_restaurantes() {
	register_post_type('restaurantes', array(
		'label' => 'Restaurantes',
		'description' => 'Panel de control para los anuncios de aquivamos.org',
		'taxonomies' => array('category','post_tag'), 
		'public' => true,
		'menu_icon' => 'dashicons-id',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'restaurantes', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		'labels' => array (
			  'name' => 'Restaurantes',
			  'singular_name' => 'Restaurantes',
			  'menu_name' => 'Restaurantes',
			  'add_new' => 'Añadir Restaurantes',
			  'add_new_item' => 'Añadir Nuevo Restaurantes',
			  'edit' => 'Editar',
			  'edit_item' => 'Editar Restaurantes',
			  'new_item' => 'Nuevo Restaurantes',
			  'view' => 'Ver Restaurantes',
			  'view_item' => 'Ver Restaurantes',
			  'search_items' => 'Buscar Restaurantes',
			  'not_found' => 'No se encontro Restaurantes',
			  'not_found_in_trash' => 'Restaurantes no se encontro en la papeleria',
			  'parent' => 'Principal Restaurantes',
			  )
		) ); 
}

