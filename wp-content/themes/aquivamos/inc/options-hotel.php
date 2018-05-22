<?php

// Con este codigo se puede añadir post para conferencistas
add_action('init', 'aquivamos_hotel');

// Con este codigo se ponen los textos y titulos de los conferencistas
function aquivamos_hotel() {
	register_post_type('hotel', array(
		'label' => 'Hotel',
		'description' => 'Panel de control para los anuncios de aquivamos.org',
		'taxonomies' => array('category','post_tag'),
		'public' => true,
		'menu_icon' => 'dashicons-id',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'hotel', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		'labels' => array (
			  'name' => 'Hotel',
			  'singular_name' => 'Hoteles',
			  'menu_name' => 'Hoteles',
			  'add_new' => 'Añadir Hotel',
			  'add_new_item' => 'Añadir Nuevo Hotel',
			  'edit' => 'Editar',
			  'edit_item' => 'Editar Hotel',
			  'new_item' => 'Nuevo Hotel',
			  'view' => 'Ver Hotel',
			  'view_item' => 'Ver Hotel',
			  'search_items' => 'Buscar Hotel',
			  'not_found' => 'No se encontro Hotel',
			  'not_found_in_trash' => 'Hotel no se encontro en la papeleria',
			  'parent' => 'Principal Hotel',
			  )
		) ); 
}
