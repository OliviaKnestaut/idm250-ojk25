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

function theme_setup(){
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary-menu' => 'Primary Menu',
        'footer-menu' => 'Footer Menu'
    ]);
}

add_action('after_setup_theme', 'theme_setup');


/**
 * Get menu items as a flat array to use for custom markup
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 * @param string $menu_name - Name of the registered menu id
 * @return array $menu_items - Array of WP_Post objects.
 */
function get_theme_menu($menu_name)
{
    $locations = get_nav_menu_locations();
    if (!isset($locations[$menu_name])) {
        return [];
    }

    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'ASC']);

    $menu_structure = [];

    // Create an associative array of items by ID
    $items_by_id = [];
    foreach ($menu_items as &$item) {
        $item->classes = !empty($item->classes) ? implode(' ', array_filter($item->classes)) : '';
        $item->target = !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $item->sub_items = []; // Initialize empty sub-items array
        $items_by_id[$item->ID] = $item;
    }
    unset($item); // Break reference

    // Assign child items to their respective parents
    foreach ($items_by_id as &$item) {
        if ($item->menu_item_parent) {
            $items_by_id[$item->menu_item_parent]->sub_items[] = $item;
        } else {
            $menu_structure[] = $item; // Top-level item
        }
    }
    unset($item); // Break reference

    return $menu_structure;
}


function theme_prefix_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100, // Set desired height
        'width'       => 400, // Set desired width
        'flex-height' => true, // Allow flexible height
        'flex-width'  => true, // Allow flexible width
    ));
}
add_action('after_setup_theme', 'theme_prefix_setup');





//Add theme colors
