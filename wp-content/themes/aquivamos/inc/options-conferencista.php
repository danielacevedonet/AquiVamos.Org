<?php

// Con este codigo se puede añadir post para conferencistas
add_action('init', 'conferencista_congreso_cuenca');

// Con este codigo se ponen los textos y titulos de los conferencistas
function conferencista_congreso_cuenca() {
	register_post_type('conferencista', array(
		'label' => 'Conferencista',
		'description' => 'Panel de control para los conferencistas del congreso internacional de negocios y tecnología para el turismo.',
		'public' => true,
		'menu_icon' => 'dashicons-id',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'conferencista', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		'labels' => array (
			  'name' => 'Conferencista',
			  'singular_name' => 'Conferencistas',
			  'menu_name' => 'Conferencista',
			  'add_new' => 'Añadir Conferencista',
			  'add_new_item' => 'Añadir Nuevo Conferencista',
			  'edit' => 'Editar',
			  'edit_item' => 'Editar Conferencistas',
			  'new_item' => 'Nuevo Conferencistas',
			  'view' => 'Ver Conferencista',
			  'view_item' => 'Ver Conferencista',
			  'search_items' => 'Search Conferencista',
			  'not_found' => 'No Conferencista Found',
			  'not_found_in_trash' => 'No Conferencista Found in Trash',
			  'parent' => 'Parent Conferencistas',
			  )
		) ); 
}

// Codigos para guardar los campos del conferencista
function late_campo( $value ) {
	global $post;

    $campo = get_post_meta( $post->ID, $value, true );
    if ( !empty( $campo ) )
	    return is_array( $campo ) ? tira_profunda( $campo ) : stripslashes( wp_kses_decode_entities( $campo ) );

    return false;
}

// Codigos para indicar donde se va a poner los campos del conferencista
function insertar_campos() {
	add_meta_box( 
		'wpshed-meta-box', __( 'Campos personalizados para los conferencistas', 'titulo' ), 
		'salida_campos', 'conferencista', 'normal', 'high' );

}
add_action( 'add_meta_boxes', 'insertar_campos' );

  	// Codigos para los campos personalizados del conferenciasta.
function salida_campos( $post ) {
	wp_nonce_field( 'my_wpshed_meta_box_nonce', 'wpshed_meta_box_nonce' ); ?>
	<div style="width: 48%; display:inline-block;">
		<label for="profeccion">Profección:</label>
		<input style="width: 95%;" type="text" name="profeccion" id="profeccion" value="<?php echo late_campo( 'profeccion' ); ?>" size="50" />
    </div>
	<div style="width: 48%; display:inline-block;">
		<label for="fotografia">Fotografía del conferencista. (Medida: 395X395 pixeles):</label>
		<input style="width: 95%;" type="text" name="fotografia" id="fotografia" value="<?php echo late_campo( 'fotografia' ); ?>" size="50" />
    </div>
	<div style="width: 100%; display:inline-block;">
		<label for="descripcion_breve">Descripción breve del conferencista</label><br />
		<textarea style="width: 95%;" name="descripcion_breve" id="descripcion_breve" cols="60" rows="4"><?php echo late_campo( 'descripcion_breve' ); ?></textarea>
    </div>
    <div style="width: 49.1%; display:inline-block;">
    	<div style="width:100%; display:inline-block;">
			<label for="facebook">Link de facebook del conferencista:</label>
			<input style="width: 95%;" type="text" name="facebook" id="facebook" value="<?php echo late_campo( 'facebook' ); ?>" size="50" />
			<label for="pais">País del conferencista:</label>
			<input style="width: 95%;" type="text" name="pais" id="pais" value="<?php echo late_campo( 'pais' ); ?>" size="50" />
		</div>
	</div>
	<div style="width: 49.1%; display:inline-block;">
		<div style="width:100%; display:inline-block;">
			<label for="twitter">Link de twitter del conferencista:</label>
			<input style="width: 95%;" type="text" name="twitter" id="twitter" value="<?php echo late_campo( 'twitter' ); ?>" size="50" />
			<label for="empresa">Empresa del Conferencista:</label>
			<input style="width: 95%;" type="text" name="empresa" id="empresa" value="<?php echo late_campo( 'empresa' ); ?>" size="50" />
		</div>
    </div>
    <div style="width: 100%; display:inline-block;">
    	<label for="servicios">Servicios del conferencista:</label>
		<input style="width: 95%;" type="text" name="servicios" id="servicios" value="<?php echo late_campo( 'servicios' ); ?>" size="50" />
    </div>
    
	<?php
}

// Codigos para  guardar los campos del conferencista.
function guardar_campos( $post_id ) {
	
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// verificar y si no tiene permisos parar.
	if( !isset( $_POST['wpshed_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['wpshed_meta_box_nonce'], 'my_wpshed_meta_box_nonce' ) ) return;

	// Codigo para parar si el usuario no tiene permisos
	if( !current_user_can( 'edit_post' ) ) return;

    // Guardar la profección
	if( isset( $_POST['profeccion'] ) )
		update_post_meta( $post_id, 'profeccion', esc_attr( $_POST['profeccion'] ) );

	// Guardar fotografía del conferencista
	if( isset( $_POST['fotografia'] ) )
		update_post_meta( $post_id, 'fotografia', esc_attr( $_POST['fotografia'] ) );

    // Guardar la descripcion breve del conferencista
	if( isset( $_POST['descripcion_breve'] ) )
		update_post_meta( $post_id, 'descripcion_breve', esc_attr( $_POST['descripcion_breve'] ) );

	// Guardar el link del conferencista en facebook 
	if( isset( $_POST['facebook'] ) )
		update_post_meta( $post_id, 'facebook', esc_attr( $_POST['facebook'] ) );

	// Guardar el link del conferencista en facebook 
	if( isset( $_POST['pais'] ) )
		update_post_meta( $post_id, 'pais', esc_attr( $_POST['pais'] ) );

	// Guardar el link del conferencista en twitter
	if( isset( $_POST['twitter'] ) )
		update_post_meta( $post_id, 'twitter', esc_attr( $_POST['twitter'] ) );

	// Guardar la empresa del conferencista
	if( isset( $_POST['empresa'] ) )
		update_post_meta( $post_id, 'empresa', esc_attr( $_POST['empresa'] ) );

	// Guardar la empresa del conferencista
	if( isset( $_POST['servicios'] ) )
		update_post_meta( $post_id, 'servicios', esc_attr( $_POST['servicios'] ) );
}
add_action( 'save_post', 'guardar_campos' );