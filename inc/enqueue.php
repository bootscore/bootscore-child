<?php

/**
 * Enqueue styles & scripts
 *
 * @package Bootscore Child
 * @version 7.0.0
 */


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Enqueue scripts and styles
 */
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/assets/css/bootscore.min.css'));
  wp_enqueue_style('bootscore-main', get_stylesheet_directory_uri() . '/assets/css/bootscore.min.css', array(), $modified_bootscoreChildCss);

  // Compiled bootscore.min.js - overrides parent theme's version if it exists
  // in the child theme. Falls back to the parent's file automatically if
  // the child hasn't compiled its own yet (handle stays untouched).
  if (file_exists(get_stylesheet_directory() . '/assets/js/bootscore.min.js')) {
    $modified_bootscoreChildJs = date('YmdHi', filemtime(get_stylesheet_directory() . '/assets/js/bootscore.min.js'));
    wp_enqueue_script('bootscore-script', get_stylesheet_directory_uri() . '/assets/js/bootscore.min.js', array(), $modified_bootscoreChildJs, true);
  }
}
