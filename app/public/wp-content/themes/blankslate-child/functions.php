<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION
add_filter( 'wp_nav_menu_primary-menu_items', 'prefix_add_menu_item', 10, 2 );
/**
 * Add Menu Item to a specific place in the menu
 */


add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
    // var_dump($args -> menu ); 
    if (is_user_logged_in() && $args->menu == 'navigation') {
        $items .= '<li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-14 current_page_item parent hfe-creative-menu"><a class="hfe-menu-item" href="'. get_admin_url() .'">Admin</a ></li>';
    }
    return $items;
}