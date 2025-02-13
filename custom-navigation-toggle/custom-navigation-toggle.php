<?php
/*
Plugin Name: Custom Navigation Toggle
Description: Adds a mobile submenu toggle to WordPress FSE navigation block using very little code!
Version: 1.0
Author: Paul Impellizeri
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue CSS
function custom_navigation_toggle_styles()
{
    wp_enqueue_style(
        'custom-navigation-toggle-style',
        plugins_url('custom-navigation-toggle.css', __FILE__)
    );
}
add_action('wp_enqueue_scripts', 'custom_navigation_toggle_styles');

// Add JavaScript
function custom_navigation_toggle_script()
{
    if (is_admin()) {
        return; // Don't load in the admin area
    }

    wp_enqueue_script(
        'custom-navigation-toggle-script',
        plugins_url('custom-navigation-toggle.js', __FILE__),
        true // Load in the footer
    );
}
add_action('wp_enqueue_scripts', 'custom_navigation_toggle_script');
