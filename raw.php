<?php session_start(); ?>
<?php require_once 'vendor/conect.php';?>

<!DOCTYPE html>
<html lang = "ru">
    <head>
        <title>
            Вход
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
        <?php if(isset($_SESSION['user_login'])):?>

            <!-- здесь будет результат -->
            <h2 class="inf_title">Порция (в г)</h2>
            <pclass="inf_title" id="porsion"></p>

            <p class="inf_title">Мясо (в г)</p>
            <p class="inf_title" id="meat"></p>
            <p class="inf_title" >Органы (в г)</p>
            <p class="inf_title" id="organs"></p>
            <p class="inf_title">Печень (в г)</p>
            <p class="inf_title" id="liver"></p>
            <p class="inf_title">Кости (в г)</p>
            <p class="inf_title" id="bones"></p>

            <script src="js/raw.js"></script>

        <?php else: ?>

            <?php include_once 'parts/noauth.php'; ?>

        <?php endif; ?>
        </div>  
        </div>    
        </div> 

        <p>Вес (в кг)</p>
        <!-- поле ввода первого числа -->
        <input id="weight" />

        <!-- блок с кнопками -->
        <div id="operator_btns">
            
            <button id="low" onclick="op='1'">Стерилизованная (склонная к ожирению)</button>
            <button id="medium" onclick="op='2'">Средняя активность</button>
            <button id="high" onclick="op='3'">Высокая физическая активность</button>
        </div>


        <!-- <select class="select-css" tabindex="4" name="Активность" >
            <option id="not choosen" onchange="op='0'">--Не выбрано--</option>
            <option id="low" onchange="op='1'">Стерилизованная (склонная к ожирению)</option>
            <option id="medium" onclick="op='2'">Средняя активность</option>
            <option id="high" onclick="op='3'">Высокая физическая активность</option>
        </select> -->


        <!-- поле ввода второго числа -->
        
        <br>

        <!-- кнопка для расчётов -->
        <button onclick="func()">Посчитать</button>

        <!-- здесь будет результат -->
        <p>Порция (в г)</p>
        <p id="porsion"></p>

        <p class="inf_title">Мясо (в г)</p>
            <p class="inf_title" id="meat"></p>
            <p class="inf_title" >Органы (в г)</p>
            <p class="inf_title" id="organs"></p>
            <p class="inf_title">Печень (в г)</p>
            <p class="inf_title" id="liver"></p>
            <p class="inf_title">Кости (в г)</p>
            <p class="inf_title" id="bones"></p>

    

        <script src="js/raw.js"></script>

       
    </body>
</html>



