<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css');
     wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-4.4.1.css');
    wp_enqueue_style('eCommerce', get_template_directory_uri() . '/assets/css/eCommerceStyle.css');
     wp_enqueue_style('font', get_template_directory_uri() . '/assets/css/font-awesome.css');
     wp_enqueue_style('font-min', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
     wp_enqueue_script('app-js', get_template_directory_uri(). '/assets/js/app.js');
       wp_enqueue_script('bootstrap-js', get_template_directory_uri(). '/assets/js/bootstrap-4.4.1.js');
     wp_enqueue_script('popper-min', get_template_directory_uri(). '/assets/js/popper.min.js');
});

?>