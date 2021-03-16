<?php

function beau_amp_plugin_scripts($hook) {
    if (is_admin()) {
        wp_enqueue_script( 'webslaw_wp_dev_kit', BEAU_PLUGIN_URL . '/js/webslaw_wp_dev_kit.js', array('jquery') );
    }
}
add_action('admin_enqueue_scripts', 'beau_amp_plugin_scripts');

?>