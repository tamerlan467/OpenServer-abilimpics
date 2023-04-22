<?php session_start();
if ($_SESSION['auth'] == true) {
    echo '<script>window.location.replace("http://maxima:8080/profile/");</script>';
}
/**
 * Template Name: registrasia
 * Author: Tamerlan Zhargasov
 * Description: Cтраница регистрации темы Maxima
 */
?>
<!-- Подключаем header и footer  -->
<?php get_header(); ?>
<!-- Шорткод плагина регистрации -->
<?php echo do_shortcode('[Plugin-form]');?>
<?php get_footer(); ?>