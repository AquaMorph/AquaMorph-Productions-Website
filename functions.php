<?php
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
register_nav_menus(array('menu-main' => __( 'Main Menu' ),));
}

if (function_exists('add_theme_support')) {
	add_theme_support( 'post-thumbnails' );
	add_image_size('featured-thumbnail', 300, 225, true);
	add_image_size('post-feature', 1280, 720, true);
	add_image_size('sidebar-thumb', 270, 64, true);
	add_image_size('nav', 240, 240, true);
}
?>