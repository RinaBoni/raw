<?php
    
    $driver = 'mysql';
    $host = "localhost";
    $db_name = 'raw';
    $db_user = 'admin';
    $db_pass = '123';
    $charset = 'utf8';
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try{
        $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset",$db_user, $db_pass, $options);
    }catch(PDOException $e){
        die("не могу");
    }
?>