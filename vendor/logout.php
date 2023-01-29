<?php
require_once 'conect.php';

//очищаем сессию
$_SESSION = [];


//удаляем куки
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time()-3600, '/');
}

//уничтажание хранилище сессии
session_destroy();

//делвем редерект на вход на сайт
header('Location: ../login.php');