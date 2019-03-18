<?php



//  Opciones de la página inicial.
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
  require_once dirname( __FILE__ ) . '/inc/options-framework.php';
  require_once dirname( __FILE__ ) . '/inc/options-hotel.php';
  require_once dirname( __FILE__ ) . '/inc/options-restaurantes.php';
  require_once dirname( __FILE__ ) . '/inc/options-agencia.php';
  require_once dirname( __FILE__ ) . '/inc/options-piscina.php';
  require_once dirname( __FILE__ ) . '/inc/options-zoologico.php';
  require_once dirname( __FILE__ ) . '/inc/options-complejo.php'; 

    
//Imagen Destacada
  if ( function_exists( 'add_theme_support' ) )
  add_theme_support( 'post-thumbnails' );

//Corte de imagenes miniaturas
add_image_size('sidebar-thumb', 115, 65, true );


//Limite de Caracteres para los post
   function longitud_excerpt($length) {
    return 16;
    }
  add_filter('excerpt_length', 'longitud_excerpt');


// Navegación con breadcrumbs

  function dimox_breadcrumbs() {  
  
  /* === OPTIONS === */  
  $text['home']   = 'Inicio'; // text for the 'Home' link  
  $text['category'] = 'Archive by Category "%s"'; // text for a category page  
  $text['search']  = 'Search Results for "%s" Query'; // text for a search results page  
  $text['tag']   = 'Posts Tagged "%s"'; // text for a tag page  
  $text['author']  = 'Articles Posted by %s'; // text for an author page  
  $text['404']   = 'Error 404'; // text for the 404 page  
  
  $show_current  = 1; // 1 - show current post/page/category title in breadcrumbs, 0 - don't show  
  $show_on_home  = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show  
  $show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show  
  $show_title   = 1; // 1 - show the title for the links, 0 - don't show  
  $delimiter   = '&nbsp;&nbsp;/&nbsp;&nbsp;'; // delimiter between crumbs  
  $before     = '<span class="current">'; // tag before the current crumb  
  $after     = '</span>'; // tag after the current crumb  
  /* === END OF OPTIONS === */  
  
  global $post;  
  $home_link  = home_url('/');  
  $link_before = '<span typeof="v:Breadcrumb">';  
  $link_after  = '</span>';  
  $link_attr  = ' rel="v:url" property="v:title"';  
  $link     = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;  
  $parent_id  = $parent_id_2 = $post->post_parent;  
  $frontpage_id = get_option('page_on_front');  
  
  if (is_home() || is_front_page()) {  
  
    if ($show_on_home == 1) echo '<li><a href="' . $home_link . '">' . $text['home'] . '</a></li>';  
  
  } else {  
  
    echo '<ul class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">';  
    if ($show_home_link == 1) {  
      echo '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $text['home'] . '</a>';  
      if ($frontpage_id == 0 || $parent_id != $frontpage_id) echo $delimiter;  
    }  
  
    if ( is_category() ) {  
      $this_cat = get_category(get_query_var('cat'), false);  
      if ($this_cat->parent != 0) {  
        $cats = get_category_parents($this_cat->parent, TRUE, $delimiter);  
        if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);  
        $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);  
        $cats = str_replace('</a>', '</a>' . $link_after, $cats);  
        if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);  
        echo $cats;  
      }  
      if ($show_current == 1) echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;  
  
    } elseif ( is_search() ) {  
      echo $before . sprintf($text['search'], get_search_query()) . $after;  
  
    } elseif ( is_day() ) {  
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;  
      echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;  
      echo $before . get_the_time('d') . $after;  
  
    } elseif ( is_month() ) {  
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;  
      echo $before . get_the_time('F') . $after;  
  
    } elseif ( is_year() ) {  
      echo $before . get_the_time('Y') . $after;  
  
    } elseif ( is_single() && !is_attachment() ) {  
      if ( get_post_type() != 'post' ) {  
        $post_type = get_post_type_object(get_post_type());  
        $slug = $post_type->rewrite;  
        printf($link, $home_link . $slug['slug'] . '/', $post_type->labels->singular_name);  
        if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;  
      } else {  
        $cat = get_the_category(); $cat = $cat[0];  
        $cats = get_category_parents($cat, TRUE, $delimiter);  
        if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);  
        $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);  
        $cats = str_replace('</a>', '</a>' . $link_after, $cats);  
        if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);  
        echo $cats;  
        if ($show_current == 1) echo $before . get_the_title() . $after;  
      }  
  
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {  
      $post_type = get_post_type_object(get_post_type());  
      echo $before . $post_type->labels->singular_name . $after;  
  
    } elseif ( is_attachment() ) {  
      $parent = get_post($parent_id);  
      $cat = get_the_category($parent->ID); $cat = $cat[0];  
      if ($cat) {  
        $cats = get_category_parents($cat, TRUE, $delimiter);  
        $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);  
        $cats = str_replace('</a>', '</a>' . $link_after, $cats);  
        if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);  
        echo $cats;  
      }  
      printf($link, get_permalink($parent), $parent->post_title);  
      if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;  
  
    } elseif ( is_page() && !$parent_id ) {  
      if ($show_current == 1) echo $before . get_the_title() . $after;  
  
    } elseif ( is_page() && $parent_id ) {  
      if ($parent_id != $frontpage_id) {  
        $breadcrumbs = array();  
        while ($parent_id) {  
          $page = get_page($parent_id);  
          if ($parent_id != $frontpage_id) {  
            $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));  
          }  
          $parent_id = $page->post_parent;  
        }  
        $breadcrumbs = array_reverse($breadcrumbs);  
        for ($i = 0; $i < count($breadcrumbs); $i++) {  
          echo $breadcrumbs[$i];  
          if ($i != count($breadcrumbs)-1) echo $delimiter;  
        }  
      }  
      if ($show_current == 1) {  
        if ($show_home_link == 1 || ($parent_id_2 != 0 && $parent_id_2 != $frontpage_id)) echo $delimiter;  
        echo $before . get_the_title() . $after;  
      }  
  
    } elseif ( is_tag() ) {  
      echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;  
  
    } elseif ( is_author() ) {  
      global $author;  
      $userdata = get_userdata($author);  
      echo $before . sprintf($text['author'], $userdata->display_name) . $after;  
  
    } elseif ( is_404() ) {  
      echo $before . $text['404'] . $after;  
  
    } elseif ( has_post_format() && !is_singular() ) {  
      echo get_post_format_string( get_post_format() );  
    }  
  
    if ( get_query_var('paged') ) {  
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';  
      echo __('Page') . ' ' . get_query_var('paged');  
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';  
    }  
  
    echo '</ul><!-- .breadcrumbs -->';  
  
  }  
} // end dimox_breadcrumbs()



// Cambiar el pie de pagina del panel de Administración
function change_footer_admin() {  
    echo 'AquiVamos.org &copy;2015 Copyright. Todos los derechos reservados - 
    Web creada por <a href="http://www.timesolutionsweb.com" target="_blank">Daniel Acevedo</a>';  
}  
add_filter('admin_footer_text', 'change_footer_admin');


// Pagina wp-login personalizada
function custom_login_logo() {
  echo '<style type="text/css">
  h1 a { background-image:url('. get_bloginfo( 'template_directory' ) .'/login/wp-logo.png)!important;
  background-size: 250px 45px !important;
  width: 250px !important;
  height: 45px !important; }
  </style>';
}
add_action('login_head', 'custom_login_logo');

function my_login_stylesheet() {
  wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/login/login-style.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

function my_login_logo_url() {
  return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
  return get_bloginfo( 'name' ) . ' | ' . get_bloginfo( 'description' );
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

//Analytics Google
function add_ga_to_login_page(){
  echo "<script type='text/javascript'>";
  echo "var _gaq = _gaq || [];
_gaq.push(['_setAccount','UA-61843183-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();";
  echo "</script>";
}
add_action('login_head', 'add_ga_to_login_page');


// ---------------------------------
// Redirección de registro (login) 
// según el tipo (rol) de usuario.
// ---------------------------------
/*
function mytheme_custom_login_redirect($redirect_to, $request, $user) {
    global $user;
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
     
        // Si es un usuario administrador
        // le redirigimos a la página de gestión de plugins
        if ( in_array( 'miembro', $user->roles ) )
            return home_url( '/wp-admin/' );
 
        // Si es un usuario con permisos de editor
        // le enviamos a la página de gestión de entradas.
        elseif ( in_array( 'editor', $user->roles ) )
            return home_url( '/wp-admin/edit.php' );
             
        // Y a todos los demás usuarios
        // les redirigimos a la página de inicio de la web.
        else
            return home_url('/wp-admin/');
                 
    } else {
        return $redirect_to;
    }
}
add_filter( 'login_redirect', 'mytheme_custom_login_redirect', 10, 3 ); */

//Menus de lado de la web
register_nav_menus( array(
    'uno'  => 'uno',
    'dos'  => 'dos',
    'tres' => 'tres'
));
//Paginación de entradas
function wp_corenavi() {
  global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;
 
  $total = 1; //1 - muestra el texto "Página N de N", 0 - para no mostrar nada
  $a['mid_size'] = 5; //cuantos enlaces a mostrar a izquierda y derecha del actual
  $a['end_size'] = 1; //cuantos enlaces mostrar al comienzo y al fin
  $a['prev_text'] = '« Anterior'; //texto para el enlace "Página siguiente"
  $a['next_text'] = 'Siguiente »'; //texto para el enlace "Página anterior"
 
  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Página ' . $current . ' de ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}

/* Eliminamos metaboxes del Dashboard
function example_remove_dashboard_widgets() {
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );       
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );     
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );               
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );   
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' ); 
    remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal' );                      
} 

add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' ); 
*/

// Codigo para eliminar la barra superior y que no la vena los Miembros
function my_function_admin_bar($content) {
return ( current_user_can("administrator") ) ? $content : false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');



/*Al hacer esto ocultaremos los mensajes de error si es que nos equivocamos al acceder a nuestra 
administración, así no dejaremos rastro de si hubo error en el usuario o password.*/

/* TIENES QUE QUITAR EL COMETANTIO PARA QUE FUNCIONE
add_filter('login_errors',create_function('$a', "return null;"));
*/

/*
add_action( 'tools.php', 'posts_for_current_contributor' );
function posts_for_current_contributor() {
    global $user_ID;

    if ( current_user_can( 'aqui_asistete_de_publicidad' ) ) {
       if ( ! isset( $_GET['aqui_asistete_de_publicidad'] ) ) {
          wp_redirect( add_query_arg( 'aqui_asistete_de_publicidad', $user_ID ) );
          exit;
       }
   }

}

$wp_roles = new WP_Roles();
$names = $wp_roles->get_names();
print_r($names);

/******************************************
/ Este codigo es para que muestre en la 
/ pantalla que perfiles exist