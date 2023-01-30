<?php

require_once 'conect.php';


$weight = trim($_POST['weight']);
$activity = trim($_POST['activity']);
$id_user = $_SESSION['user_id'];

echo $id_user;

//проверка на заполнение полей
if( !empty($weight) && !empty($activity)){
 
    try{
        $pdo->beginTransaction();
        $sql_w ='UPDATE pets SET weight = :weight WHERE id_user = :id_user';
        $params_w = [
        
            ':id_user' => $id_user,
            ':weight' => $weight
        ];

        $stmt_w = $pdo->prepare($sql_w);
        $stmt_w->execute($params_w);


    
        $sql_a ='UPDATE pets SET activity = :activity WHERE id_user = :id_user';
        $params_a = [
        
            ':id_user' => $id_user,
            ':activity' => $activity
        ];

        $stmt_a = $pdo->prepare($sql_a);
        $stmt_a->execute($params_a);
    
        //поскольку это транзакция, запись в бд добавляется только после commit
        $pdo->commit();
        echo 'Новый питомец успешно добавлен';
        header('Location: ../profile.php');

    }catch(PDOException $e){
    
        // echo 'Во время добавления питомца произошла ошибка' . $e->getMessage();
        $_SESSION['error'] = 'Во время добавления питомца произошла ошибка';
        header('Location: ../errors.php');
    
        //отзываем все добавленные элементы
        $pdo->rollBack();
    
    }


}else{
    die('Пожалуйста, заполните все поля');
}