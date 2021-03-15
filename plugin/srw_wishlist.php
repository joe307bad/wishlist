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

add_action ( 'wp_head', 'my_js_variables' );
function my_js_variables(){ ?>
    <script type="text/javascript">
        var ajaxurl = <?php echo json_encode( admin_url( "admin-ajax.php" ) ); ?>;
        var ajaxnonce = <?php echo json_encode( wp_create_nonce( "itr_ajax_nonce" ) ); ?>;
        var myarray = <?php echo json_encode( array(
            'foo' => 'bar',
            'available' => TRUE,
            'ship' => array( 1, 2, 3, ),
        ) ); ?>
    </script><?php
}
