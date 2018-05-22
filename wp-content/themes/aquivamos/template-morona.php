<?php get_header(); ?>

        <!-- TOP AREA -->
        <div class="top-area show-onload">
            <div class="owl-carousel owl-slider owl-carousel-area" id="owl-carousel-slider">
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(<?php echo esc_url(of_get_option('morona-slider-uno', get_template_directory_uri() . '/img/el_inevitable_paso_del_tiempo_2048x2048.jpg')); ?>);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <h1 class="owl-cap-title fittext"><?php echo esc_textarea(of_get_option('morona-title-slider-uno', __('Morona Santiago','simplify'))); ?></h1>
                            <div class="owl-cap-price"><small>  &nbsp;</small>
                                <h5>    &nbsp;</h5>
                            </div><a class="btn btn-white btn-ghost" href="<?php echo esc_textarea(of_get_option('morona-link-slider-uno', __('#','simplify'))); ?>"><i class="fa fa-angle-right"></i> Leer Más...</a>
                        </div>
                    </div>
                </div>
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(<?php echo esc_url(of_get_option('morona-slider-dos', get_template_directory_uri() . '/img/viva_las_vegas_2048x1365.jpg')); ?>);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <h1 class="owl-cap-title fittext"><?php echo esc_textarea(of_get_option('morona-title-slider-dos', __('Morona Santiago','simplify'))); ?></h1>
                            <div class="owl-cap-price"><small>  &nbsp;</small>
                                <h5>    &nbsp;</h5>
                            </div><a class="btn btn-white btn-ghost" href="<?php echo esc_textarea(of_get_option('morona-link-slider-dos', __('#','simplify'))); ?>"><i class="fa fa-angle-right"></i> Leer Más...</a>
                        </div>
                    </div>
                </div>
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(<?php echo esc_url(of_get_option('morona-slider-tres', get_template_directory_uri() . '/img/196_365_2048x1365.jpg')); ?>);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <h1 class="owl-cap-title fittext"><?php echo esc_textarea(of_get_option('morona-title-slider-tres', __('Morona Santiago','simplify'))); ?></h1>
                            <div class="owl-cap-price"><small>  &nbsp;</small>
                                <h5>    &nbsp;</h5>
                            </div><a class="btn btn-white btn-ghost" href="<?php echo esc_textarea(of_get_option('morona-link-slider-tres', __('#','simplify'))); ?>"><i class="fa fa-angle-right"></i> Leer Más...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TOP AREA  -->




        <div class="container">
            <?php include('search.php'); ?>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4">
                    <h3>Registrados Hoy <small ><a href="#">ver todo</a></small></h3>
                    <ul class="booking-list">
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php bloginfo('template_url'); ?>/img/hotel_porto_bay_serra_golf_library_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL de luxe" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Hotel 1</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-half-empty"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">desde</span><span class="booking-item-price">$230</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php bloginfo('template_url'); ?>/img/hotel_porto_bay_serra_golf_library_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF library" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Restaurante 1</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">desde</span><span class="booking-item-price">$257</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php bloginfo('template_url'); ?>/img/hotel_porto_bay_rio_internacional_rooftop_pool_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL rooftop pool" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Parque recreativo</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">desde</span><span class="booking-item-price">$322</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Hoteles <small ><a href="#">ver todo</a></small></h3>
                    <ul class="booking-list">
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php bloginfo('template_url'); ?>/img/lhotel_porto_bay_sao_paulo_suite_lhotel_living_room_800x600.jpg" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO suite lhotel living room" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Hotel Helicona</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-half-empty"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">desde</span><span class="booking-item-price">$480</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php bloginfo('template_url'); ?>/img/hotel_porto_bay_serra_golf_suite_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Hotel Toys</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">desde</span><span class="booking-item-price">$369</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php bloginfo('template_url'); ?>/img/hotel_porto_bay_serra_golf_living_room_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF living room" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Hotel Macas</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">desde</span><span class="booking-item-price">$278</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Restaurante <small ><a href="#">ver todo</a></small></h3>
                    <ul class="booking-list">
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php bloginfo('template_url'); ?>/img/hotel_porto_bay_rio_internacional_de_luxe_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL de luxe" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Ta canijo</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-half-empty"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">desde</span><span class="booking-item-price">$182</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php bloginfo('template_url'); ?>/img/hotel_porto_bay_serra_golf_suite_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Restaurante Sucua</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">desde</span><span class="booking-item-price">$267</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php bloginfo('template_url'); ?>/img/hotel_porto_bay_serra_golf_library_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF library" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Restaurante</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-half-empty"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">desde</span><span class="booking-item-price">$234</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="gap gap-small"></div>
            <h2 class="mb20">Visite nuestros mejores Destinos</h2>
            <div class="row row-wrap">
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="http://www.chiguaza.com/" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/img/laberintos_de_chiguaza_800x600.jpg" alt="Laberintos del Chiguaza" title="Laberintos del Chiguaza" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Laberintos del Chiguaza</h4>
                            <p class="thumb-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt blanditiis, </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/img/rancho_fatima_400x300.jpg" alt="Rancho Fatima" title="Rancho Fatima" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Rancho Fatima</h4>
                            <p class="thumb-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum laborum distinctio </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/img/aventura_amazonica_800x600.jpg" alt="Image Alternative text" title="people on the beach" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Aventura Amazonica</h4>
                            <p class="thumb-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, temporibus modi. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>



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
        <script src="<?php bloginfo('template_url'); ?>/js/card-payment.js"></script><!--Falta-->
        <script src="<?php bloginfo('template_url'); ?>/js/magnific.js"></script><!--Falta-->
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



