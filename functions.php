<?php 

// css
function load_stylesheets(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawsom-all.min.css', array(), false, 'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('owl.carousel', get_template_directory_uri() . '/assets/plugins/slider/css/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('owl.carousel');

    wp_register_style('owl.default', get_template_directory_uri() . '/assets/plugins/slider/css/owl.theme.default.css', array(), false, 'all');
    wp_enqueue_style('owl.default');

    wp_register_style('style', get_template_directory_uri() . '/assets/scss/style.css?v='.time(), array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// JS
function load_scripts(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array(), 1, true);
    wp_enqueue_script('jquery');

    wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), 1, true);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('scrolltofixed', get_template_directory_uri() . '/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js', array(), 1, true);
    wp_enqueue_script('scrolltofixed');

    wp_register_script('owl.carousel', get_template_directory_uri() . '/assets/plugins/slider/js/owl.carousel.min.js', array(), 1, true);
    wp_enqueue_script('owl.carousel');

    wp_register_script('customjs', get_template_directory_uri() . '/assets/js/script.js', array(), 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_scripts');

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

function get_menu_items($menu_name){
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        return wp_get_nav_menu_items($menu->term_id);
    }
}