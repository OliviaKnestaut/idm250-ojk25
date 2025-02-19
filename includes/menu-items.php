<?php

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

?>