<?php
function wpb_remove_version() {return '';}
add_filter('the_generator', 'wpb_remove_version');

function no_wordpress_errors(){
  return 'Hum... Que chato, existe algum erro em suas informações de login!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');