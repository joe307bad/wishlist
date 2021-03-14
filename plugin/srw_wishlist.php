<?php
/**
 * @package Wishlist | SRW
 */
/*
Plugin Name: Wishlist | SRW
Plugin URI: https://sapphireroadweddings.com
*/
function srw_wishlist_shortcode()
{
    wp_enqueue_script('srw_wishlist_js', 'http://localhost:3077/bundle.js', '', mt_rand(10, 1000), true);

    return '<div id="srw_wishlist"></div>';
}

add_shortcode('srw_wishlist', 'srw_wishlist_shortcode');

