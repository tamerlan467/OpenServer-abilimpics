<?php session_start();
/*
 * Plugin Name: Plugin-form
 * Author: Tamerlan Zhargasov
 * Description: Форма регистрации
 */
add_action('wp_head', 'check');

function check()
{
    $username = $_POST['username'];
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    if ((isset($_POST['password']) && isset($_POST['confirm'])) && ($_POST['password'] == $_POST['confirm'])) {
        $path = '03/';
        $path_file = 'wp-content/uploads/2023/' . $path . time() . $_FILES['avatar']['name'];
      $_SESSION['message'] = 'Регистрация прошла успешно';
        $mysqli = new mysqli('localhost', 'quadra', '12345', 'authethtion');
        mysqli_query($mysqli, "INSERT INTO `auth_registr` (`id`, `username`, `login`, `email`, `password`, `avatar`) VALUES (NULL,'$username','$login','$email','$password','$path_file')");
         echo '
        <script>
        window.location.replace("http://quadracopter2:8080/vhod/");
        </script>';
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $path_file)) {
             $_SESSION['message'] = 'Ошибка с загрузкой сообщения';
        }
    } 
    else {
        if ((isset($_POST['password']) && isset($_POST['confirm'])) && ($_POST['password'] != $_POST['confirm'])){
            $_SESSION['message'] = 'Рома';
            echo '
            <script>
            window.location.replace("http://quadracopter2:8080/registr/");
            </script>';
        }
        
    }
}

add_shortcode('Plugin-form', 'reg');
function reg()
{
    $form_reg = '
    <form id="reg" action="" method="post" enctype=multipart/form-data>
<input type="text" name="username" placeholder="Имя пользователя">
<input type="text" name="login" placeholder="Логин">
<input type="email" name="email" placeholder="Email">
<label for="avatar">Изображение для профиля</label>
<input type="file" name="avatar" id="avatar">
<input type="password" name="password" placeholder="Пароль">
<input type="password" name="confirm" placeholder="Подтверждение пароля">
<input type="submit" id="voity" value="Войти">
<input type="hidden" name="registrate" value="true">
<p>
   У вас уже есть аккаунт? - <a href="http://quadracopter2:8080/vhod/" >авторизуйтесь</a>!
    </form>
    ';
    echo $form_reg;
}
?>
