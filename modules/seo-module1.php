<?php

add_action('plugins_loaded', 'plugins_loaded');

$redirect = false;

//function return_plugin_namespace() {
//
//    return 'lh_force_lowercase_urls';
//}

function get_actual_link() {

    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    return $actual_link;
}

function build_url(array $parts) {
    return (isset($parts['scheme']) ? "{$parts['scheme']}:" : '') .
            ((isset($parts['user']) || isset($parts['host'])) ? '//' : '') .
            (isset($parts['user']) ? "{$parts['user']}" : '') .
            (isset($parts['pass']) ? ":{$parts['pass']}" : '') .
            (isset($parts['user']) ? '@' : '') .
            (isset($parts['host']) ? "{$parts['host']}" : '') .
            (isset($parts['port']) ? ":{$parts['port']}" : '') .
            (isset($parts['path']) ? "{$parts['path']}" : '') .
            (isset($parts['query']) ? "?{$parts['query']}" : '') .
            (isset($parts['fragment']) ? "#{$parts['fragment']}" : '');
}

function force_lowercase() {


    $current_url = get_actual_link();

    if (strtolower($current_url) == $current_url) {

        return;
    } else {

        $parts = parse_url($current_url);


        $filename = basename($parts['path']);

        $simple_path = preg_replace('/' . preg_quote($filename, '/') . '$/', '', $parts['path']);


//echo $simple_path;

        $parts['host'] = strtolower($parts['host']);
        $parts['scheme'] = strtolower($parts['scheme']);

        if ($simple_path !== $parts['path']) {

            $parts['path'] = strtolower($simple_path) . $filename;
        } else {

            $parts['path'] = strtolower($parts['path']);
        }

        $maybe_new_url = build_url($parts);

        if ($maybe_new_url !== $current_url) {

            $status = apply_filters('lh_force_lowercase_urls' . '_status_code_filter', '301');

            wp_redirect($maybe_new_url, $status);
            exit;
        }
    }
}

function plugins_loaded() {


    // If page is non-admin, force lowercase URLs
    if (!is_admin()) {
        add_action('parse_request', 'force_lowercase');
    }
}
