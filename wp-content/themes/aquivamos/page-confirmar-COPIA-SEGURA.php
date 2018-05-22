<?php /* Theme: Aquivamos.org Diseñado por Daniel Acevedo Template name: Pagina Confirmar */ ?><!DOCTYPE html>
<html lang="es">
  <head><?php include('prueba.php'); ?>
    <style><?php include('css/page-confirmar.php'); ?></style>
  </head>
  <body>
    <div class="Content">
      <div class="Content-fixed">
        <header class="Content-top">
          <div class="Logo">
            <h1 class="Logo-title"><a title="Portal AquiVamos.Org" class="Logo-link">AquiVamos.Org</a></h1>
          </div>
          <nav class="Menu-left">
            <ul class="Menu-list">
              <li><a href="http://aquivamos.org/" title="Portal AquiVamos.Org" class="Menu-link">Inicio</a></li>
              <li class="Menu-item"><a href="http://aquivamos.org/nosotros/" title="Nosotros" class="Menu-link">Nosotros</a></li>
              <li class="Menu-item"><a href="http://aquivamos.org/articulos/" title="Articulos" class="Menu-link">Articulos</a></li>
              <li class="Menu-item"><a href="http://aquivamos.org/contacto/" title="Contacto" class="Menu-link">Contacto</a></li>
              <li class="Menu-item"><a href="http://aquivamos.org/wp-login.php" title="Acceder" class="Menu-link AccederNone">Acceder</a></li>
              <li class="Menu-item"><a href="http://aquivamos.org/wp-login.php?action=register" title="Crear cuenta" class="Menu-cuenta">Crear cuenta</a></li>
              <li class="Menu-item"><a href="http://aquivamos.org/hotel/" title="Hoteles" class="Menu-link AccederNone">Hoteles</a></li>
              <li class="Menu-item"><a href="http://aquivamos.org/restaurantes/" title="Restaurantes" class="Menu-link AccederNone">Restaurantes</a></li>
              <li class="Menu-item"><a href="http://aquivamos.org/paquetes/" title="Destinos" class="Menu-link AccederNone">Destinos</a></li>
              <li class="Menu-item"><a href="http://aquivamos.org/complejo/" title="Complejos" class="Menu-link AccederNone">Complejos</a></li>
              <li class="Menu-item"><a href="http://aquivamos.org/zoologico/" title="Zoológicos" class="Menu-link AccederNone">Zoológicos</a></li>
              <li class="Menu-item"><a href="http://aquivamos.org/piscina/" title="Piscinas" class="Menu-link AccederNone">Piscinas</a></li>
            </ul>
            <button class="Menu-leftButton icon-menu"></button>
          </nav>
          <form name="search" method="get" action="http://aquivamos.org/" class="Search">
            <input type="text" name="s" id="search" placeholder="Hoteles, restaurantes, destinos turisticos" class="Search-inputText">
            <button type="submit" onClick="ga('send', 'event', 'Boton', 'Busqueda', 'index');" class="Search-inputSubmit icon-search"></button>
          </form>
          <nav class="Menu-right"><a href="http://aquivamos.org/wp-login.php" title="Acceder" class="Menu-rightLink">Acceder</a><a href="http://aquivamos.org/wp-login.php?action=register" title="Crear cuenta" class="Menu-rightLinkCrear">Crear cuenta</a></nav>
        </header>
      </div>
      <section class="Content-section">
        <div class="Section">
          <h2 class="Section-title">Imprime tu cupón</h2>
          <p class="Section-parrafo">Es importante que imprimas o te aprendas el código del cupón para poder hacerte valido el descuento del 5% en tu compra.</p>
          <p class="Section-parrafo">El cupón tiene una vigencia de 6 meses.</p>
          <figure class="Section-figure"><img src="http://aquivamos.org/wp-content/uploads/2016/01/cupon.png" class="Section-imgCupon"></figure>
          <input type="button" name="imprimir" value="Imprimir" onclick="window.print();" class="Section-imprimir">
        </div>
      </section>
      <div class="Content-footer">
        <footer class="Footer">
          <p class="Footer-parrafo">Todos los derechos reservados<a rel="me" href="https://www.facebook.com/DanielAcevedoj" target="_blank" title="Visita mi perfil" class="Footer-link">Daniel Acevedo</a></p>
        </footer>
      </div>
      <script><?php include('js/jquery.min.php'); ?></script>
      <script><?php include('js/menu.php'); ?></script>
    </div><?php require TEMPLATEPATH . '/traking/bottom.php'; ?>
  </body>
</html>