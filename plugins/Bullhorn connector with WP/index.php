<?php
/**
* Plugin Name: Bullhorn connector to WP
* Plugin URI:  https://searchstack.co.uk/
* Description: Bullhorn connector to WP
* Version: 0.1
* Author: Usha Rani
* Author URI:  https://searchstack.co.uk/
**/




add_action( 'admin_menu', 'my_plugin_menu' );


function my_plugin_menu() {
	
	add_menu_page('Bullhorn connector', 'Bullhorn Settings', 'manage_options', 'bullhorn-settings', 'my_magic_function');
	//add_submenu_page( 'bullhorn-settings', 'Bullhorn connector', 'Sub-menu title', 'manage_options', 'my-submenu-handle', 'my_magic_function2');
}
include('bullhorn_client_login.php');

add_action('wp_footer', 'bullhorn_update_jobs');
function bullhorn_update_jobs(){
	
	include('modules/wp_auto_load_jobs.php');
	include('modules/wp_auto_jobs_submissions.php');
}


