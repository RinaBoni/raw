<?php
    //подключение к бд
    require_once 'conect.php';

    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    if( !empty($login) && !empty($password)){
                
        //подготовленный sql запрос
        $sql = 'SELECT id, login, password FROM users WHERE login = :login';
        $params = [':login' => $login];

        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
                
        //результат запроса
        $user = $stmt->fetch(PDO::FETCH_OBJ);

        //если запрос выполнен
        if($user){
            // if( password_verify($password, $user->password) ){
            if($password === $user->password){
                $_SESSION['user_login'] = $user->login;
                $_SESSION['user_id'] = $user->id;
                // echo $_SESSION['user_id'];
                header('Location: ../profile.php');
            }else{
                $_SESSION['error'] = 'неверный пароль';
                header('Location: ../errors.php');
            }
        }else{
            $_SESSION['error'] = 'неверный логин';
            header('Location: ../errors.php');
        }

    } else{
        $_SESSION['error'] = 'заполните все поля';
        header('Location: ../errors.php');
    }    
?>