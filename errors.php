<?php //session_start(); ?>
<?php require_once 'vendor/conect.php'; ?>

<!DOCTYPE html>
<html lang = "ru">
    <head>
        <title>
            Ошибка
        </title>
        <?php require_once 'parts/header.php';?>
        
    </head>
    <body>
        <div class="container">
            <p class="section_title">Ошибка! <?php echo $_SESSION['error']; ?></p>
            <p> Нажмите назад чтобы вернуться на предыдущую страницу или перейдите на<a class="nav_link" href="index.php"> главную </a></p>
        </div>  <!--container-->
    </body>
</html>