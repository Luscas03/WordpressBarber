<?php
/*
Plugin Name: Card Alert
Author: Lucas Almeida
Description: Este plugin tem a utilidade de emitir um alerta.

*/

function adicionar_texto(){
    echo "<div class='alert alert-danger container text-center fixed-top' role='alert'>
    ESTAMOS FECHADOS
  </div>";
}
add_action("wp_footer", "adicionar_texto");

function remover_texto(){
    if(date("l") != "Monday"){
        remove_action("wp_footer", "adicionar_texto");
    }
}
add_action("wp_head", "remover_texto");
?>