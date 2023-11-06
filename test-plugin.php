<?php
/*
Plugin Name: Test Plugin
Description: A simple plugin for testing purposes.
Version: 2.0.0
Author: Mohammad Wahid
*/

// Function to display a message on the WordPress dashboard
function display_test_message() {
    echo '<div class="notice notice-success is-dismissible"><p>Hello, this is a test message from your Test Plugin!</p></div>';
}

// Hook the function to the admin_notices action to display the message
add_action('admin_notices', 'display_test_message');

/**
 * The code that runs during plugin activation
 */
function activate_alecaddd_plugin() {
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'activate_alecaddd_plugin' );

/**
 * The code that runs during plugin deactivation
 */
function deactivate_alecaddd_plugin() {
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'deactivate_alecaddd_plugin' );


?>
