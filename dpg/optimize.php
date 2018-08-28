<?php
function rss_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
$content = '<p>' . get_the_post_thumbnail($post->ID) .
'</p>' . get_the_content();
}
return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

remove_action('welcome_panel', 'wp_welcome_panel');

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

function wpb_imagelink_setup() {
  $image_set = get_option( 'image_default_link_type' );
   
  if ($image_set !== 'none') {
      update_option('image_default_link_type', 'none');
  }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// To remove the query strings, add the following code.
function remove_cssjs_ver( $src ) {
if( strpos( $src, '?ver=' ) )
$src = remove_query_arg( 'ver', $src );
return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

// Remove RSD Links
remove_action( 'wp_head', 'rsd_link' );

// Disable Emoticons
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Remove Shortlink
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Remover script de embeds
// function disable_embed(){
// wp_dequeue_script( 'wp-embed' );
// }
// add_action( 'wp_footer', 'disable_embed' );

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Hide WordPress Version
remove_action( 'wp_head', 'wp_generator' ) ;

// Remove WLManifest Link
remove_action( 'wp_head', 'wlwmanifest_link' ) ;

// Remove JQuery Migrate
function deregister_qjuery() { 
if ( !is_admin() ) {
wp_deregister_script('jquery');
}
} 
add_action('wp_enqueue_scripts', 'deregister_qjuery');

// Disable Self Pingback
function disable_pingback( &$links ) {
  foreach ( $links as $l => $link )
  if ( 0 === strpos( $link, get_option( 'home' ) ) )
  unset($links[$l]);
 }
 add_action( 'pre_ping', 'disable_pingback' );

//  Disable Heartbeat
add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
wp_deregister_script('heartbeat');
}

// Disable Dashicons on Front-end
function wpdocs_dequeue_dashicon() {
  if (current_user_can( 'update_core' )) {
    return;
  }
  wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

// Disable Contact Form 7 JS/CSS
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );