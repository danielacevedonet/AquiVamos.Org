<?php /* Theme: AquiVamos.org Template name: Portadas */ ?><!DOCTYPE html><html lang="es"><head><?php include('prueba.php'); ?><style><?php include('css/page-portadas.css'); ?></style></head><body><div class="Content-nueva"><header class="Header-nueva"><div id="Header-nuevaMostrar" class="Header-nuevaOculto"><div class="Header-nuevaCerrar"><a href="">X																						</a></div><?php wp_nav_menu( array('menu' => 'uno', 'container_class' => 'Menu-oculto', 'container' => 'nav')); ?></div><div class="Header-nuevaArriba"><div class="Header-nuevaArribaFondo"><div class="Menu-content"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><h1 class="Header-nuevaTitle">AquiVamos.Org</h1></a><?php wp_nav_menu( array('menu' => 'dos', 'container_class' => 'Menu-cabecera', 'container' => 'nav')); ?>			</div><div class="Header-nuevaBuscador"><div class="Buscador-nueva"><img src="http://aquivamos.org/wp-content/themes/aquivamos/img/logo-180_x_150.png"><h2 class="Buscador-nuevaTitle">AquiVamos.Org</h2><form name="search" method="get" action="http://aquivamos.org/"><input type="text" name="s" id="search" method="get" placeholder="Hola ¿A donde vas de vacaciones?"><input type="submit" onClick="ga('send', 'event', 'Boton', 'Busqueda', 'index');" value="Buscar"></form></div></div></div></div></header><section class="Section-nueva"><div class="Section-nuevaContent"><div class="Section-nuevaPaquetes"> <h2>Paquetes</h2><div class="Section-nuevaArticle"> 
<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; $args=array('paged'=>$paged, 'post_type'=>'paquete'); query_posts($args); ?><?php query_posts('post_type=paquete'); ?><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><article class="Section-nuevaBox"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?><h3><?php the_title(); ?></h3><span>Desde $<?php the_field('cli-precio'); ?> USD</span></a></article><?php endwhile; ?><?php endif; ?></div></div><div class="Section-nuevaHoteles"><h2>Hoteles</h2><div class="Section-nuevaArticle"><?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; $args=array('paged'=>$paged, 'post_type'=>'hotel'); query_posts($args); ?><?php query_posts('post_type=hotel'); ?><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><article class="Section-nuevaBox"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?><h3><?php the_title(); ?></h3></a></article><?php endwhile; ?><?php endif; ?>						</div></div><div class="Section-nuevaRestaurantes"><h2>Restaurantes</h2><div class="Section-nuevaArticle"><?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; $args=array('paged'=>$paged, 'post_type'=>'restaurantes'); query_posts($args); ?><?php query_posts('post_type=restaurantes'); ?><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><article class="Section-nuevaBox"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?><h3><?php the_title(); ?></h3></a></article><?php endwhile; ?><?php endif; ?></div></div><div class="Section-nuevaRestaurantes"><h2>Articulos de Interes</h2><div class="Section-nuevaArticle"><?php rewind_posts(); ?><?php query_posts('cat=20'); ?><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><article class="Section-nuevaBox"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?><h3><?php the_title(); ?></h3></a></article><?php endwhile; ?><?php endif; ?>							</div></div></div></section><div class="Content-footer"><?php include('footer-new.php'); ?></div></div><?php require TEMPLATEPATH . '/traking/bottom.php'; ?></body></html>