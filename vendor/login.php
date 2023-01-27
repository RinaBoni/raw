<?php
    require_once 'conect.php';

    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    if( !empty($login) && !empty($password)){
                
        $sql = 'SELECT login, password FROM users WHERE login = :login';
        $params = [':login' => $login];

        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
                
        $user = $stmt->fetch(PDO::FETCH_OBJ);

        if($user){
            if(password_verify($password, $user->password)){
                $_SESSION['user_login'] = $user->login;
                header('../profile.php');
            }else{
                echo 'неверный пароль';
            }
        }else{
            echo 'неверный пароль';
        }

    } else{
        echo 'заполните все поля';
    }    
?>