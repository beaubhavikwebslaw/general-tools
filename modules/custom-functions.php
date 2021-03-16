<?php

//print_r short version
function ptr($args) {
    echo "<pre>";
    return print_r($args);
}

//generate slug from any text
function slugify($text) {
    $text = preg_replace('~[^\pL\d]+~u', '-', $text); // replace non letter or digits by -
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text); // transliterate
    $text = preg_replace('~[^-\w]+~', '', $text); // remove unwanted characters
    $text = trim($text, '-'); // trim
    $text = preg_replace('~-+~', '-', $text); // remove duplicate -
    $text = strtolower($text); // lowercase
    if (empty($text)) {
        return 'n-a';
    }
    return $text;
}

// Remove Brackets from excerpt
function remove_excerpt_end_brackets($content) {
    return str_replace('[&hellip;]', ' ', $content);
}

add_filter('the_excerpt', 'remove_excerpt_end_brackets');

//Add excerpt dots at end of the string
function new_excerpt_more($more) {
    return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');

// Set length of the excerpt
function custom_excerpt_length($length) {
    return 45;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);

// Get data of ACF field in Search Result
function custom_field_excerpt($field_name) {
    global $post;
    $length = 55;
    $text = get_field($field_name);
    $return_result = the_excerpt();
    if ('' != $text) {
        $text = strip_shortcodes($text);
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
        $excerpt_length = $length; // 20 words
        $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
        $text = wp_trim_words($text, $excerpt_length, $excerpt_more);
        $return_result = apply_filters('the_excerpt', $text);
    }
    return $return_result;
}

add_action('edit_form_after_title', 'wp692_edit_form_after_title');

function wp692_edit_form_after_title() {
//    $blog_pagename = get_the_title(get_option('page_for_posts', true));
//    $page_for_posts = get_option('page_for_posts');
    if (is_admin() && get_post_type() == 'page' && get_the_ID() !== '374') {
        $path = get_stylesheet_directory_uri() . '/images/down-arrow.png';
        echo '<center><h1 style="color:#000;"> Search Result Text Here</h1></center>';
        echo '<center><img src="' . $path . '"></center>';
    }
}


