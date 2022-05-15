<?php

/**
 * Plugin Name: Menu polylang styles
 * Description: Allows to add missing css on theme.
 * Author: Bastien KOPKA
 * Author URI: https://www.bastienkopka.fr/
 * Version: 1.0.0
 */

 if (!defined('ABSPATH')) {
   return;
 }

add_action('wp_enqueue_scripts', 'menu_polylang_styles_scripts');
/**
 * Function to add plugin scripts.
 */
function menu_polylang_styles_scripts() {
  wp_enqueue_style('mps-main-css',  plugin_dir_url( __FILE__ ) . '/css/mps-main.css');                      
}
