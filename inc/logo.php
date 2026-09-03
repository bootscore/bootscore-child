<?php
/**
 * Logo size
 * 
 * https://bootscore.me/documentation/theme/bootscore-child/#logo
 * 
 * @package Bootscore Child
 * @version 7.0.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Adjust the logo size
 */
add_filter('bootscore/logo/width', function () {
  return '30';
});

add_filter('bootscore/logo/height', function () {
  return '30';
});
