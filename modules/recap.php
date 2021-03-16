<?php

add_action('wp_print_scripts', function () {
    wp_dequeue_script('google-recaptcha');
});

function cf7_defer_recaptcha() {
    wp_enqueue_script('cf7recap', BEAU_PLUGIN_URL() . '/js/recaptcha.js', array('jquery'), '1.0');    
}

add_action('get_footer', 'cf7_defer_recaptcha');
