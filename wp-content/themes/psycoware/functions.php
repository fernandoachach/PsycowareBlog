<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


function invocador(){

  wp_register_style('myhojadeestilo', get_template_directory_uri().'/style.css', array(), true,null, 'all' );
  wp_register_style('fontawasome', get_template_directory_uri().'/css/font-awesome.min.css' , array(),  false, null, 'all' );
  wp_register_style('estilo2', get_template_directory_uri().'/cssJs/blog.css' , array(),  false, null, 'all' );
  wp_register_style('estilo8', get_template_directory_uri().'/cssJs/orange.css', false, NULL, 'all' );
  wp_register_style('estilo4', get_template_directory_uri().'/cssJs/essentials.css', false, NULL, 'all' );
  wp_register_style('estilo1', get_template_directory_uri().'/cssJs/animate.css', false, NULL, 'all' );
  wp_register_style('estilo5', get_template_directory_uri().'/cssJs/layout.css', false, NULL, 'all' );
  wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap-theme.min.css', false, NULL, 'all' );
  wp_register_style('bootstrap2', get_template_directory_uri().'/css/bootstrap.min.css', false, NULL, 'all' );
  wp_register_script('jsbootstrap', get_template_directory_uri().'/js/bootstrap.min.js', false, NULL, 'all' );
  wp_register_script('jsjquery', get_template_directory_uri().'/js/jquery-1.12.4.js', false, NULL, 'all' );
  wp_register_script('jsxxx', get_template_directory_uri().'/cssJs/scripts.js', false, NULL, 'all' );


  wp_enqueue_style('fontawasome');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('bootstrap2');
  wp_enqueue_style('myhojadeestilo');
  wp_enqueue_style('estilo2');
  wp_enqueue_style('estilo8');
  wp_enqueue_style('estilo4');
  wp_enqueue_style('estilo1');
  wp_enqueue_style('estilo3');
  wp_enqueue_style('estilo5');
  wp_enqueue_script('jsjquery');
  wp_enqueue_script('jsbootstrap');
  
  

}

add_action('wp_enqueue_scripts', 'invocador');


function wpdocs_excerpt_more( $more ) {
    return sprintf( '<br><a class="read-more" href="%1$s"><i class="fa fa-sign-out"></i> %2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Leer Más...', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



/*creo que este es la funcion del menu xD*/
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

require_once('wp_bootstrap_navwalker.php');


/* Register the 'primary' sidebar. */

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

  /* Register the 'primary' sidebar. */
  register_sidebar(
    array(
      'id' => 'primary1',
      'name' => __( 'Primary1' ),
      'description' => __( 'A short description of the sidebar.' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    )
  );

  /* Repeat register_sidebar() code for additional sidebars. */
}

/*este es el menu de navegacion entre articulos */
function pagination_bar() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


//Modificar los campos Autor, Email y Sitio web del formulario de comentarios
function apk_modify_comment_fields( $fields ) {
  
  //Variables necesarias para que esto funcione
        $commenter = wp_get_current_commenter();
  $req = get_option( 'require_name_email' );
  $aria_req = ( $req ? " aria-required='true'" : '' );
 
  $fields =  array(
 
    'author' =>
      '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"' . $aria_req . ' placeholder="' . __('Tu nombre', 'apk') . '" />', //Editamos el campo autor
  
    'email' =>
      '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . ' placeholder="' . __('Tu email', 'apk') . '" />', //Editamos el campo email
  
    'url' =>
      '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" size="30" placeholder="' . __('Tu sitio web', 'apk') . '"  />', //Editamos el campo sitio web
  ); 
  
  return $fields;
  
}
 
add_filter('comment_form_default_fields', 'apk_modify_comment_fields');



