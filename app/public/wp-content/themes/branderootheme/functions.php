<?php
//functions
function theme_files(){
    wp_enqueue_style('bootstrap_style',get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('branderoo_main_style',get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('jquery_script',get_template_directory_uri() . '/js/jquery.js');
    wp_enqueue_script('branderoo_main_script',get_template_directory_uri() . '/js/script.js');
    wp_enqueue_script('bootstrap_script',get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery_script'),true);
    wp_enqueue_style('google_fonts','https://fonts.googleapis.com/css?family=Cairo:300');
   
}
function navbar() {
    wp_nav_menu();
}
function theme_features(){
    register_nav_menu( 'mainMenu', 'Header Menu Location');//mainMenu->in your code('theme_location') ,Header Menu Location->in admin panel
    add_theme_support('title-tag'); //to add the page title to tab title
}

//actions
add_action("wp_enqueue_scripts","theme_files");
add_action('after_setup_theme','theme_features');
?>