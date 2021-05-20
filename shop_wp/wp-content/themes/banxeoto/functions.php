<?php 
add_theme_support( 'post-thumbnails' ); //ảnh đại diện

function register_my_menu() { // tạo menu
  register_nav_menu('header-menu',__( 'Menu main' ));
}
add_action( 'init', 'register_my_menu' );

add_filter('nav_menu_css_class', 'current_type_nav_class', 10, 2);
function current_type_nav_class($classes, $item) {
    // Get post_type for this post
    $post_type = get_query_var('post_type');

    // Go to Menus and add a menu class named: {custom-post-type}-menu-item
    // This adds a 'current_page_parent' class to the parent menu item
    if( in_array( $post_type.'-menu-item', $classes ) )
        array_Push($classes, 'current_page_parent');

    return $classes;
}

add_filter('use_block_editor_for_post', '__return_false'); //ĐƯA TRÌNH SOẠN THẢO CỦA WORDPRESS VỀ PHIÊN BẢN CŨ


?>