<?php
/*
Plugin Name: Woobizz Hook 29 
Plugin URI: http://woobizz.com
Description: Add custom prefix to order number
Author: Woobizz
Author URI: http://woobizz.com
Version: 1.0.0
Text Domain: woobizzhook29
Domain Path: /lang/
*/
//Prevent direct acces
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Load translation
add_action( 'plugins_loaded', 'woobizzhook29_load_textdomain' );
function woobizzhook29_load_textdomain() {
  load_plugin_textdomain( 'woobizzhook29', false, basename( dirname( __FILE__ ) ) . '/lang' ); 
}
//Add Hook 29
function woobizzhook29_add_custom_prefix( $oldnumber, $order ) {
    return 'CUSTOM' . $order->id;
}
add_filter( 'woocommerce_order_number', 'woobizzhook29_add_custom_prefix', 1, 2 );