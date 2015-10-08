<?php

/**
 * Genericons for Icon Picker
 *
 * @package Icon_Picker_Genericons
 * @version 0.1.0
 * @author Dzikri Aziz <kvcrvt@gmail.com>
 *
 *
 * Plugin Name: Icon Picker: Genericons
 * Plugin URI: http://kucrut.org/
 * Description: Genericons icon type for Icon Picker.
 * Version: 0.1.0
 * Author: Dzikri Aziz
 * Author URI: http://kucrut.org/
 * License: GPLv2
 * Text Domain: icon-picker-genericons
 * Domain Path: /languages
 */

/**
 * Register Genericons type for Icon Picker
 *
 * @action icon_picker_types_registry_init
 * @param  Icon_Picker_Types_Registry      $ip_registry Icon_Picker_Types_Registry instance.
 * @return void
 */
function icon_picker_genericons_register( Icon_Picker_Types_Registry $ip_registry ) {
	require_once Icon_Picker::instance()->dir . '/includes/types/font.php';
	require_once dirname( __FILE__ ) . '/genericons.php';

	$ip_registry->add( new Icon_Picker_Type_Genericons() );
}
add_action( 'icon_picker_types_registry_init', 'icon_picker_genericons_register' );
