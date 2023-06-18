<?php

require get_template_directory() . '/inc/customizer.php';

function htcyber_load_scripts(){
    wp_enqueue_style( 'htcyber-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css'), 'all' );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/assets/js/dropdown.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'htcyber_load_scripts' );

function htcyber_config() {
    $textdomain = 'ht-cyber';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages');

    register_nav_menus(
        array(
            'htcyber_main_menu' => esc_html__( 'Main Menu', 'ht-cyber' ),
            'htcyber_footer_menu' => esc_html__( 'Footer Menu', 'ht-cyber' )
        )
    );
}

if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}
