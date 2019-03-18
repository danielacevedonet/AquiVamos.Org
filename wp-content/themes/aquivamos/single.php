<!DOCTYPE html><html lang="es"><head><?php include('prueba.php'); ?><style><?php include('css/single.php'); ?></style></head><body><div class="Content"><div class="Content-fixed"><header class="Content-top"><div class="Logo"><h1 class="Logo-title"><a title="Portal AquiVamos.Org" class="Logo-link">AquiVamos.Org</a></h1></div><nav class="Menu-left"><ul class="Menu-list"><li><a href="http://aquivamos.org/" title="Portal AquiVamos.Org" class="Menu-link">Inicio</a></li><li class="Menu-item"><a href="http://aquivamos.org/nosotros/" title="Nosotros" class="Menu-link">Nosotros</a></li><li class="Menu-item"><a href="http://aquivamos.org/articulos/" title="Articulos" class="Menu-link">Articulos</a></li><li class="Menu-item"><a href="http://aquivamos.org/contacto/" title="Contacto" class="Menu-link">Contacto</a></li><li class="Menu-item"><a href="http://aquivamos.org/wp-login.php" title="Acceder" class="Menu-link AccederNone">Acceder</a></li><li class="Menu-item"><a href="http://aquivamos.org/wp-login.php?action=register" title="Crear cuenta" class="Menu-cuenta">Crear cuenta</a></li><li class="Menu-item"><a href="http://aquivamos.org/hotel/" title="Hoteles" class="Menu-link AccederNone">Hoteles</a></li><li class="Menu-item"><a href="http://aquivamos.org/restaurantes/" title="Restaurantes" class="Menu-link AccederNone">Restaurantes</a></li><li class="Menu-item"><a href="http://aquivamos.org/paquetes/" title="Destinos" class="Menu-link AccederNone">Destinos</a></li><li class="Menu-item"><a href="http://aquivamos.org/complejo/" title="Complejos" class="Menu-link AccederNone">Complejos</a></li><li class="Menu-item"><a href="http://aquivamos.org/zoologico/" title="Zoológicos" class="Menu-link AccederNone">Zoológicos</a></li><li class="Menu-item"><a href="http://aquivamos.org/piscina/" title="Piscinas" class="Menu-link AccederNone">Piscinas</a></li></ul><button class="Menu-leftButton icon-menu"></button></nav><form name="search" method="get" action="http://aquivamos.org/" class="Search"><input type="text" name="s" id="search" placeholder="Hoteles, restaurantes, destinos turisticos" class="Search-inputText"><button type="submit" onClick="ga('send', 'event', 'Boton', 'Busqueda', 'index');" class="Search-inputSubmit icon-search"></button></form><nav class="Menu-right"><a href="http://aquivamos.org/wp-login.php" title="Acceder" class="Menu-rightLink">Acceder</a><a href="http://aquivamos.org/wp-login.php?action=register" title="Crear cuenta" class="Menu-rightLinkCrear">Crear cuenta</a></nav></header></div><div class="Breadcrumb-content"><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div><section class="Content-section">

	<div class="Container">
			<?php 
	
	
	//activate_demo();
		$activiti_demo = get_field('activar_la_alerta_de_informacion');
	if (($activiti_demo) == 'si') 
	{
		get_template_part( 'components/views/alerta-info' ); 
	}
	else
	{
		echo "";
	}
	
	?>
		
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><figure class="Container-img"><?php the_post_thumbnail('full'); ?></figure><article class="Section"><header class="Section-header"><div class="Section-article"><h2 title="<?php the_title(); ?>" class="Section-title"><?php the_title(); ?></h2><span class="Section-autor">de 
	
	
	<?php
		$type_page = get_field('type_page');
		if("store" == $type_page){
			get_template_part( 'components/views/link-tipo-pagna' );
		}
		else {
			the_author();
		}
	?> - <?php the_time('d-m-y'); ?>
	
	
	
	
	</span><span class="Section-vistas"></span></div></header></article><div class="Section-redes"><h3 class="Section-redesTitle"><strong>Compartir</strong></h3><div class="Redes"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Comparteme En Facebook" target="_blank" rel="nofollow" data-social_name="facebook" data-social_type="share" data-location="inline" class="Redes-facebook">Facebook</a><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title_attribute(); ?>%20por%20@aquivamosorg" title="Comparteme en Twitter" target="_blank" rel="nofollow" data-social_name="twitter" data-social_type="share" data-location="inline" class="Redes-twitter">Twitter</a><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Comparteme en Google +" target="_blank" rel="nofollow" data-social_name="twitter" data-social_type="share" data-location="inline" class="Redes-googleplus">Google +</a></div></div><article class="Section-description"><h3 class="Section-descriptionTitle"><strong>Descripción</strong></h3><?php the_content(); ?><footer class="Section-footer"> <div class="Section-categoria"><strong>Categoria:</strong> <?php the_category() ?></div><div class="Section-tag"><?php the_tags(); ?></div></footer></article><?php endwhile; else : ?><p><?php _e( 'Disculpa, No encontramos lo que buscas.' ); ?></p><?php endif; ?><div class="Section-comentario"><?php comments_template(); ?></div></div><div class="Lateral"><div class="Lateral-anuncios"><?php include('anuncios/resultados.php'); ?></div><div class="Lateral-paginas"><?php rewind_posts(); ?><?php query_posts('cat=20'); ?><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><article class="Paginas"><div class="Paginas-left"><figure class="Paginas-img"><?php the_post_thumbnail(array(115,65)); ?></figure></div><div class="Paginas-right"><header><h3 class="Paginas-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="Paginas-link"><?php the_title(); ?></a></h3><span class="Paginas-autor"><?php the_author(); ?></span></header></div></article><?php endwhile; else : ?><p><?php _e( 'Disculpa, No encontramos lo que buscas.' ); ?></p><?php endif; ?>   </div></div></section><div class="Content-footer"><?php include('footer-new.php'); ?></div><script><?php include('js/jquery.min.php'); ?></script><script><?php include('js/menu.php'); ?></script></div><?php require TEMPLATEPATH . '/traking/bottom.php'; ?></body></html>