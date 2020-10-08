<?php 
// Função Responsável por vincular o tema original.
function theme() {

    wp_enqueue_style( 'parente', get_template_directory_uri().'/style.css');

}
add_action( 'wp_enqueue_scripts', 'theme');

?>