<?php 
//Child theme's functions file runs before the parent theme's functions.php
//
add_theme_support('post-formats', array('gallery', 'quote', 'audio', 'video', 'image') );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style') );
 
}

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



//portfolio pieces CUSTOM FUNCTION

add_action('init','vs_portfolio_pieces' );
	function vs_portfolio_pieces(){
	register_post_type('portfolio', array(
			'public' 		=> true,
			'menu_icon' 	=> 'dashicons-format-gallery',
			'has_archive'	=> true,
			'menu_position' => 5,
			'supports'		=> array( 'title', 'editor', 'thumbnail', 
									  'excerpt', 'revisions' ),
			'labels'		 => array(
				'name' 			=> 'Portfolio',
				'singular_name' => 'Portfolio Piece',
				'add_new'		=> 'Add New Portfolio Piece',
				'edit_item' 	=> 'Edit Portfolio Piece',
				'view_item'		=> 'View Portfolio Piece',
				'new_item'		=> 'New Portfolio Piece',
				'search_items'	=> 'Search Portfolio Pieces',
				'not_found'		=> 'No Portfolio Pieces Found',),
	 	)/*end array*/ 
	 );//end register_post_type

	//Add the "typework" taxonomy to portfolio pieces
	register_taxonomy('typework', 'portfolio', array(
			'hierarchical' => true, //had parent/child relationships
			'labels' => array(
				'name' => 'Type of Work',
				'singular_name' => 'Type of Work',
				'add_new_item' => 'Add New Type of Work',
				'search_items' => 'Search Type of Work',
				'update_item' => 'Update Type of Work',
				'edit_item' => 'Edit Type of Work',
			),
		) );
}//end function vs_portfolio_pieces





//no close PHP
