<?php

/*
Theme: ProyTravel
Ahutor: Daniel Acevedo
*/

get_header(); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            <div class="booking-item-details">
                <header class="booking-item-header">
                    <div class="row">
                        <div class="col-md-9">
                            <h1 class="lh1em"><?php the_title(); ?></h1>
                            <p class="lh1em text-small"><i class="fa fa-map-marker"></i> <?php echo piscina_campo( 'img-piscina-direccion' ); ?></p>
                            <ul class="list list-inline text-small">
                                <li><a href="#"><i class="fa fa-envelope"></i> E-mail del anunciante</a>
                                </li>
                                <li><a href="<?php echo piscina_campo( 'img-piscina-sitio' ); ?>"><i class="fa fa-home"></i> Sitio web del anunciante</a>
                                </li>
                                <li><i class="fa fa-phone"></i> <?php echo piscina_campo( 'img-piscina-telefono' ); ?></li>
                            </ul> 
                        </div>
                        <div class="col-md-3">
                            <!--<p class="booking-item-header-price"><span class="text-lg">$250</span>/noche</p>-->
                        </div>
                    </div>
                </header>
                <div class="row">
                    <div class="col-md-7">
                        <div class="tabbable booking-details-tabbable">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-camera"></i>Fotos</a>
                                </li>
                                <li><a href="#google-map-tab" data-toggle="tab"><i class="fa fa-envelope"></i>Contacto</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-1">
                                    <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs">
                                        <img src="<?php echo piscina_campo( 'img-piscina-uno' ); ?>" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF library" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-dos' ); ?>" alt="Image Alternative text" title="hotel PORTO BAY LIBERDADE" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-tres' ); ?>" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-cuatro' ); ?>" alt="Image Alternative text" title="hotel EDEN MAR suite" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-cinco' ); ?>" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF living room" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-seis' ); ?>" alt="Image Alternative text" title="hotel 2" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-siete' ); ?>" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL rooftop pool" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-ocho' ); ?>" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO lobby" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-nueve' ); ?>" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite2" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-diez' ); ?>" alt="Image Alternative text" title="hotel THE CLIFF BAY spa suite" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-once' ); ?>" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO luxury suite" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-doce' ); ?>" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO suite lhotel living room" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-trece' ); ?>" alt="Image Alternative text" title="The pool" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-cartorce' ); ?>" alt="Image Alternative text" title="hotel 1" />
                                        <img src="<?php echo piscina_campo( 'img-piscina-quince' ); ?>" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL de luxe" />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="google-map-tab" style="100%">
                                    <div class="col-md-12">
                                        <h3>Redes Sociales</h3>
                                         <ul class="list list-horizontal list-space" style="text-align:center;">
                                            <li><a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" target="_blank" href="<?php echo piscina_campo( 'img-piscina-facebook' ); ?>"></a></li>
                                            <li><a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" target="_blank" href="<?php echo piscina_campo( 'img-piscina-twitter' ); ?>"></a></li>
                                            <li><a class="fa fa-youtube box-icon-normal round animate-icon-bottom-to-top" target="_blank" href="<?php echo piscina_campo( 'img-piscina-youtube' ); ?>"></a></li>
                                        </ul>
                                    </div>
                                    <div class="gap"></div>
                                    <div class="col-md-12 formulario-cliente">
                                        <h3>Envianos un Correo</h3>
                                        <!-- Codigo del Formulario de contacto -->
                                            <?php the_field('formulario_conctacto_cliente'); ?>
                                        <!-- fin del codigo de contacto -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="col-md-5">
                        <h3>Mapa</h3>
                        <div id="googlemaps" style="width:100%; height:550px;"></div>
                        
                        <!--
                        <div class="booking-item-meta">
                          < <h2 class="lh1em mt40">Excelente!</h2>
                            <h3>97% <small >los clientes recomienda</small></h3>
                            <div class="booking-item-rating">
                                <ul class="icon-list icon-group booking-item-rating-stars">
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
                                </ul><span class="booking-item-rating-number"><b >4.7</b> de 5 <small class="text-smaller">Puntuación de los clientes</small></span>
                                <p><a class="text-default" href="#">basado en 1535 comentarios</a>
                                </p>
                            </div>
                        </div>
                        <div class="booking-item-dates-change">
                            <form>
                                <div class="input-daterange" data-date-format="MM d, DD">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon"></i>
                                                <label>Desde</label>
                                                <input class="form-control" name="start" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon"></i>
                                                <label>Hasta</label>
                                                <input class="form-control" name="end" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group- form-group-select-plus">
                                            <label>Adultos</label>
                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />1</label>
                                                <label class="btn btn-primary active">
                                                    <input type="radio" name="options" />2</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />3</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />4</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />4+</label>
                                            </div>
                                            <select class="form-control hidden">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option selected="selected">5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-select-plus">
                                            <label>Niños</label>
                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                <label class="btn btn-primary active">
                                                    <input type="radio" name="options" />0</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />1</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />2</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />3</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />3+</label>
                                            </div>
                                            <select class="form-control hidden">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option selected="selected">4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form> 
                        </div>
                        <div class="gap gap-small"></div>	<a href="#" class="btn btn-primary btn-lg">Reservar</a>
                        -->
                    </div> 
                </div>
                <div class="gap"></div>
                <div class="row">
                    <!--<div class="col-md-3">
                        <h3>Servicios</h3>
                        <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                            <li><i class="im im-wi-fi"></i><span class="booking-item-feature-title">Internet con Wi-Fi</span>
                            </li>
                            <li><i class="im im-parking"></i><span class="booking-item-feature-title">Estacionamiento</span>
                            </li>
                            <li><i class="im im-air"></i><span class="booking-item-feature-title">Aire Acondicionado</span>
                            </li>
                            <li><i class="im im-kitchen"></i><span class="booking-item-feature-title">Cocina</span>
                            </li>
                            <li><i class="im im-pool"></i><span class="booking-item-feature-title">Alberca</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Servicios Especiales</h3>
                        <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                            <li><i class="im im-wheel-chair"></i><span class="booking-item-feature-title">Acceso para discapacitados</span>
                            </li>
                            <li><i class="im im-smoking"></i><span class="booking-item-feature-title">Fumadores</span>
                            </li>
                            <li><i class="im im-children"></i><span class="booking-item-feature-title">Niños</span>
                            </li>
                            <li><i class="im im-elder"></i><span class="booking-item-feature-title">Tercera Edad</span>
                            </li>
                            <li><i class="im im-dog"></i><span class="booking-item-feature-title">Mascotas</span>
                            </li>
                        </ul>
                    </div>-->
                    <div class="col-md-12 box-descripcion">
                        <h3 class="titulo-color">Descripción</h3>
                        <?php the_content(); ?>
                        <?php endwhile; else : ?>
                            <p><?php _e( 'Disculpa, No encontramos lo que buscas.' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="gap gap-small"></div>
                <div class="row row-wrap">
                    <div class="col-md-12">
                        <?php comments_template(); ?>
                    </div>
                    <!--
                    <div class="col-md-4">
                        <h4>Otros Negocios</h4>
                        <ul class="booking-list">
                            <li>
                                <div class="booking-item booking-item-small">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="<?php bloginfo('template_url'); ?>/img/hotel_porto_bay_rio_internacional_rooftop_pool_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL rooftop pool" />
                                        </div>
                                        <div class="col-xs-5">
                                            <h5 class="booking-item-title">Styish, Chic, Best of West Village</h5>
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
                                        <div class="col-xs-3"><span class="booking-item-price">$159</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="booking-item booking-item-small">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="<?php bloginfo('template_url'); ?>/img/hotel_porto_bay_serra_golf_suite2_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite2" />
                                        </div>
                                        <div class="col-xs-5">
                                            <h5 class="booking-item-title">Luxury Studio in Manhattan NYC</h5>
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
                                        <div class="col-xs-3"><span class="booking-item-price">$237</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="booking-item booking-item-small">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="<?php bloginfo('template_url'); ?>/img/hotel_eden_mar_suite_800x600.jpg" alt="Image Alternative text" title="hotel EDEN MAR suite" />
                                        </div>
                                        <div class="col-xs-5">
                                            <h5 class="booking-item-title">Luxury Apartment Theatre District</h5>
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
                                        <div class="col-xs-3"><span class="booking-item-price">$414</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="booking-item booking-item-small">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="<?php bloginfo('template_url'); ?>/img/hotel_porto_bay_rio_internacional_de_luxe_800x600.jpg" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL de luxe" />
                                        </div>
                                        <div class="col-xs-5">
                                            <h5 class="booking-item-title">Manhattan Beautiful Loft Excellent Loc</h5>
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
                                        <div class="col-xs-3"><span class="booking-item-price">$183</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="booking-item booking-item-small">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="<?php bloginfo('template_url'); ?>/img/the_pool_800x600.jpg" alt="Image Alternative text" title="The pool" />
                                        </div>
                                        <div class="col-xs-5">
                                            <h5 class="booking-item-title">The Meatpacking Suites - Luxury Lofts, Hot Location</h5>
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
                                        <div class="col-xs-3"><span class="booking-item-price">$476</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    -->
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>



        <?php get_footer(); ?>

        <!-- Codigo plugin footer inicio -->
        <?php wp_footer(); ?>
        <!-- Codigo plugin footer fin -->

        <!----------------------GOOGLE MAPS INICIO-->
  <!-- Script Google Maps -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.gmap.js"></script>
    

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>

        /*
            Map Settings

                Find the Latitude and Longitude of your address:
                    - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
                    - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

            */

            // Map Markers
            var mapMarkers = [{
                address: "<?php echo piscina_campo( 'img-piscina-direccion-dos' ); ?>",
                html: "<strong><?php the_title(); ?></strong><br><?php echo piscina_campo( 'img-piscina-direccion' ); ?><br><br><a href='#' onclick='mapCenterAt({latitude: <?php echo piscina_campo( 'img-piscina-latitude' ); ?>, longitude: <?php echo piscina_campo( 'img-piscina-longitude' ); ?>, zoom: 16}, event)'>[+] zoom here</a>",
                icon: {
                    image: "<?php bloginfo('template_url'); ?>/img/pin.png",
                    iconsize: [26, 46],
                    iconanchor: [12, 46]
                }
            }];   

            // Map Initial Location
            var initLatitude = <?php echo piscina_campo( 'img-piscina-latitude' ); ?>;
            var initLongitude = <?php echo piscina_campo( 'img-piscina-longitude' ); ?>;

            // Map Extended Settings
            var mapSettings = {
                controls: {
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true
                },
                scrollwheel: false,
                markers: mapMarkers,
                latitude: initLatitude,
                longitude: initLongitude,
                zoom: 16
            };

            var map = $("#googlemaps").gMap(mapSettings);

            // Map Center At
            var mapCenterAt = function(options, e) {
                e.preventDefault();
                $("#googlemaps").gMap("centerAt", options);
            }

        </script>
        <!----------------------GOOGLE MAPS FIN-->

        
        <!-- Scripts del Contacto -->
        <script src="<?php bloginfo('template_url'); ?>/contacto/js/jquery.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/contacto/js/bootstrap.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/contacto/js/jquery.validate.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/contacto/js/view.contact.js"></script>

        <!-- Scripts del Theme -->
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



