<?php
session_start();
if ($_SESSION['auth'] == false) {
  echo '<script>window.location.replace("http://quadracopter2:8080/vhod/");</script>';
}

/*
 * Template Name: profile
 * Author: Tamerlan Zhargasov
 * Description: Cтраница профиля темы Квадракоптеров
 */
?>
<?php get_header(); ?>
<?
$mysqli = new mysqli('localhost', 'quadra', '12345', 'authethtion');
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM auth_registr WHERE id='$user_id'";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);
}
?>
<form id="reg3" action="" method="post" enctype=multipart/form-data>
  <div class="row_name">
    <label for="login">* Логин:</label>
    <input type="text" id="login" name="login" class="input-field" value="<?php echo $row['login']; ?>">
  </div>
  <div class="row_name">
    <label for="name">* Name:</label>
    <input type="text" id="name" name="username" class="input-field" value="<?php echo $row['username']; ?>">
  </div>
  <div class="row_name">
    <label for="avatar">* Аватарка:</label>
    <img id="avatar" src="<?php echo "http://quadracopter2:8080/".$row['avatar']."" ?>">
    <input type="file" value="Изменить аватар" name="avatar_izm">
  </div>
  <div class="row_name">
    <label for="email">* Email:</label>
    <input type="email" id="email" name="email" class="input-field" value="<?php echo $row['email']; ?>">
  </div>
  <div class="password">
<label for="password-input">* Пароль</label>
  <input type="password" id="password-input" class="input-fields" name="password" value="<?php echo $row['password']?>">
  <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>  </div>
  <input type="submit" name="submit" value="Изменить">
  <input type="submit" name="vihod" value="Выйти">
</form>
<?php get_footer(); ?>
<?php 
$mysqli = new mysqli('localhost', 'quadra', '12345', 'authethtion');
if (($_POST['submit'])) {
  $user_id = $_SESSION['user_id'];
  $newUsername = $_POST['username'];
  $newEmail = $_POST['email'];
  $newLogin = $_POST['login'];
  $newPassword = $_POST['password'];
    if ($_FILES['avatar_izm']['error'] === UPLOAD_ERR_OK) {
        $path = '03/';
        $path_file = 'wp-content/uploads/2023/' . $path .  $_FILES['avatar_izm']['name'];
        move_uploaded_file($_FILES['avatar_izm']['tmp_name'], $path_file);
        
        $mysqli = new mysqli('localhost', 'quadra', '12345', 'authethtion');
        $query = "UPDATE auth_registr SET username='$newUsername', email='$newEmail', login='$newLogin', password='$newPassword',avatar='$path_file' WHERE id='$user_id'";
        $result = mysqli_query($mysqli, $query);
        if ($result) {
    echo '<script>window.location.replace("http://quadracopter2:8080/profile/");</script>';
  }
    } else {
        // Новая аватарка не загружена, поэтому не нужно обновлять значение аватарки в базе данных.
        // Просто перезагрузите страницу.
        echo '<script>window.location.replace("http://quadracopter2:8080/profile/");</script>';
    }
    // $_SESSION['message'] = 'Ошибка с загрузкой сообщения';
}
if (isset($_POST['vihod'])) {
  $_SESSION['auth'] = false;
  unset($_SESSION['user_id']);
  echo '<script>window.location.replace("http://quadracopter2:8080/vhod/");</script>';
}

?>