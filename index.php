<?php

/**
 * Plugin Name: WC BuyNow Button
 * Plugin URI: #
 * Description: WC Buy Now Button show any where
 * Plugin URI: 
 * Version: 1.0.0
 * Author URI: https://themeasia.net
 * Author: Shipon
 * Text Domain: wc-buynow-button
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'woocommerce' ) ) {
	// This just echoes the chosen line, we'll position it later
	function wc_buynow_btn_notice() {
		
		echo '<div id="message" class="updated notice is-dismissible"><p>Please install/active Woocommerce Plugin.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
	}
	add_action( 'admin_notices', 'wc_buynow_btn_notice' );
} else {

	return true;

}

/* Functions */
if ( file_exists( plugin_dir_path( __FILE__ ) . '/inc/functions.php' ) ) {
	include_once( plugin_dir_path( __FILE__ ) . '/inc/functions.php' );
}
/* Shortcode */
if ( file_exists( plugin_dir_path( __FILE__ ) . '/inc/shortcodes.php' ) ) {
	include_once( plugin_dir_path( __FILE__ ) . '/inc/shortcodes.php' );
}
