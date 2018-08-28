<?php
require_once 'security.php';
require_once 'optmize.php'; 
/* Inserir Scripts e Estilos */
// Register on admin sheets
function dpg_assets() {
	wp_enqueue_style( 'bs_4_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', false, '1.0.0' );
	wp_enqueue_style( 'dpg_css', get_template_directory_uri() . '/dpg/style.css', false, '1.0.0' );

	wp_enqueue_script( 'bs_4_popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' );
	wp_enqueue_script( 'bs_4_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' );
	wp_enqueue_script( 'dpg_js', get_template_directory_uri() . '/dpg/scripts.js' );
}
add_action( 'admin_enqueue_scripts', 'dpg_assets' ); 