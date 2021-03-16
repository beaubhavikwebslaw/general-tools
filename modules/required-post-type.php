<?php

if (!function_exists('webslaw_required_post_type')) {

    function webslaw_required_post_type() {

        // Testimonials Post Type
        $tst_pst = array(
            'name' => _x('Testimonials', 'post type general name', 'webslaw-post-type'),
            'singular_name' => _x('Testimonial', 'post type singular name', 'webslaw-post-type'),
            'menu_name' => _x('Testimonials', 'admin menu', 'webslaw-post-type'),
            'name_admin_bar' => _x('Testimonials', 'add new on admin bar', 'webslaw-post-type'),
            'add_paw' => _x('Add New', 'Testimonials', 'webslaw-post-type'),
            'add_paw_item' => __('Add New Testimonials', 'webslaw-post-type'),
            'new_item' => __('New Testimonials', 'webslaw-post-type'),
            'edit_item' => __('Edit Testimonials', 'webslaw-post-type'),
            'view_item' => __('View Testimonials', 'webslaw-post-type'),
            'all_items' => __('Testimonials', 'webslaw-post-type'),
            'search_items' => __('Search Testimonials', 'webslaw-post-type'),
            'parent_item_colon' => __('Parent Testimonials:', 'webslaw-post-type'),
            'not_found' => __('No Testimonials found.', 'webslaw-post-type'),
            'not_found_in_trash' => __('No Testimonials found in Trash.', 'webslaw-post-type')
        );
        $args_tst = array(
            'labels' => $tst_pst,
            'description' => __('Testimonial.', 'webslaw-post-type'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'testimonials', 'with_front' => false),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 7,
            'menu_icon' => __('dashicons-format-chat', 'webslaw-post-type'),
            'supports' => array('title', 'editor', 'revisions') //'thumbnail'
        );
        register_post_type('testimonials', $args_tst);
    }

}

add_action('init', 'webslaw_required_post_type');
