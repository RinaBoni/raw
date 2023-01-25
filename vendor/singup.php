<?php
    require_once 'conect.php';
    

    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password_confirm = trim($_POST['password_confirm']);

    if( !empty($login) && !empty($email) && !empty($password) && !empty($password_confirm)){
        if ($password === $password_confirm){
            
            $password = password_hash($password, PASSWORD_DEFAULT);
            
            $sql = 'INSERT INTO users(login, email, password) VALUES(:login, :email, :password)';
            $params = [':login' => $login, ':email' => $email, ':password' => $password];

            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);
            
            echo 'молодец';

        } else{
            echo 'пароль не совподает';
        }
    } else{
        echo 'заполните все поля';
    }    
?>