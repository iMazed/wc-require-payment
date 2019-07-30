<?php
/*
Plugin Name: WooCommerce Require Payment Option
Description: Require a payment option in WooCommerce, even if the product is free
Version: 0.1
Author: Ines van Essen
Author URL: https://inesvanessen.nl
*/

/**
 * Security measure to prevent direct access.
 * Always add that.
 */
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Require payment option on order
 */
add_filter( 'woocommerce_order_needs_payment', '__return_true' );

/**
 * Require payment at cart level
 */
add_filter( 'woocommerce_cart_needs_payment', '__return_true' );