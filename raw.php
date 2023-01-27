<?php require_once 'vendor/conect.php';?>

<!DOCTYPE html>
<html lang = "ru">
    <head>
        <title>
            Вход
        </title>
        <?php require_once 'parts/header.php';?>
    </head>
    <body>
        
        <header class="header">
            <?php require_once 'parts/head.php';?>
        </header>

        
        <?php if(isset($_SESSION['user_login'])):?>

            <!-- здесь будет результат -->
            <p>Порция (в г)</p>
            <p id="porsion"></p>

            <p>Мясо (в г)</p>
            <p id="meat"></p>
            <p>Органы (в г)</p>
            <p id="organs"></p>
            <p>Печень (в г)</p>
            <p id="liver"></p>
            <p>Кости (в г)</p>
            <p id="bones"></p>

            <script src="js/raw.js"></script>

        <?php else: ?>

            <?php include_once 'parts/noauth.php'; ?>

        <?php endif; ?>


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

        <p>Мясо (в г)</p>
        <p id="meat"></p>
        <p>Органы (в г)</p>
        <p id="organs"></p>
        <p>Печень (в г)</p>
        <p id="liver"></p>
        <p>Кости (в г)</p>
        <p id="bones"></p>

    

        <script src="js/raw.js"></script>

       
    </body>
</html>



