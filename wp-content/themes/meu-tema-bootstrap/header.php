<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
   <header class="my-logo">
   <h1 id="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
 </header>
 <ul id="navbar" class="nav nav-pills nav-fill bg-light">

  <li class="nav-item">
    <a class="nav-link text-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="<?php echo esc_url( home_url( '/CONTATO' ) ); ?>">Contatos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="<?php echo esc_url( home_url( '/SERVICOS' ) ); ?>">Serviços</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link text-dark" href="<?php echo esc_url( home_url( '/produto' ) ); ?>">Produtos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="<?php echo esc_url( home_url( '/FALE CONOSCO' ) ); ?>">Fale Conosco</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="<?php echo esc_url( home_url( '/SOBRE' ) ); ?>">Sobre</a>
  </li>
 
</ul>
