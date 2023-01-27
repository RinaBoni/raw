<?php
require_once 'conect.php';

$pets_name = getNakedInput($_POST['newPet_name']);
$pets_weight = getNakedInput($_POST['newPet_weight']);
$pets_activity = getNakedInput($_POST['newPet_activity']);

//проверка на заполнение полей
if(empty($pets_name) || empty($pets_weight) || empty($pets_activity)){
    die('Пожалуйста, заполните все поля');
}

//обработка пользавательского ввода
function getNakedInput($input){
    return htmlentities(trim($input));
}

//вставка в бд
try{
    $pdo->beginTransaction();
    $sql_pet = 'INSERT INTO pets( name, weight, activity) VALUES( :name, :weight, :activity';
    $params = [
        
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