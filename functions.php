<?php

	// Style CSS
	function child_theme_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() .'/style.css' , array('parent-style'));
	}
	add_action( 'wp_enqueue_scripts', 'child_theme_styles' );