<?php

// Con este codigo se puede añadir post para conferencistas
add_action('init', 'hoteles_de_aquivamos');

// Con este codigo se ponen los textos y titulos de los conferencistas
function hoteles_de_aquivamos() {
	register_post_type('hotel', array(
		'label' => 'Hotel',
		'description' => 'Panel de control para los conferencistas del congreso internacional de negocios y tecnología para el turismo.',
		'taxonomies' => array('category','tags'), 
		'public' => true,
		'menu_icon' => 'dashicons-id',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'hotel', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		'labels' => array (
			  'name' => 'Hotel',
			  'singular_name' => 'Sliders Uno',
			  'menu_name' => 'Hotel',
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

// Codigos para guardar los campos del hotel
function late_campo( $value ) {
	global $post;

    $campo = get_post_meta( $post->ID, $value, true );
    if ( !empty( $campo ) )
	    return is_array( $campo ) ? tira_profunda( $campo ) : stripslashes( wp_kses_decode_entities( $campo ) );

    return false;
}

// Codigos para indicar donde se va a poner los campos de los hoteles
function insertar_campos() {
	add_meta_box( 
		'wpshed-meta-box', __( 'Campos especificos para Hotel', 'titulo' ), 
		'salida_campos', 'hotel', 'normal', 'high' );

}
add_action( 'add_meta_boxes', 'insertar_campos' );

  	// Codigos para los campos personalizados del conferenciasta.
function salida_campos( $post ) {
	wp_nonce_field( 'my_wpshed_meta_box_nonce', 'wpshed_meta_box_nonce' ); ?>
	<div style="width: 100%; display:inline-block;">
    	<div style="width:100%; display:inline-block;">

			<h3>Datos de Contacto</h3>
    			<label for="img-hotel-direccion">Dirección </label>
				<input style="width: 100%;" type="text" name="img-hotel-direccion" id="img-hotel-direccion" value="<?php echo slider_dos_campo( 'img-hotel-direccion' ); ?>" size="50" />
				<label for="img-hotel-sitio">Sitio Web </label>
				<input style="width: 100%;" type="text" name="img-hotel-sitio" id="img-hotel-sitio" value="<?php echo slider_dos_campo( 'img-hotel-sitio' ); ?>" size="50" />
				<label for="img-hotel-telefono">Teléfono</label>
				<input style="width: 100%;" type="text" name="img-hotel-telefono" id="img-hotel-telefono" value="<?php echo slider_dos_campo( 'img-hotel-telefono' ); ?>" size="50" />
				<label for="img-hotel-mapa">Mapa</label>
				<input style="width: 100%;" type="text" name="img-hotel-mapa" id="img-hotel-mapa" value="<?php echo slider_dos_campo( 'img-hotel-mapa' ); ?>" size="50" />
			
			<h3>Datos del Mapa de Google</h3>
				<label for="img-hotel-direccion-dos">Dirección tomada de findlatitudeandlongitude.com</label>
				<input style="width: 100%;" type="text" name="img-hotel-direccion-dos" id="img-hotel-direccion-dos" value="<?php echo slider_dos_campo( 'img-hotel-direccion-dos' ); ?>" size="50" />
				<label for="img-hotel-latitude">Latitude</label>
				<input style="width: 100%;" type="text" name="img-hotel-latitude" id="img-hotel-latitude" value="<?php echo slider_dos_campo( 'img-hotel-latitude' ); ?>" size="50" />
				<label for="img-hotel-longitude">Longitude</label>
				<input style="width: 100%;" type="text" name="img-hotel-longitude" id="img-hotel-longitude" value="<?php echo slider_dos_campo( 'img-hotel-longitude' ); ?>" size="50" />
    		
    		<h3>Contcto y Redes Sociales</h3>
    			<label for="img-hotel-facebook">Facebook</label>
				<input style="width: 100%;" type="text" name="img-hotel-facebook" id="img-hotel-facebook" value="<?php echo slider_dos_campo( 'img-hotel-facebook' ); ?>" size="50" />
				<label for="img-hotel-twitter">Twitter</label>
				<input style="width: 100%;" type="text" name="img-hotel-twitter" id="img-hotel-twitter" value="<?php echo slider_dos_campo( 'img-hotel-twitter' ); ?>" size="50" />
				<label for="img-hotel-youtube">Youtube</label>
				<input style="width: 100%;" type="text" name="img-hotel-youtube" id="img-hotel-youtube" value="<?php echo slider_dos_campo( 'img-hotel-youtube' ); ?>" size="50" />
				<label for="img-hotel-mail">E-mail</label>
				<input style="width: 100%;" type="text" name="img-hotel-mail" id="img-hotel-mail" value="<?php echo slider_dos_campo( 'img-hotel-mail' ); ?>" size="50" />

    		<h3>Ponga hasta 18 Imagenes para el Hotel</h3>
				<label for="img-hotel-uno">Imagen 01 </label>
				<input style="width: 100%;" type="text" name="img-hotel-uno" id="img-hotel-uno" value="<?php echo late_campo( 'img-hotel-uno' ); ?>" size="50" />
				<label for="img-hotel-dos">Imagen 02</label>
				<input style="width: 100%;" type="text" name="img-hotel-dos" id="img-hotel-dos" value="<?php echo late_campo( 'img-hotel-dos' ); ?>" size="50" />
				<label for="img-hotel-tres">Imagen 03</label>
				<input style="width: 100%;" type="text" name="img-hotel-tres" id="img-hotel-tres" value="<?php echo late_campo( 'img-hotel-tres' ); ?>" size="50" />			
				<label for="img-hotel-cuatro">Imagen 04</label>
				<input style="width: 100%;" type="text" name="img-hotel-cuatro" id="img-hotel-cuatro" value="<?php echo late_campo( 'img-hotel-cuatro' ); ?>" size="50" />
				<label for="img-hotel-cinco">Imagen 05</label>
				<input style="width: 100%;" type="text" name="img-hotel-cinco" id="img-hotel-cinco" value="<?php echo late_campo( 'img-hotel-cinco' ); ?>" size="50" />
				<label for="img-hotel-seis">Imagen 06</label>
				<input style="width: 100%;" type="text" name="img-hotel-seis" id="img-hotel-seis" value="<?php echo late_campo( 'img-hotel-seis' ); ?>" size="50" />
				<label for="img-hotel-siete">Imagen 07</label>
				<input style="width: 100%;" type="text" name="img-hotel-siete" id="img-hotel-siete" value="<?php echo late_campo( 'img-hotel-siete' ); ?>" size="50" />
				<label for="img-hotel-ocho">Imagen 08</label>
				<input style="width: 100%;" type="text" name="img-hotel-ocho" id="img-hotel-ocho" value="<?php echo late_campo( 'img-hotel-ocho' ); ?>" size="50" />
				<label for="img-hotel-nueve">Imagen 09</label>
				<input style="width: 100%;" type="text" name="img-hotel-nueve" id="img-hotel-nueve" value="<?php echo late_campo( 'img-hotel-nueve' ); ?>" size="50" />
				<label for="img-hotel-diez">Imagen 10</label>
				<input style="width: 100%;" type="text" name="img-hotel-diez" id="img-hotel-diez" value="<?php echo late_campo( 'img-hotel-diez' ); ?>" size="50" />
				<label for="img-hotel-once">Imagen 11</label>
				<input style="width: 100%;" type="text" name="img-hotel-once" id="img-hotel-once" value="<?php echo late_campo( 'img-hotel-once' ); ?>" size="50" />
				<label for="img-hotel-doce">Imagen 12</label>
				<input style="width: 100%;" type="text" name="img-hotel-doce" id="img-hotel-doce" value="<?php echo late_campo( 'img-hotel-doce' ); ?>" size="50" />
				<label for="img-hotel-trece">Imagen 13</label>
				<input style="width: 100%;" type="text" name="img-hotel-trece" id="img-hotel-trece" value="<?php echo late_campo( 'img-hotel-trece' ); ?>" size="50" />			
				<label for="img-hotel-catorce">Imagen 14</label>
				<input style="width: 100%;" type="text" name="img-hotel-catorce" id="img-hotel-catorce" value="<?php echo late_campo( 'img-hotel-catorce' ); ?>" size="50" />
				<label for="img-hotel-quince">Imagen 15</label>
				<input style="width: 100%;" type="text" name="img-hotel-quince" id="img-hotel-quince" value="<?php echo late_campo( 'img-hotel-quince' ); ?>" size="50" />
				<label for="img-hotel-dieciseis">Imagen 16</label>
				<input style="width: 100%;" type="text" name="img-hotel-dieciseis" id="img-hotel-dieciseis" value="<?php echo late_campo( 'img-hotel-dieciseis' ); ?>" size="50" />
				<label for="img-hotel-diecisiete">Imagen 17</label>
				<input style="width: 100%;" type="text" name="img-hotel-diecisiete" id="img-hotel-diecisiete" value="<?php echo late_campo( 'img-hotel-diecisiete' ); ?>" size="50" />
				<label for="img-hotel-diecioso">Imagen 18</label>
				<input style="width: 100%;" type="text" name="img-hotel-diecioso" id="img-hotel-diecioso" value="<?php echo late_campo( 'img-hotel-diecioso' ); ?>" size="50" />
		</div>
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
	
	// Dirección
	if( isset( $_POST['img-hotel-direccion'] ) )
		update_post_meta( $post_id, 'img-hotel-direccion', esc_attr( $_POST['img-hotel-direccion'] ) );	

	// E-Mail
	if( isset( $_POST['img-hotel-mail'] ) )
		update_post_meta( $post_id, 'img-hotel-mail', esc_attr( $_POST['img-hotel-mail'] ) );	

	// Sitio Web
	if( isset( $_POST['img-hotel-sitio'] ) )
		update_post_meta( $post_id, 'img-hotel-sitio', esc_attr( $_POST['img-hotel-sitio'] ) );	

	// Teléfono
	if( isset( $_POST['img-hotel-telefono'] ) )
		update_post_meta( $post_id, 'img-hotel-telefono', esc_attr( $_POST['img-hotel-telefono'] ) );	

	// Dirección tomada de findlatitudeandlongitude.com
	if( isset( $_POST['img-hotel-direccion-dos'] ) )
		update_post_meta( $post_id, 'img-hotel-direccion-dos', esc_attr( $_POST['img-hotel-direccion-dos'] ) );	

	// Latitude
	if( isset( $_POST['img-hotel-latitude'] ) )
		update_post_meta( $post_id, 'img-hotel-latitude', esc_attr( $_POST['img-hotel-latitude'] ) );		

	// Longitude
	if( isset( $_POST['img-hotel-longitude'] ) )
		update_post_meta( $post_id, 'img-hotel-longitude', esc_attr( $_POST['img-hotel-longitude'] ) );	

	// Facebook
	if( isset( $_POST['img-hotel-facebook'] ) )
		update_post_meta( $post_id, 'img-hotel-facebook', esc_attr( $_POST['img-hotel-facebook'] ) );

	// Twitter
	if( isset( $_POST['img-hotel-twitter'] ) )
		update_post_meta( $post_id, 'img-hotel-twitter', esc_attr( $_POST['img-hotel-twitter'] ) );

	// Youtube
	if( isset( $_POST['img-hotel-youtube'] ) )
		update_post_meta( $post_id, 'img-hotel-youtube', esc_attr( $_POST['img-hotel-youtube'] ) );			

	// Imagen 01 del primer Slider
	if( isset( $_POST['img-hotel-uno'] ) )
		update_post_meta( $post_id, 'img-hotel-uno', esc_attr( $_POST['img-hotel-uno'] ) );	

	// Imagen 02 del primer Slider
	if( isset( $_POST['img-hotel-dos'] ) )
		update_post_meta( $post_id, 'img-hotel-dos', esc_attr( $_POST['img-hotel-dos'] ) );	

	// Imagen 03 del primer Slider
	if( isset( $_POST['img-hotel-tres'] ) )
		update_post_meta( $post_id, 'img-hotel-tres', esc_attr( $_POST['img-hotel-tres'] ) );	

	// Imagen 04 del primer Slider
	if( isset( $_POST['img-hotel-cuatro'] ) )
		update_post_meta( $post_id, 'img-hotel-cuatro', esc_attr( $_POST['img-hotel-cuatro'] ) );	

	// Imagen 05 del primer Slider
	if( isset( $_POST['img-hotel-cinco'] ) )
		update_post_meta( $post_id, 'img-hotel-cinco', esc_attr( $_POST['img-hotel-cinco'] ) );	

	// Imagen 06 del primer Slider
	if( isset( $_POST['img-hotel-seis'] ) )
		update_post_meta( $post_id, 'img-hotel-seis', esc_attr( $_POST['img-hotel-seis'] ) );	

	// Imagen 07 del primer Slider
	if( isset( $_POST['img-hotel-siete'] ) )
		update_post_meta( $post_id, 'img-hotel-siete', esc_attr( $_POST['img-hotel-siete'] ) );	

	// Imagen 08 del primer Slider
	if( isset( $_POST['img-hotel-ocho'] ) )
		update_post_meta( $post_id, 'img-hotel-ocho', esc_attr( $_POST['img-hotel-ocho'] ) );	

	// Imagen 09 del primer Slider
	if( isset( $_POST['img-hotel-nueve'] ) )
		update_post_meta( $post_id, 'img-hotel-nueve', esc_attr( $_POST['img-hotel-nueve'] ) );	

	// Imagen 10 del primer Slider
	if( isset( $_POST['img-hotel-diez'] ) )
		update_post_meta( $post_id, 'img-hotel-diez', esc_attr( $_POST['img-hotel-diez'] ) );	

	// Imagen 11 del primer Slider
	if( isset( $_POST['img-hotel-once'] ) )
		update_post_meta( $post_id, 'img-hotel-once', esc_attr( $_POST['img-hotel-once'] ) );	

	// Imagen 12 del primer Slider
	if( isset( $_POST['img-hotel-doce'] ) )
		update_post_meta( $post_id, 'img-hotel-doce', esc_attr( $_POST['img-hotel-doce'] ) );												

	// Imagen 13 del primer Slider
	if( isset( $_POST['img-hotel-trece'] ) )
		update_post_meta( $post_id, 'img-hotel-trece', esc_attr( $_POST['img-hotel-trece'] ) );	

	// Imagen 14 del primer Slider
	if( isset( $_POST['img-hotel-catorce'] ) )
		update_post_meta( $post_id, 'img-hotel-catorce', esc_attr( $_POST['img-hotel-catorce'] ) );	

	// Imagen 15 del primer Slider
	if( isset( $_POST['img-hotel-quince'] ) )
		update_post_meta( $post_id, 'img-hotel-quince', esc_attr( $_POST['img-hotel-quince'] ) );	

	// Imagen 16 del primer Slider
	if( isset( $_POST['img-hotel-dieciseis'] ) )
		update_post_meta( $post_id, 'img-hotel-dieciseis', esc_attr( $_POST['img-hotel-dieciseis'] ) );	

	// Imagen 17 del primer Slider
	if( isset( $_POST['img-hotel-diecisiete'] ) )
		update_post_meta( $post_id, 'img-hotel-diecisiete', esc_attr( $_POST['img-hotel-diecisiete'] ) );	

	// Imagen 18 del primer Slider
	if( isset( $_POST['img-hotel-diecioso'] ) )
		update_post_meta( $post_id, 'img-hotel-diecioso', esc_attr( $_POST['img-hotel-diecioso'] ) );										
}
add_action( 'save_post', 'guardar_campos' );