<!DOCTYPE html><html lang="es"><head><?php include('prueba.php'); ?><style><?php include('css/single-paquete.php'); ?></style></head><body><div class="Content"><div class="Content-fixed"><header class="Content-top"><div class="Logo"><h1 class="Logo-title"><a title="Portal AquiVamos.Org" class="Logo-link">AquiVamos.Org</a></h1></div><nav class="Menu-left"><ul class="Menu-list"><li><a href="http://aquivamos.org/" title="Portal AquiVamos.Org" class="Menu-link">Inicio</a></li><li class="Menu-item"><a href="http://aquivamos.org/nosotros/" title="Nosotros" class="Menu-link">Nosotros</a></li><li class="Menu-item"><a href="http://aquivamos.org/articulos/" title="Articulos" class="Menu-link">Articulos</a></li><li class="Menu-item"><a href="http://aquivamos.org/contacto/" title="Contacto" class="Menu-link">Contacto</a></li><li class="Menu-item"><a href="http://aquivamos.org/wp-login.php" title="Acceder" class="Menu-link AccederNone">Acceder</a></li><li class="Menu-item"><a href="http://aquivamos.org/wp-login.php?action=register" title="Crear cuenta" class="Menu-cuenta">Crear cuenta</a></li><li class="Menu-item"><a href="http://aquivamos.org/hotel/" title="Hoteles" class="Menu-link AccederNone">Hoteles</a></li><li class="Menu-item"><a href="http://aquivamos.org/restaurantes/" title="Restaurantes" class="Menu-link AccederNone">Restaurantes</a></li><li class="Menu-item"><a href="http://aquivamos.org/paquetes/" title="Destinos" class="Menu-link AccederNone">Destinos</a></li><li class="Menu-item"><a href="http://aquivamos.org/complejo/" title="Complejos" class="Menu-link AccederNone">Complejos</a></li><li class="Menu-item"><a href="http://aquivamos.org/zoologico/" title="Zoológicos" class="Menu-link AccederNone">Zoológicos</a></li><li class="Menu-item"><a href="http://aquivamos.org/piscina/" title="Piscinas" class="Menu-link AccederNone">Piscinas</a></li></ul><button class="Menu-leftButton icon-menu"></button></nav><form name="search" method="get" action="http://aquivamos.org/" class="Search"><input type="text" name="s" id="search" placeholder="Hoteles, restaurantes, destinos turisticos" class="Search-inputText"><button type="submit" onClick="ga('send', 'event', 'Boton', 'Busqueda', 'index');" class="Search-inputSubmit icon-search"></button></form><nav class="Menu-right"><a href="http://aquivamos.org/wp-login.php" title="Acceder" class="Menu-rightLink">Acceder</a><a href="http://aquivamos.org/wp-login.php?action=register" title="Crear cuenta" class="Menu-rightLinkCrear">Crear cuenta</a></nav></header></div><div class="Breadcrumb-content"><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div><section class="Content-section"><div class="Container"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><figure class="Container-img"><?php the_post_thumbnail('full'); ?></figure><article class="Section"><header class="Section-header"><div class="Section-article"><h2 title="<?php the_title(); ?>" class="Section-title"><?php the_title(); ?><strong class=""> desde $<?php the_field('cli-precio'); ?></strong></h2></div></header></article><div class="Lateral-informacion Lateral-top"><a href="#formulario" class="Lateral-link">Solicitar Información</a></div><div class="Galeria"><h3 class="Galeria-titleD">Galería</h3><ul class="Galeria-list"><li><a href="#img1"><?php $aquiImage = get_field('cli-img-small-01'); ?><img src="<?php echo $aquiImage['sizes']['sidebar-thumb']; ?>" alt="<?php echo $image['alt']; ?>" /></a></li><li><a href="#img2"><?php $aquiImage = get_field('cli-img-small-02'); ?><img src="<?php echo $aquiImage['sizes']['sidebar-thumb']; ?>" alt="<?php echo $image['alt']; ?>" /></a></li><li><a href="#img3"><?php $aquiImage = get_field('cli-img-small-03'); ?><img src="<?php echo $aquiImage['sizes']['sidebar-thumb']; ?>" alt="<?php echo $image['alt']; ?>" /></a></li><li><a href="#img4"><?php $aquiImage = get_field('cli-img-small-04'); ?><img src="<?php echo $aquiImage['sizes']['sidebar-thumb']; ?>" alt="<?php echo $image['alt']; ?>" /></a></li><li><a href="#img5"><?php $aquiImage = get_field('cli-img-small-05'); ?><img src="<?php echo $aquiImage['sizes']['sidebar-thumb']; ?>" alt="<?php echo $image['alt']; ?>" /></a></li><li><a href="#img6"><?php $aquiImage = get_field('cli-img-small-06'); ?><img src="<?php echo $aquiImage['sizes']['sidebar-thumb']; ?>" alt="<?php echo $image['alt']; ?>" /></a></li><li><a href="#img7"><?php $aquiImage = get_field('cli-img-small-07'); ?><img src="<?php echo $aquiImage['sizes']['sidebar-thumb']; ?>" alt="<?php echo $image['alt']; ?>" /></a></li><li><a href="#img8"><?php $aquiImage = get_field('cli-img-small-08'); ?><img src="<?php echo $aquiImage['sizes']['sidebar-thumb']; ?>" alt="<?php echo $image['alt']; ?>" /></a></li></ul><div id="img1" class="modal"><div class="imagen"><a href="#img8">&#60;</a><a href="#img2"><?php $aquiImage = get_field('cli-img-small-01'); ?><img src="<?php echo $aquiImage['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></a><a href="#img2">></a></div><a href="" class="cerrar">x</a></div><div id="img2" class="modal"><div class="imagen"><a href="#img1">&#60;</a><a href="#img3"><?php $aquiImage = get_field('cli-img-small-02'); ?><img src="<?php echo $aquiImage['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></a><a href="#img3">></a></div><a href="" class="cerrar">x</a></div><div id="img3" class="modal"><div class="imagen"><a href="#img2">&#60;</a><a href="#img4"><?php $aquiImage = get_field('cli-img-small-03'); ?><img src="<?php echo $aquiImage['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></a><a href="#img4">></a></div><a href="" class="cerrar">x</a></div><div id="img4" class="modal"><div class="imagen"><a href="#img3">&#60;</a><a href="#img5"><?php $aquiImage = get_field('cli-img-small-04'); ?><img src="<?php echo $aquiImage['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></a><a href="#img5">></a></div><a href="" class="cerrar">x</a></div><div id="img5" class="modal"><div class="imagen"><a href="#img4">&#60;</a><a href="#img6"><?php $aquiImage = get_field('cli-img-small-05'); ?><img src="<?php echo $aquiImage['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></a><a href="#img6">></a></div><a href="" class="cerrar">x</a></div><div id="img6" class="modal"><div class="imagen"><a href="#img5">&#60;</a><a href="#img7"><?php $aquiImage = get_field('cli-img-small-06'); ?><img src="<?php echo $aquiImage['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></a><a href="#img7">></a></div><a href="" class="cerrar">x</a></div><div id="img7" class="modal"><div class="imagen"><a href="#img6">&#60;</a><a href="#img8"><?php $aquiImage = get_field('cli-img-small-07'); ?><img src="<?php echo $aquiImage['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></a><a href="#img8">></a></div><a href="" class="cerrar">x</a></div><div id="img8" class="modal"><div class="imagen"><a href="#img7">&#60;</a><a href="#img1"><?php $aquiImage = get_field('cli-img-small-08'); ?><img src="<?php echo $aquiImage['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></a><a href="#img1">></a></div><a href="" class="cerrar">x</a></div></div><div class="Section-redes"><h3 class="Section-redesTitle"><strong>Compartir</strong></h3><div class="Redes"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Comparteme En Facebook" target="_blank" rel="nofollow" data-social_name="facebook" data-social_type="share" data-location="inline" class="Redes-facebook">Facebook</a><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title_attribute(); ?>%20por%20@aquivamosorg" title="Comparteme en Twitter" target="_blank" rel="nofollow" data-social_name="twitter" data-social_type="share" data-location="inline" class="Redes-twitter">Twitter</a><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Comparteme en Google +" target="_blank" rel="nofollow" data-social_name="twitter" data-social_type="share" data-location="inline" class="Redes-googleplus">Google +</a></div></div><div class="Section-contacto"><h3 class="Section-contactoTitle"><strong>Contacto</strong></h3><div class="Contacto"><div class="Contacto-izquierdo"><span> <strong>Teléfono y WhatsApp: </strong><span><?php the_field('cli-telefono'); ?></span></span><span><strong>Skype:</strong><span><a href="skype:<?php the_field('cli-skype'); ?>?call" title="Da click y entra la llamada en Skype"> <strong>Usuario</strong> <?php the_field('cli-skype'); ?></a></span></span></div><div class="Contacto-derecho"><span><strong>Facebook: </strong><span><a href="<?php the_field('cli-facebook'); ?>" rel="nofollow" target="_blank" title="Click para ver el paquete en Facebook">Ver en facebook</a></span></span><span><strong>Twitter: </strong><span><a href="<?php the_field('cli-twitter'); ?>" rel="nofollow" target="_blank" title="Click para ver el paquete en Twitter"> Ver en twitter</a></span></span></div></div></div><article class="Section-description"><h3 class="Section-descriptionTitle"><strong>Descripción</strong></h3><?php the_content(); ?><footer class="Section-footer"> <div class="Section-categoria"><strong>Categoría:</strong> <?php the_category() ?></div><div class="Section-tag"><?php the_tags(); ?></div></footer></article><?php endwhile; else : ?><p><?php _e( 'Disculpa, No encontramos lo que buscas.' ); ?></p><?php endif; ?><div class="Lateral-informacion Lateral-bottom"><a href="#formulario" class="Lateral-link">Solicitar Información          </a></div><div class="Section-comentario"><?php comments_template(); ?></div></div><div class="Lateral"><div class="Lateral-informacion"><a href="#formulario" class="Lateral-link">Solicitar Información</a></div><div id="formulario" class="Lateral-formulario"><a href="" class="Lateral-cerrar">x  </a><div class="Lateral-content"><div role="form" class="wpcf7" id="wpcf7-f1235-o1" lang="es-ES" dir="ltr"><p>Hola estamos muy entusiasmados de poderle antener el paquete que esta por pedir información es: <strong><?php the_title(); ?></strong></p><div class="screen-reader-response"></div><form action="/paquete/mexico/#wpcf7-f1235-o1" method="post" class="wpcf7-form" novalidate="novalidate"><div style="display: none;"><input type="hidden" name="_wpcf7" value="1235"/><input type="hidden" name="_wpcf7_version" value="4.4"/><input type="hidden" name="_wpcf7_locale" value="es_ES"/><input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1235-o1"/><input type="hidden" name="_wpnonce" value="3e22a907e7"/></div><input type="hidden" name="pagina" value="<?php the_permalink(); ?>" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"/><input type="text" placeholder="Escriba su nombre" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"/><input type="email" placeholder="Escriba su email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"/><input type="hidden" name="your-subject" value="<?php the_title(); ?>" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"/><textarea placeholder="Escriba un mesaje" name="your-message" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit"/><div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div></div><div class="Lateral-paginas"><?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; $args=array('paged'=>$paged, 'post_type'=>'paquete'); query_posts($args); ?><?php query_posts('post_type=paquete'); ?><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><article class="Paginas"><div class="Paginas-left"><figure class="Paginas-img"><?php the_post_thumbnail(array(115,65)); ?></figure></div><div class="Paginas-right"><header><h3 class="Paginas-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="Paginas-link"><?php the_title(); ?></a></h3></header></div></article><?php endwhile; else : ?><p><?php _e( 'Disculpa, No encontramos lo que buscas.' ); ?></p><?php endif; ?></div></div></section><div class="Content-footer"><footer class="Footer"><p class="Footer-parrafo">Todos los derechos reservados<a rel="me" href="https://www.facebook.com/DanielAcevedoj" target="_blank" title="Visita mi perfil" class="Footer-link">Daniel Acevedo</a></p></footer></div><script type="text/javascript" data-cfasync="false"><?php include('js/chat-pure-chat.js'); ?></script><script><?php include('js/jquery.min.php'); ?></script><script><?php include('js/menu.php'); ?></script></div><?php require TEMPLATEPATH . '/traking/bottom.php'; ?></body></html>