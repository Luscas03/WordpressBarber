<?php
function add_widget_Support() {
    register_sidebar( array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ) );
    }
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles',
    "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.
    min.css");
    }
    // add_action( 'widgets_init', 'add_Widget_Support' );
    function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    }
    add_action( 'init', 'add_Main_Nav' );
    
function scripts_do_template() {
//  Bootstrap core JavaScript
//  Se preferir utilizar a própria cópia do Bootstrap, descomente a linha a seguir e
// comente a próxima -->
//  wp_register_script('bootstrap', get_template_directory_uri().' /lib/bootstrap4.3.1/js/bootstrap.min.js', array('jquery')); -->
wp_register_script('bootstrap', 'https://code.jquery.com/jquery-3.5.1.slim.min.js' , array('jquery'));
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'scripts_do_template');
?>