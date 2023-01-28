<?php
    require_once 'conect.php';

    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    if( !empty($login) && !empty($password)){
                
        //подготовленный sql запрос
        $sql = 'SELECT login, password FROM users WHERE login = :login';
        $params = [':login' => $login];

        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
                
        //результат запроса
        $user = $stmt->fetch(PDO::FETCH_OBJ);

        //если запрос выполнен
        if($user){
            if($password === $user->password){
                $_SESSION['user_login'] = $user->login;
                header('Location: ../profile.php');
            }else{
                echo 'неверный пароль';
            }
        }else{
            echo 'запрос не выполнен';
        }

    } else{
        echo 'заполните все поля';
    }    
?>