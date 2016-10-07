<?php 

function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'bootstrap-style', get_stylesheet_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css'  );
    wp_enqueue_style( 'singolo-style', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'singolo-scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

?>