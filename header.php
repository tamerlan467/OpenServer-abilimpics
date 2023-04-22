<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maxima</title>
    <?php wp_head(); ?>
</head>

<body>
<!-- Header с логотипом поиском и менюшкой с ссылками на страницы -->
    <header style="margin-top:15px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <a href="<?php echo get_option('home') ?>"><img src="http://maxima:8080/wp-content/uploads/2023/04/400X200.gif" style="width:200px;"></a>
                </div>
                <div class="col">
                    <form class="row">
                        <input class="mr-sm-2 col-8" type="search" placeholder="Найти" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0 col" type="submit">Поиск</button>
                    </form>
                </div>
            </div>

        </div>
    </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="width:40%;">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item" style="padding:10px;">
                        <a class="nav-link active" aria-current="page"
                            href="<?php echo get_option('home') ?>">Главная</a>
                    </li>
                    <li class="nav-item" style="padding:10px;">
                        <a class="nav-link" href="http://maxima:8080/computer/">Компьютеры</a>
                    </li>

                    <li class="nav-item" style="padding:10px;">
                        <a class="nav-link" href="http://maxima:8080/po/">ПО</a>
                    </li>
                    <li class="nav-item" style="padding:10px;">
                        <a class="nav-link" href="http://maxima:8080/zakaz/">Заказ</a>
                    </li>
                    <li class="nav-item" style="padding:10px;">
                        <a class="nav-link" href="http://maxima:8080/send-me/">Напишите нам</a>
                    </li>
                    <? if ($_SESSION['auth'] == false) { ?>
                        <li class="nav-item" style="padding:10px;">
                            <a class="nav-link" href="http://maxima:8080/registrasia/">Регистрация</a>
                        </li>
                        <li class="nav-item" style="padding:10px;">
                            <a class="nav-link" href="http://maxima:8080/vhod/">Вход</a>
                        </li>
                    <? }
                    else{?>
                        <li class="nav-item" style="padding:10px;">
                            <a class="nav-link" href="http://maxima:8080/profile/">Профиль</a>
                        </li>
                    <?}
                    ?>

                </ul>
            </div>
        </div>
    </nav>