<?php

add_action( 'wp_enqueue_scripts', 'quixo_child_enqueue_styles' );
function quixo_child_enqueue_styles() {
    wp_enqueue_style( 'quixo-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'quixo-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('quixo-parent-style')
    );
}