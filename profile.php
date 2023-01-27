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
                    <?php require_once 'vendor/print_raw.php';?>
                    <form action="#" method="get" enctype="multipart/form-data">
                    
                        <h2 class="inf_title">Информация о Вас</h2>
                            <div>
                                <p>Ваше имя </p>
                                <input  class="inf_input" placeholder="Имя" tabindex="1" type="text" name="username" value="">
                            </div>
                        
                        <h2 class="inf_title">Информация о Вашей собаке</h2>
                        <?php require_once 'vendor/print_raw.php';?>
                            <div>
                                <p>Кличка собаки </p>
                                <input class="inf_input" placeholder="Кличка" tabindex="2" type="text" name="dogname" value="">
                            </div>

                            <div>
                                <p>Вес собаки </p>
                                <input  class="inf_input" placeholder="Вес" tabindex="3" type="tel" name="dogweight" value="">
                            </div>

                            <div>
                                <p>Активность</p>
                                <select class="select-css" tabindex="4" name="Активность" >
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

                            <div>
                                <p></p>
                                <a class="inf_link" href="#">Расчитать рацион</a>
                            </div>

                            <div>
                                <p></p>
                                <a class="inf_link" href="vendor/logout.php">Выход из аккаунта </a>
                            </div>
                    </form>
                </div>  <!--inf_header -->
            </div><!--container -->
        </div><!--inf -->
    </body>
</html>