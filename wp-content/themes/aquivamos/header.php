<!DOCTYPE HTML>
<html>

<head>
	<!-- Google Analytics -->
	<script>!function(e,a,t,n,c,o,s){e.GoogleAnalyticsObject=c,e[c]=e[c]||function(){(e[c].q=e[c].q||[]).push(arguments)},e[c].l=1*new Date,o=a.createElement(t),s=a.getElementsByTagName(t)[0],o.async=1,o.src=n,s.parentNode.insertBefore(o,s)}(window,document,"script","//www.google-analytics.com/analytics.js","ga"),ga("create","UA-61843183-1","auto"),ga("send","pageview");</script>
	<!-- Google Analytics -->

	<!-- Codigos de rastreo o seguimiento -->
    <?php require TEMPLATEPATH . '/traking/top.php'; ?>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="author" content="Daniel Acevedo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>

	<!-- Idioma proporcionado por Google -->
	<link rel="alternate" hreflang="es" href="http://aquivamos.org/" />

    <!-- Este codigo es con la finalidad de tener una descripcion y hacer SEO -->
    <?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <meta name="description" content="<?php  the_excerpt_rss(); ?>" />
    <?php endwhile; endif; elseif(is_home()) : ?>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php endif; ?>

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/aquivamos.icon" />

    <script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>

    <!-- Conversion de objetivo -->
    <?php the_field('conversion_de_objetivo_top'); ?>

    <!-- Codigos para los plugins Inicio -->
    <?php wp_head(); ?>
    <!-- Codigos para los plugins Fin -->
   
    <meta name="google-site-verification" content="--o_iMiQ_3eUe0QJ7nVbqeTk8DXIOyw-PMgvgSNDINo" />
</head>

<body>
    <!-- Codigos de rastreo o seguimiento -->
    <?php require TEMPLATEPATH . '/traking/google-analytics.php'; ?>

    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4&appId=222802074421622";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <a class="logo" href="/">
                                <img src="<?php echo esc_url(of_get_option('logo-image', get_template_directory_uri() . '/img/logo.png')); ?>" alt="AquiVamos.org" title="AquiVamos.org" />
                            </a>
                        </div>
                        <div class="col-md-5">
                            <form class="main-header-search" name="search" method="get" action="<?php echo home_url( '/' ); ?>" />
                                <div class="form-group form-group-icon-left">
                                    <i class="fa fa-search input-icon"></i>
                                    <input type="text" class="form-control" name="s" placeholder="¿Qué estas buscando?" id="search" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5">
                            <?php if ( is_user_logged_in() ) : ?>
                                <span style="border-radius: 50%;">
                                    <small style="color:white; font-size:12px;">
                                        <?php global $current_user; get_currentuserinfo(); echo 'Bienvenido: ' . $current_user->user_firstname . "\n"; ?>
                                    </small>
                                </span>
                                <a href="<?php echo wp_logout_url(); ?>" style="margin-top: 3px; float:right;" class="btn btn-danger">Cerrar sesión</a>
                            <?php else : ?>
                              <a href="/wp-login.php?action=register" style="margin-top: 3px; float:right;" class="btn btn-danger">Crear una cuenta</a>
                              <a href="/wp-login.php" style="color:white; line-height: 40px; float:right; margin-right:10px;">Acceder</a>
                            <?php endif; ?>
                        </div>
                        <!--
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-avatar">
                                        <a href="user-profile.html">
                                            <img class="origin round" src="<?php bloginfo('template_url'); ?>/img/daniel_40x40.jpg" alt="Image Alternative text" title="Daniel Acevedo" />Hola, Daniel</a>
                                    </li>
                                    <li><a href="#">Salir</a>
                                    </li>
                                    <li class="nav-drop"><a href="#">USD $<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a>
                                        <ul class="list nav-drop-menu">
                                            <li><a href="#">EUR<span class="right">€</span></a>
                                            </li>
                                            <li><a href="#">MEX<span class="right">$</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="top-user-area-lang nav-drop">
                                        <a href="#">
                                            <img src="<?php bloginfo('template_url'); ?>/img/flags/32/eua.png" alt="Image Alternative text" title="Image Title" />ENG<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i>
                                        </a>
                                        <ul class="list nav-drop-menu">
                                            <li>
                                                <a title="German" href="#">
                                                    <img src="<?php bloginfo('template_url'); ?>/img/flags/32/de.png" alt="Image Alternative text" title="Image Title" /><span class="right">GER</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="nav">
                    <ul class="slimmenu" id="slimmenu">
                        <li class="active"><a href="/">Inicio</a>
                        </li>
                        <li><a href="/nosotros/">Nosotros</a>
                        </li>
                        <li><a href="/articulos/">Blog</a>
                        </li>
                        <li><a href="/contacto/">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
