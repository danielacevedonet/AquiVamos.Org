<?php
/**
 * Simplify Options Page
 * @ Copyright: D5 Creation, All Rights, www.d5creation.com
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = 'simplify';
	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}
function optionsframework_options() {
	
		
	$options[] = array(
		'name' => __('Logotipo', 'simplify'),
		'type' => 'heading');
	
//Logotipos del theme
	$options[] = array(
		'name' => __('Logo superior izquierda',  'simplify'),
		'desc' => __('Logotipo con una medida de 240 x 46 pixeles.',  'simplify'),
		'id' => 'logo-image',
		'std' => get_template_directory_uri() . '/img/logo.png',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Logo del pie de página',  'simplify'),
		'desc' => __('Logotipo con una medida de 282 x 54 pixeles.',  'simplify'),
		'id' => 'logo-image-footer',
		'std' => get_template_directory_uri() . '/img/logo-footer.png',
		'type' => 'upload');		

//Pagina del Index
	$options[] = array(
		'name' => __('Pagina del Index', 'simplify'),
		'type' => 'heading');

	$options[] = array(
		'desc' => '<span class="featured-area-title">'. __('Slider', 'simplify') .'</span>', 
		'type' => 'info');	

	$options[] = array(
		'name' => __('Primera imagen del slider',  'simplify'),
		'desc' => __('La imagen tiene que ser de la siguiente medida <strong>2048 x 1365 IMPORTANTE</strong>',  'simplify'),
		'id' => 'morona-slider-uno',
		'std' => get_template_directory_uri() . '/img/el_inevitable_paso_del_tiempo_2048x2048.jpg',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Titulo del primer slider',  'simplify'),
		'desc' => __('Titulo con solo 12 caracteres',  'simplify'),
		'id' => 'morona-title-slider-uno',
		'std' => 'Título',
		'type' => 'text');

	$options[] = array(
		'name' => __('Link del primer slider',  'simplify'),
		'desc' => __('El link tiene que incluir el http:// o https://',  'simplify'),
		'id' => 'morona-link-slider-uno',
		'std' => 'Título',
		'type' => 'text');

	$options[] = array(
		'name' => __('Segunda imagen del slider',  'simplify'),
		'desc' => __('La imagen tiene que ser de la siguiente medida <strong>2048 x 1365 IMPORTANTE</strong>',  'simplify'),
		'id' => 'morona-slider-dos',
		'std' => get_template_directory_uri() . '/img/el_inevitable_paso_del_tiempo_2048x2048.jpg',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Titulo del segundo slider',  'simplify'),
		'desc' => __('Titulo con solo 12 caracteres',  'simplify'),
		'id' => 'morona-title-slider-dos',
		'std' => 'Título',
		'type' => 'text');

	$options[] = array(
		'name' => __('Link del segundo slider',  'simplify'),
		'desc' => __('El link tiene que incluir el http:// o https://',  'simplify'),
		'id' => 'morona-link-slider-dos',
		'std' => 'Título',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Tercera imagen del slider',  'simplify'),
		'desc' => __('La imagen tiene que ser de la siguiente medida <strong>2048 x 1365 IMPORTANTE</strong>',  'simplify'),
		'id' => 'morona-slider-tres',
		'std' => get_template_directory_uri() . '/img/el_inevitable_paso_del_tiempo_2048x2048.jpg',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Titulo del tercer slider',  'simplify'),
		'desc' => __('Titulo con solo 12 caracteres',  'simplify'),
		'id' => 'morona-title-slider-tres',
		'std' => 'Título',
		'type' => 'text');

	$options[] = array(
		'name' => __('Link del tercer slider',  'simplify'),
		'desc' => __('El link tiene que incluir el http:// o https://',  'simplify'),
		'id' => 'morona-link-slider-tres',
		'std' => 'Título',
		'type' => 'text');		

	$options[] = array(
		'desc' => '<span class="featured-area-title">'. __('Mejores Destinos', 'simplify') .'</span>', 
		'type' => 'info');	

	$options[] = array(
		'name' => __('Imagen de mejorees destinos izquierdo',  'simplify'),
		'desc' => __('La imagen tiene que ser de la siguiente medida <strong>800 x 600 IMPORTANTE</strong>',  'simplify'),
		'id' => 'morona-img-visit-uno',
		'std' => get_template_directory_uri() . '/img/laberintos_de_chiguaza_800x600.jpg',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Titulo del destino de la izquierda',  'simplify'),
		'desc' => __('Titulo con solo 12 caracteres',  'simplify'),
		'id' => 'morona-title-visit-uno',
		'std' => 'Laberintos del Chiguaza',
		'type' => 'text');

	$options[] = array(
		'name' => __('Parrafo del destino de la izquierda',  'simplify'),
		'desc' => __('El parrafo solo tiene que tener 82 caracteres www.contadordecaracteres.com',  'simplify'),
		'id' => 'morona-parrafo-visit-uno',
		'std' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, temporibus modi.',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Link del destino de la izquierda',  'simplify'),
		'desc' => __('El link tiene que incluir el http:// o https://',  'simplify'),
		'id' => 'morona-link-visit-uno',
		'std' => '#',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Imagen de mejorees destinos centro',  'simplify'),
		'desc' => __('La imagen tiene que ser de la siguiente medida <strong>800 x 600 IMPORTANTE</strong>',  'simplify'),
		'id' => 'morona-img-visit-dos',
		'std' => get_template_directory_uri() . '/img/rancho_fatima_400x300.jpg',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Titulo del destino del centro',  'simplify'),
		'desc' => __('Titulo con solo 12 caracteres',  'simplify'),
		'id' => 'morona-title-visit-dos',
		'std' => 'Rancho Fatima',
		'type' => 'text');

	$options[] = array(
		'name' => __('Parrafo del destino del centro',  'simplify'),
		'desc' => __('El parrafo solo tiene que tener 82 caracteres www.contadordecaracteres.com',  'simplify'),
		'id' => 'morona-parrafo-visit-dos',
		'std' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, temporibus modi.',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Link del destino del centro',  'simplify'),
		'desc' => __('El link tiene que incluir el http:// o https://',  'simplify'),
		'id' => 'morona-link-visit-dos',
		'std' => '#',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Imagen de mejorees destinos derecho',  'simplify'),
		'desc' => __('La imagen tiene que ser de la siguiente medida <strong>800 x 600 IMPORTANTE</strong>',  'simplify'),
		'id' => 'morona-img-visit-tres',
		'std' => get_template_directory_uri() . '/img/aventura_amazonica_800x600.jpg',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Titulo del destino de la derecha',  'simplify'),
		'desc' => __('Titulo con solo 12 caracteres',  'simplify'),
		'id' => 'morona-title-visit-tres',
		'std' => 'Aventura Amazonica',
		'type' => 'text');

	$options[] = array(
		'name' => __('Parrafo del destino de la derecha',  'simplify'),
		'desc' => __('El parrafo solo tiene que tener 82 caracteres www.contadordecaracteres.com',  'simplify'),
		'id' => 'morona-parrafo-visit-tres',
		'std' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, temporibus modi.',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Link del destino de la derecha',  'simplify'),
		'desc' => __('El link tiene que incluir el http:// o https://',  'simplify'),
		'id' => 'morona-link-visit-tres',
		'std' => '#',
		'type' => 'text');	

//IMPORTANTE TODO EL TEXTO QUE ESTA ABAJO SE VA A BORRAR O QUITAR O EDITAR
// Redes sociales.
	$options[] = array(
		'name' => __('Redes sociales', 'simplify'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Link del perfil o página de facebook',  'simplify'),
		'desc' => __('Pon todo el link de tu perfil o página de Facebook.',  'simplify'),
		'id' => 'facebook-link',
		'std' => '#',
		'type' => 'text');

	$options[] = array(
		'name' => __('Link del perfil de Twitter',  'simplify'),
		'desc' => __('Pon todo el link de tu perfil de Twitter.',  'simplify'),
		'id' => 'twitter-link',
		'std' => '#',
		'type' => 'text');

	$options[] = array(
		'name' => __('Link del canal en YouTube',  'simplify'),
		'desc' => __('Pon todo el link de tu canal de Youtube.',  'simplify'),
		'id' => 'youtube-link',
		'std' => '#',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Link del perfil de Linkedin',  'simplify'),
		'desc' => __('Pon todo el link de tu perfil de Linkedin.',  'simplify'),
		'id' => 'linkedin-link',
		'std' => '#',
		'type' => 'text');

	$options[] = array(
		'name' => __('Link del perfil de Instagram',  'simplify'),
		'desc' => __('Pon todo el link de tu perfil de Instagram.',  'simplify'),
		'id' => 'instagram-link',
		'std' => '#',
		'type' => 'text');

// Datos de contacto.
	$options[] = array(
		'name' => __('Datos de contacto', 'simplify'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Dirección', 'simplify'), 
		'desc' => __('Ponga la dirección de su negocio',  'simplify'),
		'id' => 'address-text',
		'std' => __('Av. Paucarbamba y Carlos Rigoberto Vintimilla 2-48, Cuenca, Azuay, Ecuador',  'simplify'),
		'type' => 'text');

	$options[] = array(
		'name' => __('Teléfono', 'simplify'), 
		'desc' => __('Ponga el teléfono de su oficina',  'simplify'),
		'id' => 'phone-text',
		'std' => __('+(593)-73-046-687',  'simplify'),
		'type' => 'text');

	$options[] = array(
		'name' => __('Email', 'simplify'), 
		'desc' => __('Ponga su email',  'simplify'),
		'id' => 'email-text',
		'std' => __('info@aquivamos.org',  'simplify'),
		'type' => 'text');

	$options[] = array(
		'name' => __('Horario de atención', 'simplify'), 
		'desc' => __('Campo para poner el horario de la semana',  'simplify'),
		'id' => 'horary-text',
		'std' => __('24/7 Soporte las 24 hrs y los 365 dias del año',  'simplify'),
		'type' => 'text');

	return $options;
}

/*
 * This is an example of how to add custom scripts to the options panel.
 * This example shows/hides an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>


<?php
}
