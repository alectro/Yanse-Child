<?php
/*********************
Enqueue the proper CSS
if you use Sass.
*********************/


function yanse_child_enqueue_style()
{
	// foundation stylesheet
	wp_register_style( 'yanse-child-foundation-stylesheet', get_stylesheet_directory_uri() . '/css/app.css', array(), '' );
	wp_enqueue_style( 'yanse-child-foundation-stylesheet' );
}
add_action( 'wp_enqueue_scripts', 'yanse_child_enqueue_style' );

?>
