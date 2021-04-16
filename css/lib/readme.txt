Documentation: https://bootscore.me/documentation/custom-bootstrap-min-css/

1. Insert your own bootstrap.min.css here.

2. Add the following code to the functions.php of your child theme. Your own bootstrap.min.css will be used now.

// Dequeue parent bootstrap.min.css and enqueue child
function bootscore_remove_scripts() {
    
    // Dequeue parent bootstrap.min.css
    wp_dequeue_style( 'bootstrap' );
    wp_deregister_style( 'bootstrap' );

    // Register your child bootstrap.min.css
    wp_enqueue_style( 'child-theme-bootstrap', get_stylesheet_directory_uri() .'/css/lib/bootstrap.min.css' , array('parent-style'));
}
add_action( 'wp_enqueue_scripts', 'bootscore_remove_scripts', 20 );