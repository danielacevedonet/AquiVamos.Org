<?php
/*
Theme: AquiVamos.org
Template name: Oferta seleccion
Ahutor: Daniel Acevedo
*/
get_header(); ?>
<div class="offer-header" style="background-image: url(<?php bloginfo('template_url'); ?>/img/landing-page.jpg);">
	<div class="row">
		<div class="col-md-12">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</div>
<div class="container offer-container-o">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6">
	            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	            <?php the_content(); ?>
	            <?php endwhile; else : ?>
	                <p><?php _e( 'Disculpa, No encontramos lo que buscas.' ); ?></p>
	            <?php endif; ?>
			</div>
			<div class="col-md-6">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="3FWK82QXRSNMN">
					<input type="submit" class="btn btn-primary btn-lg" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea." value="No vivo en Ecuador">
					<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
				</form>				
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
        <!-- Codigo plugin footer inicio -->
        <?php wp_footer(); ?>
        <!-- Codigo plugin footer fin -->
<?php 
    require TEMPLATEPATH . '/traking/bottom.php'; 
?>        
</body>

</html>