<?php

require_once 'conect.php';

// $pets_name = getNakedInput($_POST['name']);
// $pets_weight = getNakedInput($_POST['weight']);
// $pets_activity = getNakedInput($_POST['activity']);

$pets_name = trim($_POST['name']);
$pets_weight = trim($_POST['weight']);
$pets_activity = trim($_POST['activity']);
$pets_id_user = $_SESSION['user_id'];

//проверка на заполнение полей
if(!empty($pets_name) && !empty($pets_weight) && !empty($pets_activity)){
    // die('Пожалуйста, заполните все поля');
    try{
        $pdo->beginTransaction();
        $sql_pet = 'INSERT INTO pets( id_user, name, weight, activity) VALUES( :id_user, :name, :weight, :activity';
        $params = [
        
        ':id_user' => $pets_id_user,
        ':name' => $pets_name,
        ':weight' => $pets_weight,
        ':activity' => $pets_activity

    ];
    
        $stmt_pets = $pdo->prepare($sql_pet);
        $stmt_pets->execute($params);
    
        //поскольку это транзакция, запись в бд добавляется только после commit
        $pdo->commit();
        echo 'Новый петомец успешно добавлен';
        
    
    
    }catch(PDOException $e){
    
        echo 'Во время добавления петомца произошла ошибка' . $e->getMessage();
    
        //отзываем все добавленные элементы
        $pdo->rollBack();
    
    }
    

    // $stmt_pets = $pdo->prepare($sql_pet);
    // $stmt_pets->execute($params);

    // //поскольку это транзакция, запись в бд добавляется только после commit
    // // $pdo->commit();
    // echo 'Новый питомец успешно добавлен';
    // header('Location: ../profile.php');

}else{
    die('Пожалуйста, заполните все поля');
}

//обработка пользавательского ввода
// function getNakedInput($input){
//     return htmlentities(trim($input));
// }

//вставка в бд
try{
    $pdo->beginTransaction();
    $sql_pet = 'INSERT INTO pets( id_user, name, weight, activity) VALUES( :id_user, :name, :weight, :activity';
    $params = [
        
        ':id_user' => $_SESSION['user_id'],
        ':name' => $pets_name,
        ':weight' => $pets_weight,
        ':activity' => $pets_activity

    ];

    $stmt_pets = $pdo->prepare($sql_pet);
    $stmt_pets->execute($params);

    //поскольку это транзакция, запись в бд добавляется только после commit
    $pdo->commit();
    echo 'Новый петомец успешно добавлен';


}catch(PDOException $e){

    echo 'Во время добавления петомца произошла ошибка' . $e->getMessage();

    //отзываем все добавленные элементы
    $pdo->rollBack();

}