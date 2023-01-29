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
                <h2 class="inf_title">Информация о Вашей собаке</h2>    
                <form action="vendor/change_pet.php" method="post"  name="newPet">

                    <div>
                        <p>Вес собаки </p>
                        <input  class="inf_input" placeholder="Вес" tabindex="3" type="tel" name="weight" value="">
                    </div>

                    <div>
                        <p>Активность</p>
                        <select class="select-css" tabindex="4" name="activity">
                            <option value="not choosen">--Не выбрано--</option>
                            <option value="low">Стерилизованная (склонная к ожирению)</option>
                            <option value="medium">Средняя активность</option>
                            <option value="high">Высокая физическая активность</option>
                        </select>
                    </div>
                                
                    <div>
                        <p></p>
                        <button class="inf_butt" tabindex="11" type="submit">Сохранить</button>
                    </div>
                           
                </form>
                
            </div><!--container -->
        </div><!--inf -->
    </body>
</html>