<?php function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

function register_my_menu() {
  register_nav_menu('menu_principal',__( 'Menu Principal' ));
}
add_action( 'init', 'register_my_menu' );
 ?>
