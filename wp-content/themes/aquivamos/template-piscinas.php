<?php
/*
Theme: Aquivamos.org
Template name: Piscinas
*/


 get_header(); ?>
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>




        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="booking-list">
                        <?php
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $args=array('paged'=>$paged, 'post_type'=>'piscina');
                            query_posts($args);
                        ?>
                        <?php query_posts('post_type=piscina'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <li>
                            <a class="booking-item" href="<?php the_permalink(); ?>">
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php the_post_thumbnail( array(201,151) ); ?>
                                    </div>
                                    <div class="col-md-5">
                                        <h2 class="booking-item-title"><?php the_title(); ?></h2>
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="booking-item-price">&nbsp;</span>
                                        <span class="btn btn-primary">Ver Más</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar(); ?>
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