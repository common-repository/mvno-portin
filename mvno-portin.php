<?php
/**
 * Plugin Name: MVNO Portin
 * Plugin URI: https://mvnop.com/
 * Description: MVNO Portin to get you started with MVNO portin services.
 * Version: 1.0.1
 * Author: MVNOP
 * Author URI: https://mvnop.com
 * Text Domain: MVNOP
 * @package Mvno
 */

defined( 'ABSPATH' ) || exit;


include ('init.php');
include ('includes/Install.php');
include ('includes/Uninstall.php');

if (class_exists('MvnoPortin')) {
    $newinstance = new MvnoPortin();
}
register_activation_hook( __FILE__, array( 'MvnoPortinInstall', 'create_mvno_portin_database_table' ) );
register_deactivation_hook( __FILE__, array('MvnoPortinUninstall', 'mvno_portin_remove_database_table'));
