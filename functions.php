<?php
	// Style CSS
	function child_theme_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() .'/style.css' , array('parent-style'));
        wp_enqueue_style( 'bootstrap-icons.css', get_stylesheet_directory_uri() . '/css/bootstrap-icons.css', array('bootstrap') );

        // When ready
        // wp_dequeue_style('fontawesome');

	}
	add_action( 'wp_enqueue_scripts', 'child_theme_styles' );

	// Custom JS
	function child_add_scripts() {
		wp_register_script('child', get_stylesheet_directory_uri() . '/js/child.js', false, '', true);
		wp_enqueue_script('child');
	}
	add_action( 'wp_enqueue_scripts', 'child_add_scripts' ); 
