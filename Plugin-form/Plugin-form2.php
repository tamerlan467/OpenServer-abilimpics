<?php session_start();
/*
 * Plugin Name: Plugin-form2
 * Author: Tamerlan Zhargasov
 * Description: Форма авторизации
 */
add_action('wp_head', 'check2');
function check2()
{   
    $mysqli = new mysqli('localhost', 'quadra', '12345', 'authethtion');
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $check_user = mysqli_query($mysqli, "SELECT * FROM `auth_registr` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user)) {
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user_id'] = $user['id'];
        if(!$_POST['registrate']) {
            $_SESSION['auth'] = true;
        }
        echo '
 <script>
 window.location.replace("http://quadracopter2:8080/profile/");
 </script>';
 $_SESSION['message'] = 'Вы авторизовались';
    } else {
        // $_SESSION['message'] = 'Не верный логин или пароль';
    }
}
add_shortcode('Plugin-form2', 'form');
function form()
{
    $form_vhod = '
    <form id="reg" action="" method="post">
    <input type="text" name="login" placeholder="Логин"> 
    <input type="password" name="password" placeholder="Пароль">
    <button type="submit" id="voity">Войти</button>
    <p> У вас нет аккаунта? - <a href="http://quadracopter2:8080/registr/" >зарегистрируйтесь</a></p>
    </form>
    ';
    echo $form_vhod;
}
