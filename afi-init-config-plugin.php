<?php
/*
Plugin Name:  Affiliate Import
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  Affiliate Import
Version:      1
Author:       WordPress.org
Author URI:   https://developer.wordpress.org/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  afi
Domain Path:  /languages
*/

add_action( 'wp_head', "affidiate" );

function affidiate(){
?>
<script>window._epn = {campaign: 5338796121};</script>
<script src="https://epnt.ebay.com/static/epn-smart-tools.js"></script>
<?php
}