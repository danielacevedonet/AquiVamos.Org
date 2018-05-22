<?php

// Con este codigo se puede añadir post para conferencistas
add_action('init', 'aquivamos_agencia');

// Con este codigo se ponen los textos y titulos de los conferencistas
function aquivamos_agencia() {
	register_post_type('agencia', array(
		'label' => 'Agencia',
		'description' => 'Panel de control para los anuncios de aquivamos.org',
		'taxonomies' => array('category','post_tag'), 
		'public' => true,
		'menu_icon' => 'dashicons-id',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'agencia', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		'labels' => array (
			  'name' => 'Agencia',
			  'singular_name' => 'Agencias',
			  'menu_name' => 'Agencia de viajes',
			  'add_new' => 'Añadir Agencia',
			  'add_new_item' => 'Añadir Nueva Agencia',
			  'edit' => 'Editar',
			  'edit_item' => 'Editar Agencia',
			  'new_item' => 'Nueva Agencia',
			  'view' => 'Ver Agencia',
			  'view_item' => 'Ver Agencia',
			  'search_items' => 'Buscar Agencia',
			  'not_found' => 'No se encontro Agencia',
			  'not_found_in_trash' => 'Agencia no se encontro en la papeleria',
			  'parent' => 'Principal Agencia',
			  )
		) ); 
}
