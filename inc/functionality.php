<?php

function webslaw_auto_update_plugin_setting( $html, $plugin_file, $plugin_data ) {
    if ( 'general-tools/general-tools.php' === $plugin_file ) {
        $html = "<em>Auto-updates are not available for ".$plugin_data['Name'].' &#128522;</em>';
    }
    return $html;
}
add_filter( 'plugin_auto_update_setting_html', 'webslaw_auto_update_plugin_setting', 10, 3 );
