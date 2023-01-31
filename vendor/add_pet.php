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
    
        //':id_user' => $_SESSION['user_id'],
        'id_user' => $id_user,
        'name' => $name,
        'weight' => $weight,
        'activity' => $activity
    ];

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    // $sql = mysqli_query($stmt, 'INSERT INTO `pets`( `id_user`, `name`, `weight`, `activity`) 
    //                             VALUES 
    //                             ('{$_SESSION['user_id']}', '{$_POST['name']}', '{$_POST['weight']}', '{$_POST['activity']}')');

    
    // if ($sql) {
    //     echo '<p>Данные успешно добавлены в таблицу.</p>';
    //   } else {
    //     echo '<p>Произошла ошибка: ' ;
    //   }
    echo 'Новый питомец успешно добавлен';
    header('Location: ../profile.php');


}else{
    $_SESSION['error'] = 'Пожалуйста, заполните все поля';
    header('Location: ../errors.php');
}