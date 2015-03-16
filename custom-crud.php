<?php
/*
Plugin Name: Crud Template
Description: Adds/Removes Custom Elements based on options table as opposed to on a post type.
Author: Richard Miles
Version: 0
Author URI: http://richymiles.wordpress.com
*/

add_action('admin_menu', 'crud_menu');

function crud_menu() {
	add_options_page('My Options', 'Simple Crud', 'manage_options', plugin_dir_path(__FILE__). 'admin.php');
}
