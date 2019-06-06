<?php
function pierregrange_setup(){
  /**
  * Ajoute le support de la balise title
  * Ajoute le support des images à la Une
  * Ajoute le support du logo
  **/
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

  /**
  * Ajout du support de menu
  **/
  register_nav_menu('menu_principal',__( 'Menu Principal' ));
}
add_action('after_setup_theme', 'pierregrange_setup');
