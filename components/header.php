<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Интернет-магазин товаров для дома</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
<header class="site-header">
    <nav class="site-navigation">
        <a class="logo-link" href="index.php">
            <img src="img/logo-full.svg" width="62" height="17" alt="Логотип магазина gloevk">
        </a>
        <ul class="navigation-list">
            <li><a href="index.php?page=catalog">Каталог</a></li>
            <?php if ($_SESSION['is_admin']) { ?>
                <li><a href="index.php?page=productform">Добавить товар</a></li>
            <?php } ?>
            <li><a href="delivery.html">Доставка</a></li>
            <li><a href="contacts.html">Контакты</a></li>
            <li><a href="blog.html">Блог</a></li>
            <?php
            if ($_SESSION['login']) {
                echo ('<li><a href="index.php?logout=1"> Выйти <p class="me"> <img src="img/user.png" height="20" alt="user pic"> ('.$_SESSION['login'].')
                          
                                                               </p></a></li>');


            }
            else {
                echo (' <li><a href="index.php?page=login">Войти</a></li>');


            }
            ?>
        </ul>
    </nav>
</header>