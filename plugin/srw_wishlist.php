<?php
/*
Plugin Name: srw_wishlist | SRW Engineering
*/
add_action('wp_dashboard_setup', function () {
    wp_add_dashboard_widget('srw_wishlist_widget', 'srw_wishlist', 'srw_wishlist_display_widget');
    function srw_wishlist_display_widget() {
        ?>
        <div id="srw_srw_wishlist_dashboard"></div>
        <?php
    }
});
