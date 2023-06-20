<?php

function latest_custom_post(){

$blog_label = array(
    'name' => __('Blog Post', 'textdomain'),
    'singular'=> __('Add Blog Post', 'textdomain'),
    'add_new' => __( 'Add Blog Post', 'textdomain'),
    'add _new_item' => __('Add New Blog Post', 'textdomain'),
    'edit_item' => __( 'Edit Blog Post', 'textdomain'),
    'all items' => __('Blog Post', 'textdomain'),

);

$blogPost_args = array(
    'labels' => $blog_label,
    'public'=> true,
    'capability_type' =>'post',
    'show_ui' => true,
    'taxonomies' => array('post tags', 'category'),
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
);
register_post_type('blogPost', $blogPost_args);

} 

/*----------------------*/ 

$latest_label = array(
    'name' => __('latest Post', 'textdomain'),
    'singular'=> __('Add latest Post', 'textdomain'),
    'add_new' => __( 'Add latest Post', 'textdomain'),
    'add _new_item' => __('Add New latest Post', 'textdomain'),
    'edit_item' => __( 'Edit latest Post', 'textdomain'),
    'all items' => __('latest Post', 'textdomain'),

);

$latestPost_args = array(
    'labels' => $latest_label,
    'public'=> true,
    'capability_type' =>'post',
    'show_ui' => true,
    'taxonomies' => array('post tags', 'category'),
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
);
register_post_type('latestPost', $latestPost_args);



add_action('init', 'latest_custom_post');