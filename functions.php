<?php 

// images
add_theme_support('post-thumbnails');

add_image_size('small', 200, 200, true); 
add_image_size('medium', 400, 400, true);
add_image_size('portfolio', 320, 200, true); 
add_image_size('fwvga', 854, 480, true);
add_image_size('hd720', 1280, 720, true); 
add_image_size('hd1080', 1920, 1080, true);

add_theme_support('menus');

// menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);

function basictheme_get_menu_items($menu_name){
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        return wp_get_nav_menu_items($menu->term_id);
    }
}