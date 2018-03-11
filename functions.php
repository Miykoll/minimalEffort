<?php

// Add stylesheet(s) and scripts (no scripts yet)
function startMinimalEffort_scripts() {
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'startMinimalEffort_scripts' );

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
    register_post_type( 'project',
            array(
                'labels' => array(
                    'name' => __( 'Projects' , 'Minimal Effort'),
                ),
                'public' => true,
                'hierarchical' => true,
                'has_archive' => true,
                'supports' => array(
                        'title',
                        'editor',
                        'thumbnail',
                        'excerpt'
                ),
                'taxonomies' => array( 
                        'post_tag',
                        'category'
                ), // Adds tags and categories
                'rewrite' => array('slug' => 'projects') // creates example.com/projects/*project_name*/
            )
    );
}
add_action( 'init', 'create_post_project' );

