<?php
/*
Theme: AquiVamos.org
Template name: Pagina de registro
Ahutor: Daniel Acevedo
*/
get_header(); ?>
        <div class="ImageRegister">

        </div>
                    <div class="container">
                <div class="row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="LoginDos col-md-12">
                        <div class="col-md-6">
                            <h3 class="LoginDos-title">¿Que hay para mi en AquiVamos.Org?</h3>
                            <div class="LoginDos-content col-med-12">
                                <div class="col-md-1">
                                    <i class="LoginDos-icon fa fa-check"></i>
                                </div>
                                <div class="col-md-11">
                                    <h4 class="LoginDos-contentH4">Comparte tus viajes</h4>
                                    <p>
                                        Tienes un lugar para enviar tus fotos y contarnos lo increible
                                        de tus viajes <strong>SIN COSTO</strong>.
                                    </p>
                                </div>
                            </div>
                            <div class="LoginDos-content col-med-12">
                                <div class="col-md-1">
                                    <i class="LoginDos-icon fa fa-check"></i>
                                </div>
                                <div class="col-md-11">
                                    <h4 class="LoginDos-contentH4">Anunciate con nosotros</h4>
                                    <p>
                                        Si tienes un producto o servicio turistico podras anunciarte
                                        con nosotros <strong>GRATIS</strong> por un mes.
                                    </p>
                                </div>
                            </div>
                            <div class="LoginDos-content col-med-12">
                                <div class="col-md-1">
                                    <i class="LoginDos-icon fa fa-check"></i>
                                </div>
                                <div class="col-md-11">
                                    <h4 class="LoginDos-contentH4">Promociones por mes</h4>
                                    <p>
                                        Participa en nuestros concursos y adquiere vacaciones
                                        pagadas solo por ser <strong>MIEMBRO</strong>.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php the_content(); ?>
                        <?php endwhile; else : ?>
                            <p><?php _e( 'Disculpa, No encontramos lo que buscas.' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <div class="gap"></div>
        <?php get_footer(); ?>
        <!-- Codigo plugin footer inicio -->
        <?php wp_footer(); ?>
        <!-- Codigo plugin footer fin -->
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/slimmenu.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap-datepicker.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap-timepicker.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/nicescroll.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/dropit.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/ionrangeslider.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/icheck.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/typeahead.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/card-payment.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/magnific.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/owl-carousel.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/fitvids.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/tweet.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/countdown.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/gridrotator.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/switcher.js"></script>
    </div>
<?php 
    require TEMPLATEPATH . '/traking/bottom.php'; 
?>    
</body>

</html>



