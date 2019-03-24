<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/* Shortcode Init */
function wc_buynow_btn_shortcode_init(){

	/* Woocommerce Buy Now Button Shortcode */
	function wc_buynow_btn_function( $atts, $content = null ) {

		shortcode_atts( array(
			'btn_name'	=>	__( 'Buy Now', 'wc-buynow-button' )
		), $atts);


		$wc_buynow_btn = '<a href="'.home_url('/cart/?add-to-cart='.get_the_ID() ).'"></a>';


		return $wc_buynow_btn;

	}
	/* Init Shortcode */
	add_shortcode( 'wc_buynow_btn', 'wc_buynow_btn_function' );

}
add_action( 'init', 'wc_buynow_btn_shortcode_init' );