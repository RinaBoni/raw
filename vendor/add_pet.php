<?php

require_once 'conect.php';

$name = trim($_POST['name']);
$weight = trim($_POST['weight']);
$activity = trim($_POST['activity']);
$id_user = $_SESSION['user_id'];

echo $id_user;

//проверка на заполнение полей
if(!empty($name) && !empty($weight) && !empty($activity)){
 
    
        $sql = 'INSERT INTO `pets`( `id_user`, `name`, `weight`, `activity`) VALUES(:id_user, :name, :weight, :activity';
        $params = [
        
            ':id_user' => $id_user,
            ':name' => $name,
            ':weight' => $weight,
            ':activity' => $activity
        ];

        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    
        //поскольку это транзакция, запись в бд добавляется только после commit
        
        echo 'Новый питомец успешно добавлен';
        header('Location: ../profile.php');


}else{
    die('Пожалуйста, заполните все поля');
}