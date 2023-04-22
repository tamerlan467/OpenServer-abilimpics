<?php session_start();
if ($_SESSION['auth'] == true) {
    echo '<script>window.location.replace("http://maxima:8080/profile/");</script>';
}
/**
 * Template Name: vhod
 * Author: Tamerlan Zhargasov
 * Description: Cтраница входа темы Maxima
 */
?>
<!-- Подключаем header и footer  -->
<?php get_header(); ?>
<!-- Шорткод плагина формы авторизации -->
<?php echo do_shortcode('[Plugin-form-auth]'); ?>
<?php get_footer(); ?>