<?php
/**
 * Template Name: send me
 * Author: Tamerlan Zhargasov
 * Description: Cтраница Напишите нам темы Maxima
 */
?>
<!-- Подключаем header и footer  -->
<?php get_header(); ?>
<form action="" id="form_send" method="POST">
    <h2 style="text-align:center;">Форма отправки сообщения</h2>
    <input type="text" name="username" placeholder="Имя" required minlength="3" required maxlength="1000">
    <input type="email" name="email" placeholder="Адрес электронной почты" required minlength="3" required
        maxlength="1000">
    <input type="tel" name="phone" placeholder="Номер телефона:" required minlength="3" required maxlength="1000">
    <label>Способ получения сообщений: Почта, SMS, Сообщение;</label>
    <label for="email">Email</label>
    <input type="radio" name="radio" id="email" value="E-MAIL" required>
    <label for="sms">SMS</label>
    <input type="radio" name="radio" id="sms" value="SMS" required>
    <label for="send">Сообщение</label>
    <input type="radio" name="radio" id="send" value="Send" required>
    <textarea name="send" id="send" cols="30" rows="10" required minlength="3" required maxlength="1000"
        placeholder="Сообщение"></textarea>
    <input type="submit" value="Отправить">
</form>
<?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username_send = $_POST['username'];
    $email_send = $_POST['email'];
    $phone_send = $_POST['phone'];
    $radio_send = $_POST['radio'];
    $send = $_POST['send'];
    $mysqli = new mysqli('localhost', 'Maxima', '12345', 'Maxima_send');
    $mysqli->query("INSERT INTO `send`(`id`, `username`, `email`, `tel`, `radio`, `send`) VALUES (NULL,'$username_send','$email_send','$phone_send','$radio_send','$send')");
}
?>

<?php get_footer(); ?>