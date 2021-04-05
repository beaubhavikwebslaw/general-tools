<?php
/*
  Plugin Name: Webslaw General Tools
  Plugin URI:  http://www.webslaw.com
  Description: General Tools for Webslaw
  Version:     1.0.0
  Author:      Beau Bhavik
  Author URI:  http://www.webslaw.com
  License:     GPL2
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) exit('No direct script access allowed');

define( 'TOOLS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'TOOLS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
require_once( TOOLS_PLUGIN_PATH . 'modules/admin-settings.php' );
//require_once TOOLS_PLUGIN_PATH . '/inc/functionality.php';
// plugin registration = START

register_activation_hook(__FILE__, 'beau_plugin_activation');

// beau code with gihub

//Plugin Admin notice = START

//add_action('admin_init', 'smdb_on_plugins_loaded', 10);

function beau_plugin_activation() {
    set_transient('beau-admin-notice-transient', true, 5);
    weblslaw_create_table_pre();
}

add_action('admin_notices', 'beau_admin_notice');

function beau_admin_notice() {
    if (get_transient('beau-admin-notice-transient')) {
        ?>
        <div class="updated notice is-dismissible">
            <center><p>Thank you for using this plugin! <strong>You are awesome &#128522; </strong></p></center>
        </div>
        <?php
        /* Delete transient, only display this notice once. */
        delete_transient('beau-admin-notice-transient');
    }
}

//Plugin Admin notice = END

function weblslaw_create_table_pre() {
    global $wpdb;
//    $wpdb = apply_filters('smdb_database', $wpdb);
    $table_name = $wpdb->prefix . 'general_tools';
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name_field'") != $table_name) {

        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE $table_name (
            wbsl_id bigint(20) NOT NULL AUTO_INCREMENT,
	          wbsl_key varchar(15),
            wbsl_value varchar(15),
            wbsl_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY  (wbsl_id)
        ) $charset_collate;";
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta($sql);
    }
}

add_action('admin_menu', 'bk_add_menu_page');

function bk_add_menu_page() {
    add_menu_page('General Tools', 'General Tools', 'manage_options', 'general-tools', 'general_tools_fun', 'dashicons-smiley');
//    add_submenu_page('my-menu', 'Submenu Page Title', 'Whatever You Want', 'manage_options', 'my-menu');
//    add_submenu_page('my-menu', 'Submenu Page Title2', 'Whatever You Want2', 'manage_options', 'my-menu2');
}

function general_tools_fun() {
    require_once( TOOLS_PLUGIN_PATH . 'materials/assets-include.php' );
    require_once( TOOLS_PLUGIN_PATH . 'view/grid.php' );
//    echo BEAU_SITE_URL; exit;
    
  ?>


<?php
//    include_once BEAU_PLUGIN_DIR . '/dashboard.php';
}
