<?php


add_action('wp_enqueue_scripts', function() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array(), THEME_VERSION );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/script.js', array(), THEME_VERSION, false );
	wp_enqueue_script( 'footer', get_template_directory_uri() . '/assets/js/footer.js', array(), THEME_VERSION, true );
}, 9);

add_action( 'wp_footer', function() {
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css', array(), THEME_VERSION );
});
