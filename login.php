<!DOCTYPE html>
<html lang = "ru">
    <head>
        <title>
            Вход
        </title>
        <?php require_once 'parts/header.php';?>
        <link rel="stylesheet" href="css/login-style.css"/>
    </head>
    <body>
        
        <header class="header">
        <?php require_once 'parts/head.php';?>
        </header>

        
        
        <form class="box" action="vendor/login.php" method="post">
            <h1 class="box_title">Войти</h1>
            
            <input class="box_input" type="text" name="login" placeholder="Логин">
            <input class="box_input" type="password" name="password" placeholder="Пароль">
            <input class="box_button" type="submit" name="enter" value="Войти">
            
            <a class="box_link" href="registration.php">Зарегистрироваться</a>
        </form>
       
    </body>
</html>