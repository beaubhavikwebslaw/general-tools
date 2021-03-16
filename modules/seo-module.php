<?php

//if (!defined('ABSPATH'))
//    exit; // Exit if accessed directly

/**
 * LH Force Lowercase URLs plugin class
 */
if (!class_exists('LH_Force_lowercase_urls_plugin')) {


    class LH_Force_lowercase_urls_plugin {

        private static $instance;
        var $redirect = false;

        static function return_plugin_namespace() {

            return 'lh_force_lowercase_urls';
        }

        static function get_actual_link() {

            $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            return $actual_link;
        }

        static function build_url(array $parts) {
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

        public function force_lowercase() {


            $current_url = self::get_actual_link();

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

                $maybe_new_url = self::build_url($parts);

                if ($maybe_new_url !== $current_url) {

                    $status = apply_filters(self::return_plugin_namespace() . '_status_code_filter', '301');

                    wp_redirect($maybe_new_url, $status);
                    exit;
                }
            }
        }

        public function plugins_loaded() {


            // If page is non-admin, force lowercase URLs
            if (!is_admin()) {
                add_action('parse_request', array($this, 'force_lowercase'));
            }
        }

        /**
         * Gets an instance of our plugin.
         *
         * using the singleton pattern
         */
        public static function get_instance() {
            if (null === self::$instance) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        public function __construct() {

            //run our hooks on plugins loaded to as we may need checks       
            add_action('plugins_loaded', array($this, 'plugins_loaded'));
        }

    }

    $lh_force_lowercase_urls_instance = LH_Force_lowercase_urls_plugin::get_instance();
}

?>