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
        'topic-menu' => __('Topic Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);

function get_menu_items($menu_name){
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        return wp_get_nav_menu_items($menu->term_id);
    }
}

// Sidebar Widget
function psychology_sidebar() {
    register_sidebar( array(
        'name' => __( 'Primary Sidebar', 'psychology' ),
        'id'   => 'sidebar-1',
    ) );
}
add_action( 'widgets_init', 'psychology_sidebar' );

// Footer Left Widget
function psychology_footer_left(){
    register_sidebar( array(
        'name'  => __( 'Footer Left', 'psychology' ),
        'id'    => 'footer-left'
    ));
}
add_action( 'widgets_init', 'psychology_footer_left');

// Footer Center Widget
function psychology_footer_center(){
    register_sidebar( array(
        'name'  => __( 'Footer Center', 'psychology' ),
        'id'    => 'footer-center'
    ));
}
add_action( 'widgets_init', 'psychology_footer_center');

// Footer Right Widget
function psychology_footer_right(){
    register_sidebar( array(
        'name'  => __( 'Footer Right', 'psychology' ),
        'id'    => 'footer-right'
    ));
}
add_action( 'widgets_init', 'psychology_footer_right');

// excerpt
function psychology_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'psychology_excerpt_length', 999 );

// Pagination
function pagination_all($pages = '', $range = 4){
    $showitems = $range * 2 + 1;

    global $paged;
    
    if(empty($paged)) $paged = 1;

    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }

    if($pages != 1){
        echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class=\"btn btn-success btn-sm\" href='".get_pagenum_link(1)."'>&laquo; First</a>";
        if($paged > 1 && $showitems < $pages) echo "<a class=\"btn btn-success btn-sm\" href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
        for ($i=1; $i <= $pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? "<span class=\"current btn btn-default btn-sm\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive btn btn-success btn-sm\">".$i."</a>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo "<a class=\"btn btn-success btn-sm\" href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
        if ($paged < $pages-1 && $paged+$range-1 < $pages && $showitems < $pages) echo "<a class=\"btn btn-success btn-sm\" href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
        echo "</div>\n";
    }
}

function pagination_simple($pages = ''){
    global $paged;
    
    if(empty($paged)) $paged = 1;

    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }

    if($pages != 1){
        echo "<div>";
        if($paged > 1 && $showitems < $pages) echo "<a class=\"btn btn-success \" href='".get_pagenum_link($paged - 1)."'>&lsaquo; Sebelumnya</a>";
        if ($paged < $pages && $showitems < $pages) echo "<a class=\"btn btn-success float-right\" href=\"".get_pagenum_link($paged + 1)."\">Selanjutnya &rsaquo;</a>";
        echo "</div>\n";
    }
}