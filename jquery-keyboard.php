<?php
/**
 * Plugin Name: Virtual JQuery Keyboard
 * Description: Adds a JQuery Keyboard to input fields using a CSS class. Works with any contact form plugin! Contact Form 7, Gravity Forms, Caldera Forms, Ninja Forms
 * Author:      Christiaan van Luik
 * Author URI:  https://christiaanvanluik.nl
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version:     1.0.0
 * Text Domain: virtual-jquery-keyboard
 */


function jquery_keyboard_scripts() {
    wp_enqueue_style( 'ml-keyboard-style', plugins_url( 'css/jquery.ml-keyboard.css', __FILE__ ) );
    wp_enqueue_script( 'ml-keyboard-script', plugins_url( 'js/jquery.ml-keyboard.min.js', __FILE__ ), array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-keyboard-script', plugins_url( 'js/jquery-keyboard.js', __FILE__ ), array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'jquery_keyboard_scripts' );