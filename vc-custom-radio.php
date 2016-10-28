<?php
/*
Plugin Name: Vc Custom Radio
Plugin URI: http://vc.wpbakery.com/
Description: Custom radio attribute Visual Composer on Steroids
Version: 1.0
Author: WPBakery
Author URI: http://wpbakery.com
License: http://codecanyon.net/licenses
*/
if ( ! defined( 'ABSPATH' ) ) {
	die( '' ); // Don't call directly
}

add_action( 'vc_build_admin_page', 'vc_custom_radio_init' );
add_action( 'vc_after_init', 'vc_custom_radio_shortcode' );
function vc_custom_radio_init() {
	require_once 'param/class-vc-custom-radio.php';
	new VcCustomRadio();
}

function vc_custom_radio_shortcode() {
	require_once 'shortcode/shortcode-vc-test-custom-radio-lean-map.php';
	require_once 'shortcode/shortcode-vc-test-custom-radio-class.php';
}

function vc_custom_radio_path() {
	return __FILE__;
}