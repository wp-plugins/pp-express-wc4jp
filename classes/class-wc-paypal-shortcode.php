<?php
/**
 * WooCommerce Gateway PayPal Express
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file license.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package     WC-Gateway-PayPal-Express/Classes
 * @author      Artisan Workshop
 * @copyright   Copyright (c) 2014-2015, Artisan Workshop LLC.
 * @license     http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//PayPal logo image 
function paypal_logo_func( $atts ){
	if($atts['size']=='203×80'){
		return '<img src="'.plugin_dir_url( __FILE__ ).'assets/images/logo01.png" />';
	}elseif($atts['size']=='319×110'){
		return '<img src="'.plugin_dir_url(__FILE__).'assets/images/logo02.png" />';
	}elseif($atts['size']=='148×139'){
		return '<img src="'.plugin_dir_url(__FILE__).'assets/images/logo03.png" />';
	}
}
add_shortcode( 'paypal_logo', 'paypal_logo_func' );
