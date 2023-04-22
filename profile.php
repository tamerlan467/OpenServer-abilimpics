<?php session_start();
if ($_SESSION['auth'] == false) {
    echo '<script>window.location.replace("http://maxima:8080/vhod/");</script>';
}
/**
 * Template Name: Profile
 * Author: Tamerlan Zhargasov
 * Description: Cтраница профиля темы Maxima
 */
?>
<!-- Подключаем header и footer  -->
<?php get_header(); ?>
<!-- Профиль сайта который может изменять данные и выйти  также у профиля есть в админки с функцией удаление аккаунта-->
<?
$mysqli = new mysqli('localhost', 'Maxima', '12345', 'maxima_auth_register');
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM auth_register WHERE id='$user_id'";
$result = mysqli_query($mysqli, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<form id="form_profile" action="" method="post" enctype="multipart/form-data">
    <div class="item">
        <img src="<?php echo "http://maxima:8080/" . $row['avatar'] . "" ?>">
        <div class="item-avatar">
            <label for="avatar_profile">Обновить аватарку</label>
            <input type="file" name="avatar_profile" id="avatar_profile">
        </div>
    </div>
    <div class="item">
        <label for="username_profile">Имя пользователя</label>
        <input type="text" value="<?php echo $row['username'] ?>" name="username_profile" id="username_profile" minlength="3" maxlength="1000">
    </div>
    <div class="item">
        <label for="login_profile">Логин</label>
        <input type="text" value="<?php echo $row['login'] ?>" name="login_profile" id="login_profile" minlength="3" maxlength="1000">
    </div>
    <div class="item">
        <label for="email_profile">Почта</label>
        <input type="email" value="<?php echo $row['email'] ?>" name="email_profile" id="email_profile" minlength="3" maxlength="1000">
    </div>
    <div class="item-password">
        <label for="password_input">Пароль</label>
        <input type="password" value="<?php echo $row['password'] ?>" name="password_profile" id="password_input" minlength="3" maxlength="1000">
        <input type="checkbox" name="" id="" onclick="Password_hidden()">
    </div>
    <div class="item-btn">
        <input type="submit" name="edit_btn" value="Изменить" id="edit_btn">
        <input type="submit" name="exit_btn" value="Выйти" id="exit_btn">
    </div>

</form>
<?
if (isset($_POST['edit_btn'])) {
    $user_id = $_SESSION['user_id'];
    $username_profile = $_POST['username_profile'];
    $login_profile = $_POST['login_profile'];
    $email_profile = $_POST['email_profile'];
    $password_profile = $_POST['password_profile'];
    if ($_FILES['avatar_profile']['error'] === UPLOAD_ERR_OK) {
        $path = 'avatar/';
        $path_profile = 'wp-content/' . $path . time() . $_FILES['avatar_profile']['name'];
        move_uploaded_file($_FILES['avatar_profile']['tmp_name'], $path_profile);
        $mysqli = new mysqli('localhost', 'Maxima', '12345', 'maxima_auth_register');
        $query = ("UPDATE auth_register SET `username`='$username_profile',`login`='$login_profile',`email`='$email_profile',`password`='$password_profile',`avatar`='$path_profile' WHERE `id`='$user_id' ");
        $result = mysqli_query($mysqli, $query);
        if ($result) {
            echo '<script>window.location.replace("http://maxima:8080/profile/");</script>';
        }
    } else {
        $query = ("UPDATE auth_register SET `username`='$username_profile',`login`='$login_profile',`email`='$email_profile',`password`='$password_profile' WHERE `id`='$user_id' ");
        $result = mysqli_query($mysqli, $query);
        echo '<script>window.location.replace("http://maxima:8080/profile/");</script>';
    }
}
if (isset($_POST['exit_btn'])) {
    $_SESSION['auth'] = false;
    unset($_SESSION['user_id']);
    echo '<script>window.location.replace("http://maxima:8080/vhod/");</script>';
}
?>
<?php get_footer(); ?>