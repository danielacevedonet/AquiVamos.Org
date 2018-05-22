<?php
/*
Theme: Aquivamos.org
Template name: Blog-template
*/


 get_header(); ?>
        <div class="container">
            <h4 class="page-title">Blog </h4>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-9">
	<?php rewind_posts(); ?>
	<?php query_posts('cat=20'); ?>	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="post">
                        <header class="post-header">
                            <div>
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                        </header>
                        <div class="post-inner">
                            <h1 class="post-title text-darken">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			    	<?php the_title(); ?>
			    </a>
                            </h1>
                            <ul class="post-meta">
                                <li><i class="icon icon-calendar"></i><a href="#"> <?php the_time('m-d-y'); ?></a>
                                </li>
                                <li><i class="icon icon-user"></i><a href="#"> <?php the_author(); ?></a>
                                </li>
                                <li><i class="icon icon-tags"></i><a href="#"> Web</a>
                                </li>
                                <li><i class="icon icon-comments"></i><a href="#"> 3 Comentarios</a>
                                </li>
                            </ul>
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                    <?php endwhile; else : ?>
                        <p><?php _e( 'Disculpa, No encontramos lo que buscas.' ); ?></p>
                    <?php endif; ?>                    
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