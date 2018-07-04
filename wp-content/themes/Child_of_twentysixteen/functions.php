<?php

function wpb_add_google_fonts() {

    wp_engueue_style( 'wpb-google-fonts' ,'
        href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded',
        false );
    add_action ('wp_enqueue_scripts', 'wpb_add_google_fonts');
}


function my_theme_enqueue_styles() {
    $parent_style = 'twentysixteen-style'; //This is 'twentysixteen-style for the twenty sixteen theme.'

    wp_enqueue_style( $parent_style,
        get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        arry( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts' , '
    my_theme_enqueue_stylles' );