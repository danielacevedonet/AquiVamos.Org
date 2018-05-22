<?php

// Con este codigo se puede añadir post para conferencistas
add_action('init', 'aquivamos_piscina');

// Con este codigo se ponen los textos y titulos de los conferencistas
function aquivamos_piscina() {
	register_post_type('piscina', array(
		'label' => 'Piscina',
		'description' => 'Panel de control para los anuncios de aquivamos.org',
		'taxonomies' => array('category','post_tag'),
		'public' => true,
		'menu_icon' => 'dashicons-id',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'piscina', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		'labels' => array (
			  'name' => 'Piscina',
			  'singular_name' => 'Piscinas',
			  'menu_name' => 'Piscinas',
			  'add_new' => 'Añadir Piscina',
			  'add_new_item' => 'Añadir Nuevo Piscina',
			  'edit' => 'Editar',
			  'edit_item' => 'Editar Piscina',
			  'new_item' => 'Nuevo Piscina',
			  'view' => 'Ver Piscina',
			  'view_item' => 'Ver Piscina',
			  'search_items' => 'Buscar Piscina',
			  'not_found' => 'No se encontro Piscina',
			  'not_found_in_trash' => 'Piscina no se encontro en la papeleria',
			  'parent' => 'Principal Piscina',
			  )
		) ); 
}
