<?php
// Подключаем файлы css и js сайта
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js');
    wp_enqueue_script('bootstrap-4-js', get_template_directory_uri() . '/assets/js/bootstrap-4.4.1.js');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js');
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js');
    wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('bootstrap-4-css', get_template_directory_uri() . '/assets/css/bootstrap-4.4.1.css');
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css');
});
?>