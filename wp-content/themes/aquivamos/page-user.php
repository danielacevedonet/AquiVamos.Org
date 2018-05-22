<?php
/*
Theme: AquiVamos.org
Template name: Pagina de Usuario
Ahutor: Daniel Acevedo
*/
get_header(); ?>
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>




        <div class="container">
            <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-9">
                    <?php the_content(); ?>
                    <?php endwhile; else : ?>
                        <p><?php _e( 'Disculpa, No encontramos lo que buscas.' ); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar('user'); ?>
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



