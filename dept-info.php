<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link
 * @since             0.1.0
 * @package           dept_info
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Plugin Boilerplate
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.1.0
 * Author:            Austin Tindle
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dept-info-activator.php
 */
function activate_dept_info() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dept-info-activator.php';
	Dept_Info_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dept-info-deactivator.php
 */
function deactivate_dept_info() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dept-info-deactivator.php';
	Dept_Info_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dept_info' );
register_deactivation_hook( __FILE__, 'deactivate_dept_info' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dept-info.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0
 */
function run_dept_info() {

	$plugin = new Dept_Info();
	$plugin->run();

}
run_dept_info();
