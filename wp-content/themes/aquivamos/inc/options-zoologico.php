<?php

// Con este codigo se puede añadir post para conferencistas
add_action('init', 'aquivamos_zoologico');

// Con este codigo se ponen los textos y titulos de los conferencistas
function aquivamos_zoologico() {
	register_post_type('zoologico', array(
		'label' => 'Zoologico',
		'description' => 'Panel de control para los anuncios de aquivamos.org',
		'taxonomies' => array('category','post_tag'),
		'public' => true,
		'menu_icon' => 'dashicons-id',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'zoologico', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		'labels' => array (
			  'name' => 'Zoologico',
			  'singular_name' => 'Zoologicos',
			  'menu_name' => 'Zoologicos',
			  'add_new' => 'Añadir Zoologico',
			  'add_new_item' => 'Añadir Nuevo Zoologico',
			  'edit' => 'Editar',
			  'edit_item' => 'Editar Zoologico',
			  'new_item' => 'Nuevo Zoologico',
			  'view' => 'Ver Zoologico',
			  'view_item' => 'Ver Zoologico',
			  'search_items' => 'Buscar Zoologico',
			  'not_found' => 'No se encontro Zoologico',
			  'not_found_in_trash' => 'Zoologico no se encontro en la papeleria',
			  'parent' => 'Principal Zoologico',
			  )
		) ); 
}

// Codigos para guardar los campos del conferencista
function zoologico_campo( $value ) {
	global $post;

    $campo = get_post_meta( $post->ID, $value, true );
    if ( !empty( $campo ) )
	    return is_array( $campo ) ? tira_profunda( $campo ) : stripslashes( wp_kses_decode_entities( $campo ) );

    return false;
}

// Codigos para indicar donde se va a poner los campos del conferencista
function insertar_campos_zoologico() {
	add_meta_box( 
		'wpshed-meta-box', __( 'Campos especificos para el Zoologico', 'titulo' ), 
		'salida_campos_zoologico', 'zoologico', 'normal', 'high' );

}
add_action( 'add_meta_boxes', 'insertar_campos_zoologico' );

  	// Codigos para los campos personalizados del conferenciasta.
function salida_campos_zoologico( $post ) {
	wp_nonce_field( 'my_wpshed_meta_box_nonce', 'wpshed_meta_box_nonce' ); ?>
	<div style="width: 100%; display:inline-block;">
    	<div style="width:100%; display:inline-block;">
    		
    		<h3>Datos de Contacto</h3>
    			<label for="img-zoologico-direccion">Dirección </label>
				<input style="width: 100%;" type="text" name="img-zoologico-direccion" id="img-zoologico-direccion" value="<?php echo zoologico_campo( 'img-zoologico-direccion' ); ?>" size="50" />
				<label for="img-zoologico-sitio">Sitio Web </label>
				<input style="width: 100%;" type="text" name="img-zoologico-sitio" id="img-zoologico-sitio" value="<?php echo zoologico_campo( 'img-zoologico-sitio' ); ?>" size="50" />
				<label for="img-zoologico-telefono">Teléfono</label>
				<input style="width: 100%;" type="text" name="img-zoologico-telefono" id="img-zoologico-telefono" value="<?php echo zoologico_campo( 'img-zoologico-telefono' ); ?>" size="50" />
			
			<h3>Datos del Mapa de Google</h3>
				<label for="img-zoologico-direccion-dos">Dirección tomada de findlatitudeandlongitude.com</label>
				<input style="width: 100%;" type="text" name="img-zoologico-direccion-dos" id="img-zoologico-direccion-dos" value="<?php echo zoologico_campo( 'img-zoologico-direccion-dos' ); ?>" size="50" />
				<label for="img-zoologico-latitude">Latitude</label>
				<input style="width: 100%;" type="text" name="img-zoologico-latitude" id="img-zoologico-latitude" value="<?php echo zoologico_campo( 'img-zoologico-latitude' ); ?>" size="50" />
				<label for="img-zoologico-longitude">Longitude</label>
				<input style="width: 100%;" type="text" name="img-zoologico-longitude" id="img-zoologico-longitude" value="<?php echo zoologico_campo( 'img-zoologico-longitude' ); ?>" size="50" />
    		
    		<h3>Contcto y Redes Sociales</h3>
    			<label for="img-zoologico-facebook">Facebook</label>
				<input style="width: 100%;" type="text" name="img-zoologico-facebook" id="img-zoologico-facebook" value="<?php echo zoologico_campo( 'img-zoologico-facebook' ); ?>" size="50" />
				<label for="img-zoologico-twitter">Twitter</label>
				<input style="width: 100%;" type="text" name="img-zoologico-twitter" id="img-zoologico-twitter" value="<?php echo zoologico_campo( 'img-zoologico-twitter' ); ?>" size="50" />
				<label for="img-zoologico-youtube">Youtube</label>
				<input style="width: 100%;" type="text" name="img-zoologico-youtube" id="img-zoologico-youtube" value="<?php echo zoologico_campo( 'img-zoologico-youtube' ); ?>" size="50" />
				<label for="img-zoologico-mail">E-mail</label>
				<input style="width: 100%;" type="text" name="img-zoologico-mail" id="img-zoologico-mail" value="<?php echo zoologico_campo( 'img-zoologico-mail' ); ?>" size="50" />

    		<h3>Ponga hasta 16 Imagenes para el Zoologico</h3>
				<label for="img-zoologico-uno">Imagen 01 </label>
				<input style="width: 100%;" type="text" name="img-zoologico-uno" id="img-zoologico-uno" value="<?php echo zoologico_campo( 'img-zoologico-uno' ); ?>" size="50" />
				<label for="img-zoologico-dos">Imagen 02</label>
				<input style="width: 100%;" type="text" name="img-zoologico-dos" id="img-zoologico-dos" value="<?php echo zoologico_campo( 'img-zoologico-dos' ); ?>" size="50" />
				<label for="img-zoologico-tres">Imagen 03</label>
				<input style="width: 100%;" type="text" name="img-zoologico-tres" id="img-zoologico-tres" value="<?php echo zoologico_campo( 'img-zoologico-tres' ); ?>" size="50" />			
				<label for="img-zoologico-cuatro">Imagen 04</label>
				<input style="width: 100%;" type="text" name="img-zoologico-cuatro" id="img-zoologico-cuatro" value="<?php echo zoologico_campo( 'img-zoologico-cuatro' ); ?>" size="50" />
				<label for="img-zoologico-cinco">Imagen 05</label>
				<input style="width: 100%;" type="text" name="img-zoologico-cinco" id="img-zoologico-cinco" value="<?php echo zoologico_campo( 'img-zoologico-cinco' ); ?>" size="50" />
				<label for="img-zoologico-seis">Imagen 06</label>
				<input style="width: 100%;" type="text" name="img-zoologico-seis" id="img-zoologico-seis" value="<?php echo zoologico_campo( 'img-zoologico-seis' ); ?>" size="50" />
				<label for="img-zoologico-siete">Imagen 07</label>
				<input style="width: 100%;" type="text" name="img-zoologico-siete" id="img-zoologico-siete" value="<?php echo zoologico_campo( 'img-zoologico-siete' ); ?>" size="50" />
				<label for="img-zoologico-ocho">Imagen 08</label>
				<input style="width: 100%;" type="text" name="img-zoologico-ocho" id="img-zoologico-ocho" value="<?php echo zoologico_campo( 'img-zoologico-ocho' ); ?>" size="50" />
				<label for="img-zoologico-nueve">Imagen 09</label>
				<input style="width: 100%;" type="text" name="img-zoologico-nueve" id="img-zoologico-nueve" value="<?php echo zoologico_campo( 'img-zoologico-nueve' ); ?>" size="50" />
				<label for="img-zoologico-diez">Imagen 10</label>
				<input style="width: 100%;" type="text" name="img-zoologico-diez" id="img-zoologico-diez" value="<?php echo zoologico_campo( 'img-zoologico-diez' ); ?>" size="50" />
				<label for="img-zoologico-once">Imagen 11</label>
				<input style="width: 100%;" type="text" name="img-zoologico-once" id="img-zoologico-once" value="<?php echo zoologico_campo( 'img-zoologico-once' ); ?>" size="50" />
				<label for="img-zoologico-doce">Imagen 12</label>
				<input style="width: 100%;" type="text" name="img-zoologico-doce" id="img-zoologico-doce" value="<?php echo zoologico_campo( 'img-zoologico-doce' ); ?>" size="50" />
				<label for="img-zoologico-trece">Imagen 13</label>
				<input style="width: 100%;" type="text" name="img-zoologico-trece" id="img-zoologico-trece" value="<?php echo zoologico_campo( 'img-zoologico-trece' ); ?>" size="50" />			
				<label for="img-zoologico-catorce">Imagen 14</label>
				<input style="width: 100%;" type="text" name="img-zoologico-catorce" id="img-zoologico-catorce" value="<?php echo zoologico_campo( 'img-zoologico-catorce' ); ?>" size="50" />
				<label for="img-zoologico-quince">Imagen 15</label>
				<input style="width: 100%;" type="text" name="img-zoologico-quince" id="img-zoologico-quince" value="<?php echo zoologico_campo( 'img-zoologico-quince' ); ?>" size="50" />
		</div>
	</div>
    
	<?php
}

// Codigos para  guardar los campos del conferencista.
function guardar_campos_zoologico( $post_id ) {
	
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// verificar y si no tiene permisos parar.
	if( !isset( $_POST['wpshed_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['wpshed_meta_box_nonce'], 'my_wpshed_meta_box_nonce' ) ) return;

	// Codigo para parar si el usuario no tiene permisos
	if( !current_user_can( 'edit_post' ) ) return;

	// Dirección
	if( isset( $_POST['img-zoologico-direccion'] ) )
		update_post_meta( $post_id, 'img-zoologico-direccion', esc_attr( $_POST['img-zoologico-direccion'] ) );	

	// E-Mail
	if( isset( $_POST['img-zoologico-mail'] ) )
		update_post_meta( $post_id, 'img-zoologico-mail', esc_attr( $_POST['img-zoologico-mail'] ) );	

	// Sitio Web
	if( isset( $_POST['img-zoologico-sitio'] ) )
		update_post_meta( $post_id, 'img-zoologico-sitio', esc_attr( $_POST['img-zoologico-sitio'] ) );	

	// Teléfono
	if( isset( $_POST['img-zoologico-telefono'] ) )
		update_post_meta( $post_id, 'img-zoologico-telefono', esc_attr( $_POST['img-zoologico-telefono'] ) );	

	// Dirección tomada de findlatitudeandlongitude.com
	if( isset( $_POST['img-zoologico-direccion-dos'] ) )
		update_post_meta( $post_id, 'img-zoologico-direccion-dos', esc_attr( $_POST['img-zoologico-direccion-dos'] ) );	

	// Latitude
	if( isset( $_POST['img-zoologico-latitude'] ) )
		update_post_meta( $post_id, 'img-zoologico-latitude', esc_attr( $_POST['img-zoologico-latitude'] ) );		

	// Longitude
	if( isset( $_POST['img-zoologico-longitude'] ) )
		update_post_meta( $post_id, 'img-zoologico-longitude', esc_attr( $_POST['img-zoologico-longitude'] ) );	

	// Facebook
	if( isset( $_POST['img-zoologico-facebook'] ) )
		update_post_meta( $post_id, 'img-zoologico-facebook', esc_attr( $_POST['img-zoologico-facebook'] ) );

	// Twitter
	if( isset( $_POST['img-zoologico-twitter'] ) )
		update_post_meta( $post_id, 'img-zoologico-twitter', esc_attr( $_POST['img-zoologico-twitter'] ) );

	// Youtube
	if( isset( $_POST['img-zoologico-youtube'] ) )
		update_post_meta( $post_id, 'img-zoologico-youtube', esc_attr( $_POST['img-zoologico-youtube'] ) );			

	// Imagen 01 del primer Slider
	if( isset( $_POST['img-zoologico-uno'] ) )
		update_post_meta( $post_id, 'img-zoologico-uno', esc_attr( $_POST['img-zoologico-uno'] ) );	

	// Imagen 02 del primer Slider
	if( isset( $_POST['img-zoologico-dos'] ) )
		update_post_meta( $post_id, 'img-zoologico-dos', esc_attr( $_POST['img-zoologico-dos'] ) );	

	// Imagen 03 del primer Slider
	if( isset( $_POST['img-zoologico-tres'] ) )
		update_post_meta( $post_id, 'img-zoologico-tres', esc_attr( $_POST['img-zoologico-tres'] ) );	

	// Imagen 04 del primer Slider
	if( isset( $_POST['img-zoologico-cuatro'] ) )
		update_post_meta( $post_id, 'img-zoologico-cuatro', esc_attr( $_POST['img-zoologico-cuatro'] ) );	

	// Imagen 05 del primer Slider
	if( isset( $_POST['img-zoologico-cinco'] ) )
		update_post_meta( $post_id, 'img-zoologico-cinco', esc_attr( $_POST['img-zoologico-cinco'] ) );	

	// Imagen 06 del primer Slider
	if( isset( $_POST['img-zoologico-seis'] ) )
		update_post_meta( $post_id, 'img-zoologico-seis', esc_attr( $_POST['img-zoologico-seis'] ) );	

	// Imagen 07 del primer Slider
	if( isset( $_POST['img-zoologico-siete'] ) )
		update_post_meta( $post_id, 'img-zoologico-siete', esc_attr( $_POST['img-zoologico-siete'] ) );	

	// Imagen 08 del primer Slider
	if( isset( $_POST['img-zoologico-ocho'] ) )
		update_post_meta( $post_id, 'img-zoologico-ocho', esc_attr( $_POST['img-zoologico-ocho'] ) );	

	// Imagen 09 del primer Slider
	if( isset( $_POST['img-zoologico-nueve'] ) )
		update_post_meta( $post_id, 'img-zoologico-nueve', esc_attr( $_POST['img-zoologico-nueve'] ) );	

	// Imagen 10 del primer Slider
	if( isset( $_POST['img-zoologico-diez'] ) )
		update_post_meta( $post_id, 'img-zoologico-diez', esc_attr( $_POST['img-zoologico-diez'] ) );	

	// Imagen 11 del primer Slider
	if( isset( $_POST['img-zoologico-once'] ) )
		update_post_meta( $post_id, 'img-zoologico-once', esc_attr( $_POST['img-zoologico-once'] ) );	

	// Imagen 12 del primer Slider
	if( isset( $_POST['img-zoologico-doce'] ) )
		update_post_meta( $post_id, 'img-zoologico-doce', esc_attr( $_POST['img-zoologico-doce'] ) );												

	// Imagen 13 del primer Slider
	if( isset( $_POST['img-zoologico-trece'] ) )
		update_post_meta( $post_id, 'img-zoologico-trece', esc_attr( $_POST['img-zoologico-trece'] ) );	

	// Imagen 14 del primer Slider
	if( isset( $_POST['img-zoologico-catorce'] ) )
		update_post_meta( $post_id, 'img-zoologico-catorce', esc_attr( $_POST['img-zoologico-catorce'] ) );	

	// Imagen 15 del primer Slider
	if( isset( $_POST['img-zoologico-quince'] ) )
		update_post_meta( $post_id, 'img-zoologico-quince', esc_attr( $_POST['img-zoologico-quince'] ) );	

	// Imagen 16 del primer Slider
	if( isset( $_POST['img-zoologico-dieciseis'] ) )
		update_post_meta( $post_id, 'img-zoologico-dieciseis', esc_attr( $_POST['img-zoologico-dieciseis'] ) );	

	// Imagen 17 del primer Slider
	if( isset( $_POST['img-zoologico-diecisiete'] ) )
		update_post_meta( $post_id, 'img-zoologico-diecisiete', esc_attr( $_POST['img-zoologico-diecisiete'] ) );	

										
}
add_action( 'save_post', 'guardar_campos_zoologico' );