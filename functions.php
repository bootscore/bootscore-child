<?php

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_5_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
  // custom.js
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
    
}

// Overide bootstrap.min.css in child-theme
function bootscore_replace_bootstrap() {

  // Dequeue parent-theme bootstrap.min.css
  wp_dequeue_style('bootstrap');
  wp_deregister_style('bootstrap');

  // Enqueue new bootstrap.min.css in child-theme
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/lib/bootstrap.min.css'));
  wp_enqueue_style('bootstrap-child', get_stylesheet_directory_uri() . '/css/lib/bootstrap.min.css', array('parent-style'), $modified_bootscoreChildCss);

}
add_action('wp_enqueue_scripts', 'bootscore_replace_bootstrap', 20);
