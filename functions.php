<?php

	// style.css
	 add_action( 'wp_enqueue_scripts', 'bootscore_5_child_enqueue_styles' );
	 function bootscore_5_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 