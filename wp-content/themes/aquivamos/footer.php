        <footer id="main-footer">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <a class="logo" href="http://aquivamos.org/">
                            <img src="<?php echo esc_url(of_get_option('logo-image-footer', get_template_directory_uri() . '/img/logo.png')); ?>" alt="Image Alternative text" title="Image Title" />
                        </a>
                        <p class="mb20">Encuentra el servicio turístico para tus vacaciones de ensueño. AquiVamos.org te ayuda.</p>
                        <ul class="list list-horizontal list-space">
                            <li>
                                <a style="background: #3B5998;" class="fa fa-facebook facebook-color box-icon-normal round animate-icon-bottom-to-top" href="<?php echo esc_textarea(of_get_option('facebook-link', __('#','simplify'))); ?>" target="_blank"></a>
                            </li>
                            <li>
                                <a style="background: #55ACEE;" class="fa fa-twitter twitter-color box-icon-normal round animate-icon-bottom-to-top" href="<?php echo esc_textarea(of_get_option('twitter-link', __('#','simplify'))); ?>" target="_blank"></a>
                            </li>
                            <li>
                                <a style="background: #AF1318;" class="fa fa-youtube youtube-color box-icon-normal round animate-icon-bottom-to-top" href="<?php echo esc_textarea(of_get_option('youtube-link', __('#','simplify'))); ?>" target="_blank"></a>
                            </li>
                            <li>
                                <a style="background: #DF4A32;" class="fa fa-google-plus google-plus-color box-icon-normal round animate-icon-bottom-to-top" href="<?php echo esc_textarea(of_get_option('linkedin-link', __('#','simplify'))); ?>" target="_blank"></a>
                            </li>
                            <li>
                                <a style="background: #3F729B;" class="fa fa-instagram instagram-color box-icon-normal round animate-icon-bottom-to-top" href="<?php echo esc_textarea(of_get_option('instagram-link', __('#','simplify'))); ?>" target="_blank"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Boletín</h4>
                        <form action="//aquivamos.us10.list-manage.com/subscribe/post?u=1edd11e3409a1cf094d946f64&amp;id=e3bffdf272" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <label>Escribe tu email</label>
                            <input type="email" value="" name="EMAIL" id="mce-EMAIL" class="form-control">
                            <p class="mt5"><small>*Jamás enviamos Spam</small>
                            </p>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;">
                                <input type="text" name="b_1edd11e3409a1cf094d946f64_e3bffdf272" tabindex="-1" value="">
                            </div>
                            <input type="submit" class="btn btn-primary" id="mc-embedded-subscribe" value="Enviar">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <!--
                        <ul class="list list-footer">
                            <li><a href="#">Link 1</a>
                            </li>
                            <li><a href="#">Link 2</a>
                            </li>
                            <li><a href="#">Link 3</a>
                            </li>
                            <li><a href="#">Link 4</a>
                            </li>
                            <li><a href="#">Link 5</a>
                            </li>
                            <li><a href="#">Link 6</a>
                            </li>
                            <li><a href="#">Link 7</a>
                            </li>
                            <li><a href="#">Link 8</a>
                            </li>
                        </ul>
                        -->
                    </div>
                    <div class="col-md-4">
                        <h4>¿Tienes una pregunta?</h4>
                        <h4 class="text-color"><?php echo esc_textarea(of_get_option('phone-text', __('+(593)-73-046-687','simplify'))); ?></h4>
                        <h4><a href="/contacto/" class="text-color"><?php echo esc_textarea(of_get_option('email-text', __('info@aquivamos.org','simplify'))); ?></a></h4>
                        <p><?php echo esc_textarea(of_get_option('horary-text', __('24/7 Soporte las 24 hrs y los 365 dias del año','simplify'))); ?></p>
                    </div>

                </div>
            </div>
        </footer>
        <!-- Codigos de rastreo o seguimiento -->
        <?php the_field('conversion_de_objetivo'); ?>
        <!-- Codigos de rastreo o seguimiento -->