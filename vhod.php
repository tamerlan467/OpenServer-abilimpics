<?php  session_start();
if($_SESSION['auth'] == true){
    echo '<script>window.location.replace("http://quadracopter2:8080/profile/");</script>';
    }
/*
* Template Name: vhod
* Author: Tamerlan Zhargasov
* Description: Cтраница авторизация темы Квадракоптеров
*/
?>
<?php get_header();?>
<?php echo do_shortcode('[Plugin-form2]');?>
 <?php if (isset($_SESSION['message'])): ?>
    <p class="msg"><?php echo $_SESSION['message']; ?></p>
<? unset($_SESSION['message']);?>
<?php endif; ?>
<?php get_footer();?>



