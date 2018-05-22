<!DOCTYPE html>
<html lang="es-MX">
<head>
	<?php include('prueba.php'); ?>
  <style>
    <?php include('css/single-curso.php'); ?>
   </style>
  <!-- Estilos --> 
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Fuentes de Google -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

  <!-- Icon de Awesome -->
  <script src="https://use.fontawesome.com/9e45f493bc.js"></script>
</head>
<body>
  <header>
    <div class="navbar-fixed">
      <nav class="Nav">
        <div class="nav-wrapper">
          <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars" aria-hidden="true"></i></a>
          <a href="<?php bloginfo('url'); ?>/" class="brand-logo Logo">AquiVamos.Org</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down Nav-list">
            <?php if ( is_user_logged_in() ) : ?>
              <li class="Search"><form name="search" method="get" action="<?php bloginfo('url'); ?>"><input class="Search-inputText" type="search" name="s" id="search" placeholder="Escribe lo que estas buscando.... " /></form></li>
              <li><a href="#!" class="waves-effect waves-light btn indigo darken-4">Donativo</a></li>
              <li><a href="<?php echo wp_logout_url(); ?>" class="waves-effect waves-light btn Boton-cuenta">Cerrar Sesion</a></li>
              <li class="Image-autor"><?php echo get_avatar( $current_user->user_email, 40, null, null, array('class' => array('circle', 'responsive-img'))); ?></li>
            <?php else : ?>
              <li class="Search"><form name="search" method="get" action="<?php bloginfo('url'); ?>"><input class="Search-inputText" type="search" name="s" id="search" placeholder="Escribe lo que estas buscando.... " /></form></li>
              <li><a href="<?php bloginfo('url'); ?>/wp-login.php">Acceder</a></li>
              <li><a href="<?php bloginfo('url'); ?>/wp-login.php?action=register" class="waves-effect waves-light btn Boton-cuenta">Crear Cuenta</a></li>
            <?php endif; ?>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <?php if ( is_user_logged_in() ) : ?>
    <ul id="slide-out" class="side-nav">
      <li>
        <div class="user-view">
          <div class="background  green darken-1">
          </div>
          <a href="#!user"><?php echo get_avatar( $current_user->user_email, 100, null, null, array('class' => array('circle', 'responsive-img'))); ?></a>
          <a href="#!name">
            <span class="white-text name">
              <?php global $current_user;
                    get_currentuserinfo();

                    echo '' . $current_user->display_name . "\n";
              ?>
            </span>
          </a>
          <a href="#!email">
            <span class="white-text email">
              <?php global $current_user;
                    get_currentuserinfo();

                    echo '' . $current_user->user_email . "\n";
              ?>
            </span>
          </a>
        </div>
      </li>
      <li><a class="waves-effect" href="<?php bloginfo('url'); ?>/"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
      <li><a class="waves-effect" href="<?php bloginfo('url'); ?>/nosotros/"><i class="fa fa-users" aria-hidden="true"></i> Nosotros</a></li>
      <li><a class="waves-effect" href="<?php bloginfo('url'); ?>/articulos/"><i class="fa fa-file-text" aria-hidden="true"></i> Articulos</a></li>
      <li><a class="waves-effect" href="<?php bloginfo('url'); ?>/contacto/"><i class="fa fa-envelope" aria-hidden="true"></i> Contacto</a></li>
    </ul>
  <?php else : ?>
    <ul id="slide-out" class="side-nav">
      <li><a class="waves-effect" href="<?php bloginfo('url'); ?>/"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
      <li><a class="waves-effect" href="<?php bloginfo('url'); ?>/nosotros/"><i class="fa fa-users" aria-hidden="true"></i> Nosotros</a></li>
      <li><a class="waves-effect" href="<?php bloginfo('url'); ?>/articulos/"><i class="fa fa-file-text" aria-hidden="true"></i> Articulos</a></li>
      <li><a class="waves-effect" href="<?php bloginfo('url'); ?>/contacto/"><i class="fa fa-envelope" aria-hidden="true"></i> Contacto</a></li>      
    </ul>
  <?php endif; ?>
  <main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="Body-page">
      <div class="Video">        
        <div class="Video-top black">
          <?php if ( is_user_logged_in() ) : ?>
          <div class="Video-contener video-container">
            <?php the_field('video-youtube'); ?>
          </div>
          <?php else : ?>
          <style type="text/css">
            .Video-contener {
              background: url(<?php the_field('imagen-page-post'); ?>) no-repeat center center;
              background-position: center;
              background-size: cover;
            }
          </style>
          <a class="modal-trigger" href="#ImagenVideo">
            <div class="Video-contener video-container">
            </div>
          </a>
            <!-- Modal Structure -->
          <div id="ImagenVideo" class="modal bottom-sheet">
            <div class="modal-content">
              <h5>No estas conectado</h5>
              <p>Accede o <a class="Link-register" href="<?php bloginfo('url'); ?>/wp-login.php?action=register" target="_blank">Crea una cuenta</a> para comentar o ver el video</p>
              <!-- login -->
              <p>Login</p>
              <div>       
                <form name="loginform" id="loginform" action="<?php bloginfo('url'); ?>/wp-login.php" method="post"> 
                  <div class="Form-login">
                    <p class="login-username">
                      <label for="user_login">Usuario</label>
                      <input type="text" name="log" id="user_login" class="input" value="" size="20" />
                    </p>
                    <p class="login-password">
                      <label for="user_pass">Contraseña</label>
                      <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" />
                    </p>
                  </div>
                  <p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Recordar Contraseña</label></p>
                  <p class="login-submit">
                    <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary btn red waves-effect waves-light" value="Acceder" />
                    <input type="hidden" name="redirect_to" value="<?php the_permalink(); ?>" />
                  </p>
                </form>             
              </div>
              <!-- login -->
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
            </div>
          </div>            
          <?php endif; ?>
        </div>
        <article>
          <div class="Title-content grey lighten-2">
            <h2 class="Video-title"><?php the_title(); ?></h2>
            <div class="Botones">
              <button onclick="window.location.href='<?php the_field('video-curso-anterior'); ?>'" class="waves-effect waves-light btn red"><span class="hide-on-med-and-down">Anterior Video</span> <i class="fa fa-step-backward" aria-hidden="true"></i></button>
              <button onclick="window.location.href='<?php the_field('video-curso-siguiente'); ?>'" class="waves-effect waves-light btn blue"><i class="fa fa-step-forward" aria-hidden="true"></i> <span class="hide-on-med-and-down">Siguiente Video</span></button>
            </div>
          </div>
          <div class="Contenido">
            <?php the_content(); ?>
          </div>
        </article>
      </div>
      <div class="Comments">
        <div class="row Comments-content">
          <div class="col s12">
            <ul class="tabs">
              <li class="tab col s4"><a class="active waves-effect waves-green" href="#test1">Comentarios</a></li>
              <li class="tab col s4"><a class="waves-effect waves-green" href="#test2">Links</a></li>
              <li class="tab col s4"><a class="waves-effect waves-green" href="#test3">Archivos</a></li>
            </ul>
          </div>
          <div id="test1" class="col s12">
            <!-- Comentarios -->
            <?php if ( is_user_logged_in() ) : ?>
            <?php comments_template(); ?>
            <?php else : ?>
              <p>Dejanos un comentario</p>
              <form>
                <label>Comentario</label>
                <textarea></textarea>
                <p></p>
                <a href="#ImagenVideo" class="waves-effect waves-light btn modal-trigger blue">Publicar comentario</a>
              </form>
            <?php endif; ?>
            <!-- Comentarios -->
          </div>
          <div id="test2" class="col s12">
            <?php the_field('link-curso'); ?>            
          </div>
          <div id="test3" class="col s12">
            <?php the_field('archivo-curso'); ?>          
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; else : ?>
      <p><?php esc_html_e( 'No encontramos lo que buscabas.' ); ?></p>
    <?php endif; ?>
  </main>
  <footer>
    <p>
      <small>
        Todos los derechos reservados 
        <a href="#!">Daniel Acevedo</a>
      </small>
    </p>
  </footer>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript">
    document.getElementById("submit").classList.add('btn', 'waves-effect', 'waves-light', 'blue');
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slider({
        indicators: true,
        interval: 3000
      });
      $('.modal').modal();
      $(".button-collapse").sideNav();
      $('select').material_select();
    });
  </script>  
</body>
</html>