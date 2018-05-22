<?php

// Con este codigo se puede añadir post para conferencistas
add_action('init', 'aquivamos_complejo');

// Con este codigo se ponen los textos y titulos de los conferencistas
function aquivamos_complejo() {
	register_post_type('complejo', array(
		'label' => 'Complejo',
		'description' => 'Panel de control para los anuncios de aquivamos.org',
		'taxonomies' => array('category','post_tag'), 
		'public' => true,
		'menu_icon' => 'dashicons-id',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'complejo', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		'labels' => array (
			  'name' => 'Complejo',
			  'singular_name' => 'Complejos',
			  'menu_name' => 'Complejos Turisticos',
			  'add_new' => 'Añadir Complejo',
			  'add_new_item' => 'Añadir Nuevo Complejo',
			  'edit' => 'Editar',
			  'edit_item' => 'Editar Complejo',
			  'new_item' => 'Nuevo Complejo',
			  'view' => 'Ver Complejo',
			  'view_item' => 'Ver Complejo',
			  'search_items' => 'Buscar Complejo',
			  'not_found' => 'No se encontro Complejo',
			  'not_found_in_trash' => 'Complejo no se encontro en la papeleria',
			  'parent' => 'Principal Complejo',
			  )
		) ); 
}
