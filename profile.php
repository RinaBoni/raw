<?php session_start(); ?>

<!DOCTYPE html>
<html lang = "ru">
    <head>
        <title>
            Профиль
        </title>
        <?php require_once 'parts/header.php';?>
        <link rel="stylesheet" href="css/profile-style.css"/>
        
    </head>
    <body>


        <header class="header">
            <?php require_once 'parts/head.php';?>
        </header>
        
        

        <div class="inf">
            <div class="container">
                <div class="inf_header">
                    
                    
                        <h2 class="inf_title">Добро пожаловать, <?php echo $_SESSION['user_login']; ?></h2>
                            <div>
                                <p>Ваше имя </p>
                                <input  class="inf_input" placeholder="Имя" tabindex="1" type="text" name="username" value="">
                            </div>
                        
                        <h2 class="inf_title">Информация о Вашей собаке</h2>
                        
                        
                            <div>
                                <p>Кличка собаки </p>
                                <p><?php require_once 'vendor/print_raw.php';?></p>
                                
                            </div>

                            <div>
                                <p>Вес собаки </p>
                                <p></p>
                            </div>

                            <div>
                                <p>Активность</p>
                                <p></p>
                            </div>
                            
                            <div>
                                <p></p>
                                <button class="inf_butt" tabindex="11" type="submit">Сохранить</button>
                            </div>

                            <div>
                                <p></p>
                                <a class="inf_link" href="raw.php">Расчитать рацион</a>
                            </div>

                            <div>
                                <p></p>
                                <a class="inf_link" href="vendor/logout.php">Выход из аккаунта </a>
                                <a class="inf_link" href="add.php">Добавить </a>
                            </div>
                    </form>
                </div>  <!--inf_header -->
            </div><!--container -->
        </div><!--inf -->
        <?php require_once 'vendor/print_raw.php';?>
    </body>
</html>