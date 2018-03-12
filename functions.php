<?php

/**
* Include settings page for the theme
*/
function theme_admin_page() {
    add_submenu_page('themes.php', 
        'Minimal Effort', 'Theme options', 'manage_options', 
        'theme-options', 'init_theme_options'); 
}
add_action("admin_menu", "theme_admin_page");

function init_theme_options() {
    include 'theme_options.php';
    require get_template_directory() . '/options/theme-options-gui.php';
}

/** 
 * Include navigation menu
 */
function register_my_menu() {
  register_nav_menu('nav-menu',__( 'Navigation Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Add stylesheet(s) and scripts (no scripts yet)
function startMinimalEffort_scripts() {
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'startMinimalEffort_scripts' );


// include custom jQuery
function load_jquery_script() {

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'load_jquery_script');

/** 
 * Google Fonts
 */
function load_fonts() {
    wp_register_style( 'All', '//fonts.googleapis.com/css?family=Nunito+Sans:400,700|Roboto+Mono:400' );
    wp_enqueue_style( 'All' );
}
add_action('wp_print_styles', 'load_fonts'); 



// WordPress Titles
add_theme_support( 'title-tag' );


// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Increase post upload size
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// Create custom post for projects
function create_post_project() {
    register_post_type( 'projects',
            array(
                'labels' => array(
                    'name' => __( 'Projects')
                ),
                'public' => true,
                'hierarchical' => true,
                'has_archive' => false,
                'supports' => array(
                        'title',
                        'editor',
                        'thumbnail',
                        'excerpt'
                ),
                'taxonomies' => array( 
                        'post_tag',
                        'category'
                ),// Adds tags and categories
                'menu_position' => 4,
                'menu_icon' => 'dashicons-feedback' 
            )
    );
}
add_action( 'init', 'create_post_project' );

