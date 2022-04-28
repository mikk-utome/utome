<?php
add_action('wp_enqueue_scripts', 'utome_scripts');

function utome_scripts() {
    wp_enqueue_style( 'utome-style', get_stylesheet_uri() );
};
?>