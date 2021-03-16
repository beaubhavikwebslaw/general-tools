<?php

if (is_admin()) {
    
    wp_enqueue_style('bootstrap-5-css-plugin', TOOLS_PLUGIN_URL . 'css/bootstrap.min.css');
    
    wp_enqueue_style('general-tools-4-css-plugin', TOOLS_PLUGIN_URL . 'css/general-tools.css');    
    
    wp_enqueue_script('jquery-36-js-plugin', TOOLS_PLUGIN_URL . 'js/jquery36.js');
    wp_enqueue_script('bootstrap-5-js-plugin', TOOLS_PLUGIN_URL . 'js/bootstrap.min.js');
    wp_enqueue_script('custom-js-plugin', TOOLS_PLUGIN_URL . 'js/customjs.js');
    
}

?>

