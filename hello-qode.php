<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://qodemedia.com
 * @since             1.0.0
 * @package           Hello_Qode
 *
 * @wordpress-plugin
 * Plugin Name:       Hello Qode
 * Plugin URI:        https://qodemedia.com
 * Description:       Hello World
 * Version:           1.0.1
 * Author:            Anil
 * Author URI:        https://qodemedia.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hello-qode
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'HELLO_QODE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hello-qode-activator.php
 */
function activate_hello_qode() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hello-qode-activator.php';
	Hello_Qode_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hello-qode-deactivator.php
 */
function deactivate_hello_qode() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hello-qode-deactivator.php';
	Hello_Qode_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hello_qode' );
register_deactivation_hook( __FILE__, 'deactivate_hello_qode' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hello-qode.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hello_qode() {

	$plugin = new Hello_Qode();
	$plugin->run();

}
run_hello_qode();
