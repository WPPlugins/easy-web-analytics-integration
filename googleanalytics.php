<?php
/*
Plugin Name: Easy Web Analytics Integration
Plugin URI: http://pakistansol.com/life-easier/googleanalyticsad/
Description: Enables <a href="http://www.google.com/analytics/">Google Analytics</a> on all pages.
Version: 1.0.0
Author: Samiullah Kaifi
Author URI: http://pakistansol.com/
*/

if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');

function activate_googleanalyticsad() {
  add_option('web_property_tc', '');
}

function deactive_googleanalyticsad() {
  delete_option('web_property_tc');
}

function admin_init_googleanalyticsad() {
  register_setting('googleanalyticsad', 'web_property_tc');
}

function admin_menu_googleanalyticsad() {
  add_options_page('Easy Web Analytics Integration', 'Easy Web Analytics Integration', 'manage_options', 'googleanalyticsad', 'options_page_googleanalyticsad');
}

function options_page_googleanalyticsad() {
  include(WP_PLUGIN_DIR.'/easy-web-analytics-integration/options.php');  
}

function googleanalyticsad() {
  $web_property_tc = get_option('web_property_tc');
?>
<?php echo $web_property_tc ?>
<?php
}

register_activation_hook(__FILE__, 'activate_googleanalyticsad');
register_deactivation_hook(__FILE__, 'deactive_googleanalyticsad');

if (is_admin()) {
  add_action('admin_init', 'admin_init_googleanalyticsad');
  add_action('admin_menu', 'admin_menu_googleanalyticsad');
}

if (!is_admin()) {
  add_action('wp_head', 'googleanalyticsad');
}

?>
