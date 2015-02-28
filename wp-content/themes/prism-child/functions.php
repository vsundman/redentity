<?php 
//Child theme's functions file runs before the parent theme's functions.php
//

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style') );
 
}
/**
 * Hamburger Menu
 */
wp_register_script( 'hamburgermenu', get_template_directory_uri().'/js/hamburgermenu.js', array('jquery'), '', true );

wp_enqueue_script( 'hamburgermenu' );



/**
 *  Activate Menu Areas
 * @since 0.1
 */
function vs_menu_areas(){
	register_nav_menus( array( 
		'main_menu' => 'Main Menu at the top of every page',
		'social_media' => 'Social Media Bar',
		) );
}
add_action('init', 'vs_menu_areas' );








//no close PHP
