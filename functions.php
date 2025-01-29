<?php

function theme_styles_and_scripts(){
    wp_enqueue_style(
        'bootstrap-css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
    );
    
    wp_enqueue_style(
        'main-styles',
        get_template_directory_uri() . '/dist/css/main.css',
        [],
        filemtime(get_template_directory() . '/dist/css/main.css')
    );

    wp_enqueue_style(
        'header-footer-styles',
        get_template_directory_uri() . '/dist/css/header-footer.css',
        [],
        filemtime(get_template_directory() . '/dist/css/header-footer.css')
    );

    wp_enqueue_script(
        'jquery',
        'https://code.jquery.com/jquery-3.3.1.slim.min.js',
        true
    );
    
    wp_enqueue_script(
        'popper-js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
        true
    );

    wp_enqueue_script(
        'bootstrap-js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
        true
    );

    wp_enqueue_script(
        'idm-main-script',
        get_template_directory_uri() . '/dist/js/main.js',
        [],
        filemtime(get_template_directory() . '/dist/js/main.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');