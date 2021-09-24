<?php

	// style and scripts
	 add_action( 'wp_enqueue_scripts', 'bootscore_5_child_enqueue_styles' );
	 function bootscore_5_child_enqueue_styles() {
         
         // style.css
         wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
         
         // custom.js
         wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);

     } 


    // Overide main.css in child-theme
    function bootscore_replace_bootstrap() {

        // Dequeue parent-theme bootstrap.min.css
        wp_dequeue_style( 'bootscore' );
        wp_deregister_style( 'bootscore' );

        // Enqueue new bootstrap.min.css in child-theme
        wp_enqueue_style( 'child-main', get_stylesheet_directory_uri() .'/css/main.css' , array('parent-style'));
    }
    add_action( 'wp_enqueue_scripts', 'bootscore_replace_bootstrap', 20 );
