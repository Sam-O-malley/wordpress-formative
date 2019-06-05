<?php

function alleyCat_script_enqueue(){


    wp_enqueue_style('my_bootstrap',get_template_directory_uri() . '/assets/css/bootstrap.css' ,array(),'4.3.1');
    
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/main.css',array(),'1.0.0','all');


    wp_enqueue_script('jquery');

    wp_enqueue_script('my_bootstrap_script',get_template_directory_uri() . '/assets/js/bootstrap.js',array(),'4.3.1',true);

    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/main.js',array(),'1.0.0',true);

}

add_action('wp_enqueue_scripts', 'alleyCat_script_enqueue');

?>