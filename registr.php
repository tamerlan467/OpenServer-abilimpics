<?php session_start();
if($_SESSION['auth'] == true){
   echo '<script>window.location.replace("http://quadracopter2:8080/profile/");</script>';
   }
/*
 * Template Name: registr
 * Author: Tamerlan Zhargasov
 * Description: Cтраница регистрации темы Квадракоптеров
 */
?>
<?php get_header(); ?>
<?
if(isset($_SESSION['message'])){ 
   echo '<p class="msg">'.$_SESSION['message'].'</p>';
   unset($_SESSION['message']);
} 

?>
<?php echo do_shortcode('[Plugin-form]'); ?>

<?php get_footer(); ?>
