<?php

function canfriskvard_script_enqueue() {
	wp_enqueue_script('customjs', get_template_directory_uri() . '/javascript.js', array( 'jquery'), '1.0', true);
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('googlefont', '//fonts.googleapis.com/css?family=Roboto:400,600,700 ');
}
add_action('wp_enqueue_scripts', 'canfriskvard_script_enqueue');

function canfriskvard_theme_setup(){

	add_theme_support('menus');

}
add_action('after_setup_theme', 'canfriskvard_theme_setup');


register_sidebar(array(
	'name' => 'Right Sidebar',

));

function hide_editor() {
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  // Hide the editor on the page titled 'Homepage'
  $homepgname = get_the_title($post_id);
  if($homepgname == 'Startsida'){
    remove_post_type_support('page', 'editor');
  }
  if($homepgname == 'Kontakt'){
    remove_post_type_support('page', 'editor');
  }
  if($homepgname == 'Behandlingar'){
    remove_post_type_support('page', 'editor');
  }
}
add_action( 'admin_init', 'hide_editor' );

//remove_filter('the_content', 'wpautop'); //remove the auotmatic <p> in wordpress
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_image_size( 'auto', 9999, 9999);

//add_filter('show_admin_bar', '__return_false');

add_filter('show_admin_bar', '__return_false');

?>
