<?php
/*
Plugin Name: WP React Starter
Description: A starter plugin with React for the admin page.
Version: 1.0
Author: Your Name
*/

function wp_react_kickoff_enqueue_scripts() {
    wp_enqueue_script(
        'wp-react-kickoff-admin-js',
        plugins_url('/dist/bundle.js', __FILE__), // Correct path to the bundle.js
        ['wp-element'], // Dependency to use React in WordPress
        null,
        true
    );
}
add_action('admin_enqueue_scripts', 'wp_react_kickoff_enqueue_scripts');

function wp_react_startar_add_admin_menu() {
    add_menu_page(
        'My Custom Menu',         // Page title
        'My Custom Menu',         // Menu title
        'manage_options',         // Capability required
        'my-custom-menu',         // Menu slug
        'wp_react_kickoff_admin_page', // Callback function
        'dashicons-admin-site',   // Menu icon
        6                         // Position in the menu
    );
}

function wp_react_kickoff_admin_page() {
    echo '<div id="my-custom-menu-root"></div>';
}

add_action('admin_menu', 'wp_react_startar_add_admin_menu');
