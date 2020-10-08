<?php
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
?>