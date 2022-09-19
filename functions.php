<?php

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles()
{

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // custom.js
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
}

/* Remove parent theme page templates */
function remove_page_templates($page_templates)
{
  unset($page_templates['page-templates/page-blank.php']);
  unset($page_templates['page-templates/page-blank-without-container.php']);

  return $page_templates;
}
add_filter('theme_page_templates', 'remove_page_templates');
add_filter('theme_post_templates', 'remove_page_templates');
