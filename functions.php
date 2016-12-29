<?php

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup()
{
	add_theme_support( 'title-tag' );
	
	//add_theme_support( 'post-thumbnails' );

	add_image_size ( 'gallery-size', 320, 240, true );
}

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'gallery-size' => __( 'Gallery size' ),
	) );
}

?>