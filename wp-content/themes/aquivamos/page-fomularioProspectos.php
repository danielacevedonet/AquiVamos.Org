<?php /* Theme: Aquivamos.org Diseñado por Daniel Acevedo Template name: Pagina prospectos */ ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/page-fomularioProspectos.css">
  </head>
  <body>
    <div class="Content">
      <div class="Content-head">Head</div>
      <div class="Content-center">
        <div class="Content-centerLeft">
          <div class="FotoAutor">
            <div class="FotoAutor-imgContent"><img src="img/daniel-acevedo.jpg" class="FotoAutor-img"></div>
          </div>
          <nav class="MenuUsuario">
            <ul>
              <li><a href="http://aquivamos.org/wp-admin/post-new.php">Publicar Articulo</a></li>
              <li><a href="http://aquivamos.org/wp-admin/post-new.php?post_type=hotel">Publicar Hotel</a></li>
              <li><a href="http://aquivamos.org/wp-admin/post-new.php?post_type=restaurantes">Publicar Restaurante</a></li>
              <li><a href="http://aquivamos.org/wp-admin/post-new.php?post_type=paquete">Publicar Paquete</a></li>
              <li><a href="http://aquivamos.org/wp-admin/post-new.php?post_type=agencia">Publicar Agencia</a></li>
              <li><a href="#">Prospecto                                                           </a></li>
            </ul>
          </nav>
        </div>
        <div class="Content-centerRight">
          <div class="FormularioProspectos">
            <div class="FormularioProspectos-title">
              <h3>Formulario de Prospectos</h3>
            </div>
            <div class="FormularioProspectos-contet">
              <form id="mc4wp-form-1" method="post" data-id="2348" data-name="Formulario para administradores PRUEBA" class="mc4wp-form mc4wp-form-2348">
                <div class="mc4wp-form-fields">
                  <p class="mc-field-group">
                    <label>Email principal</label>
                    <input type="email" name="EMAIL" required="">
                  </p>
                  <p class="mc-field-group">
                    <label>¿Es un producto o servicio turistico?</label>
                    <label>
                      <input name="GROUPINGS[7097]" type="radio" value="25529"><span>Si</span>
                    </label>
                    <label>
                      <input name="GROUPINGS[7097]" type="radio" value="25533"><span>No</span>
                    </label>
                  </p>
                  <p class="mc-field-group">
                    <label>Marca el mas adecuado</label>
                    <label>
                      <input name="GROUPINGS[8037][]" type="checkbox" value="28765"><span>Agencia de viajes</span>
                    </label>
                    <label>
                      <input name="GROUPINGS[8037][]" type="checkbox" value="28769"><span>Turista</span>
                    </label>
                    <label>
                      <input name="GROUPINGS[8037][]" type="checkbox" value="28773"><span>Hotel</span>
                    </label>
                    <label>
                      <input name="GROUPINGS[8037][]" type="checkbox" value="28777"><span>Restaurante</span>
                    </label>
                    <label>
                      <input name="GROUPINGS[8037][]" type="checkbox" value="29877"><span>Otro</span>
                    </label>
                  </p>
                  <p class="clear">
                    <input type="submit" value="Suscribirse">
                  </p>
                  <div style="display: none;">
                    <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off">
                  </div>
                  <input type="hidden" name="_mc4wp_timestamp" value="1468605717">
                  <input type="hidden" name="_mc4wp_form_id" value="2348">
                  <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                </div>
                <div class="mc4wp-response"></div>
              </form>
              <!-- / MailChimp for WordPress Plugin
              br
              // FORMULARIO MAILCHIMP
              -->
            </div>
          </div>
        </div>
      </div>
      <div class="Content-footer"><?php include('footer-new.php'); ?></div>
    </div>
  </body>
</html>