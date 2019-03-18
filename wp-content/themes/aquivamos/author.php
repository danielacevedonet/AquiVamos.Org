<?php
	if	( is_user_logged_in() )
	{
		$cu = wp_get_current_user();
		$loaid = "$cu->ID";
		if ( 1 == $loaid ) 
		{ 
?>
<?php get_template_part( 'pages/functions' ); ?><!DOCTYPE html><html lang="es"><head><?php include('prueba.php'); ?><style><?php include('css/single.php'); cssPage(); ?></style><?php materializePage(); ?></head><body><div class="Content"><div class="Content-fixed"><header class="Content-top"><div class="Logo"><h1 class="Logo-title"><a title="Portal AquiVamos.Org" class="Logo-link">AquiVamos.Org</a></h1></div><nav class="Menu-left"><ul class="Menu-list"><li><a href="http://aquivamos.org/" title="Portal AquiVamos.Org" class="Menu-link">Inicio</a></li><li class="Menu-item"><a href="http://aquivamos.org/nosotros/" title="Nosotros" class="Menu-link">Nosotros</a></li><li class="Menu-item"><a href="http://aquivamos.org/articulos/" title="Articulos" class="Menu-link">Articulos</a></li><li class="Menu-item"><a href="http://aquivamos.org/contacto/" title="Contacto" class="Menu-link">Contacto</a></li><li class="Menu-item"><a href="http://aquivamos.org/wp-login.php" title="Acceder" class="Menu-link AccederNone">Acceder</a></li><li class="Menu-item"><a href="http://aquivamos.org/wp-login.php?action=register" title="Crear cuenta" class="Menu-cuenta">Crear cuenta</a></li><li class="Menu-item"><a href="http://aquivamos.org/hotel/" title="Hoteles" class="Menu-link AccederNone">Hoteles</a></li><li class="Menu-item"><a href="http://aquivamos.org/restaurantes/" title="Restaurantes" class="Menu-link AccederNone">Restaurantes</a></li><li class="Menu-item"><a href="http://aquivamos.org/paquetes/" title="Destinos" class="Menu-link AccederNone">Destinos</a></li><li class="Menu-item"><a href="http://aquivamos.org/complejo/" title="Complejos" class="Menu-link AccederNone">Complejos</a></li><li class="Menu-item"><a href="http://aquivamos.org/zoologico/" title="Zoológicos" class="Menu-link AccederNone">Zoológicos</a></li><li class="Menu-item"><a href="http://aquivamos.org/piscina/" title="Piscinas" class="Menu-link AccederNone">Piscinas</a></li></ul><button class="Menu-leftButton icon-menu"></button></nav><form name="search" method="get" action="http://aquivamos.org/" class="Search"><input type="text" name="s" id="search" placeholder="Hoteles, restaurantes, destinos turisticos" class="Search-inputText"><button type="submit" onClick="ga('send', 'event', 'Boton', 'Busqueda', 'index');" class="Search-inputSubmit icon-search"></button></form><nav class="Menu-right"><a href="http://aquivamos.org/wp-login.php" title="Acceder" class="Menu-rightLink">Acceder</a><a href="http://aquivamos.org/wp-login.php?action=register" title="Crear cuenta" class="Menu-rightLinkCrear">Crear cuenta</a></nav></header></div>
	
	<!-- empieza -->
	<?php
	if(isset($_POST['submitted']) && isset($_POST['post_nonce_field']) && wp_verify_nonce($_POST['post_nonce_field'], 'post_nonce')) 
	{

		$postTitle = trim($_POST['postTitle']);
		$postTitle = trim($_POST['postContent']);
		$numero = trim($_POST['numero']);
		$moneda_del_producto = trim($_POST['moneda_del_producto']);
		$id_categoria = trim($_POST['id_categoria']);
		$type_page = trim($_POST['type_page']);
		$page_title_cli = trim($_POST['page_title_cli']); 
		$page_link_cli = trim($_POST['page_link_cli']);

		$uploaddir = wp_upload_dir();
		$file = $_FILES['featured' ];
		$uploadfile = $uploaddir['path'] . '/' . basename( $file['name'] );
		move_uploaded_file( $file['tmp_name'] , $uploadfile );
		$filename = basename( $uploadfile );
		$wp_filetype = wp_check_filetype(basename($filename), null );
		$attachment = array(
			'post_mime_type' => $wp_filetype['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
			'post_content' => '',
			'post_status' => 'inherit',
			'menu_order' => $_i + 1000
			);
		$attach_id = wp_insert_attachment( $attachment, $uploadfile );	

		$new_post = array(
		'post_title' => wp_strip_all_tags( $_POST['postTitle'] ),
		'post_content'  =>  $_POST['postContent'],
		'post_type' => 'page',
		'post_status' => 'publish'
		);

		$post_id = wp_insert_post($new_post);
		update_post_meta($post_id,'_thumbnail_id',$attach_id);
		set_post_thumbnail( $post_id, $thumbnail_id );

		if($post_id)
		{
			// Update Custom Meta
			update_post_meta($post_id, 'can_page', $postTitle );
			update_post_meta($post_id, 'postContent', $postContent );
			update_post_meta($post_id, 'postContent', $postContent );
			update_post_meta($post_id, 'numero', $numero );
			update_post_meta($post_id, 'moneda_del_producto', $moneda_del_producto);
			update_post_meta($post_id, 'type_page', $type_page);
			update_post_meta($post_id, 'page_title_cli', $page_title_cli); 
			update_post_meta($post_id, 'page_link_cli', $page_link_cli); 
			update_post_meta($post_id, 'id_categoria', $id_categoria);

			require_once(ABSPATH . "wp-admin" . '/includes/image.php');
			require_once(ABSPATH . "wp-admin" . '/includes/file.php');
			require_once(ABSPATH . "wp-admin" . '/includes/media.php');	

			// Redirect
			wp_redirect( get_permalink( $post->post_parent ) ); exit;
		}

	}
    ?>
	<style>
		.Content-author {
			display: grid;
			margin-top: 53px;
			background: transparent;
			width: 100%;
			height: auto;
  			grid-template-columns: 1fr;
  			grid-template-rows: auto;
			justify-items: center;
		}
		.Author {
			background: white;
			width: 70%;
			padding:2rem;
		}
		.input-field.col .dropdown-content [type="checkbox"]+label {
			padding-left:35px;
		}
		[type="checkbox"]:not(:checked), [type="checkbox"]:checked {
			opacity: 1 !important;
		}
	</style>
	
<section class="Content-author">
  <div class="Author">
	  <div class="row">
<form class="Form-store col s12" action="" id="primaryPostForm" method="POST" enctype="multipart/form-data">
	<div class="row">
		<div class="Form input-field col s12">
			<input type="text" name="postTitle" id="postTitle" value="" class="validate" required="" aria-required="true" length="35" pattern=".{10,35}" />
			<label for="postTitle">¿Que vendes?</label>
			<span class="helper-text" data-error="Escribe entre 10 - 35 caracteres" data-success="Correcto">10 - 35 caracteres</span>
		</div>
	</div>
	<div class="row">
		<div class="Form input-field col s6">
			
			<select multiple name="id_categoria" id="id_categoria" class="validate" required aria-required="true">
				<option value="" disabled selected>¿Que categoria?</option>
				<?php mi_funcion_categoriaOption(); ?>
			</select>
			<label>Seleccion una categoria</label>
		</div>
		<div class="Form input-field col s6">
			<select name="moneda_del_producto" id="moneda_del_producto" class="validate" required aria-required="true" >
				<option value="" disabled selected>¿Que moneda deseas?</option>
				<option value="COP">Peso Colombiano</option>
				<option value="MXN">Peso Mexicano</option>
				<option value="USD">US Dólar</option>
			</select>
			<label>Seleccion una categoria</label>
		</div>
	</div>	
	<div class="row">
    <div class="Form file-field input-field col s12">
      <div class="btn">
        <span>Subir Imagen</span>
        <input type="file" name="featured" id="featured" size="50" class="validate" required="" aria-required="true" onchange="validarImagen(this);">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>		
	</div>
	<div class="row">
		<div class="Form input-field col s12">
			<textarea name="postContent" id="postContent" value="" class="validate materialize-textarea" required="" aria-required="true" length="2000" pattern=".{30,2000}" ></textarea>
			<label for="postContent">Descripcion del producto</label>
			<span class="helper-text" data-error="Escribe como minimo 30 - 2000 maximo caracteres" data-success="Correcto">30 - 2000 Caracteres</span>
		</div>
	</div>	
<?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>
<input type="hidden" name="submitted" id="submitted" value="true" />
<input type="hidden" name="numero" id="numero" value="<?php echo get_the_ID(); ?>"  />	
<input type="hidden" name="type_page" id="type_page" value="<?php the_field('type_page'); ?>"  />
<input type="hidden" name="page_title_cli" id="page_title_cli" value="<?php the_title(); ?>"  />
<input type="hidden" name="page_link_cli" id="page_link_cli" value="<?php the_permalink(); ?>"  />
<div class="fixed-action-btn">
	<button class="waves-effect waves-light btn-floating btn-large red" type="submit">
		<i class="fa fa-paper-plane" aria-hidden="true"></i>
	</button>
</div>


</form>
	  </div>	  
  </div>
</section>
	<!-- termina -->
	
	<div class="Content-footer"><?php include('footer-new.php'); ?></div><script><?php include('js/jquery.min.php'); ?></script><script><?php include('js/menu.php'); ?></script></div><?php require TEMPLATEPATH . '/traking/bottom.php'; ?><?php jsPage(); ?></body></html>
<?php	}			
		else 
		{
			echo "";
		}			
	}
?>	

<?php

// Set the Current Author Variable $curauth
/** Todo el texto que sigue lo tengo como una referencia
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
     
<div class="author-profile-card">
    <h2>About: <?php echo $curauth->nickname; ?></h2>
    <div class="author-photo">
    <?php echo get_avatar( $curauth->user_email , '200 '); ?>
    </div>
    <p><strong>Website:</strong> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a><br />
    <strong>Bio:</strong> <?php echo $curauth->user_description; ?></p>

</div>
     
<h2>Posts by <?php echo $curauth->nickname; ?>:</h2>
 
 
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h3>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
<?php the_title(); ?></a>
</h3>
<p class="posted-on">Posted on: <?php the_time('d M Y'); ?></p>
 
<?php the_excerpt(); ?>
 
<?php endwhile; 
 
// Previous/next page navigation.
the_posts_pagination();
 
 
else: ?>
<p><?php _e('No posts by this author.'); ?></p>
 
<?php endif; ?>