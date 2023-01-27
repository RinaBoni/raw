<?php
    //побключаем бд
    require_once 'conect.php';
    

    //создаем переменные, заносим в них то что подучили из regestration.html, предворительно удалив пробелы
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password_confirm = trim($_POST['password_confirm']);

    //проверка: заполнены все поля, совпадают значения password и password_confirm
    if( !empty($login) && !empty($email) && !empty($password) && !empty($password_confirm)){
        if ($password === $password_confirm){
            
            //проверка на существование пользователя
            $sql_check = 'SELECT EXISTS(SELECT login FROM users WHERE login = :login)';
            
            $stmt_check = $pdo->prepare($sql_check);
            $stmt_check->execute([':login' => $login]);

            if($stmt_check->fetchColumn()){
                die('Пользователь с таким логином существует');
            }

            
            //хеширование пароля
            //$password = password_hash($password, PASSWORD_DEFAULT);
            
            //sql запрос
            $sql = 'INSERT INTO users(login, email, password) VALUES(:login, :email, :password)';
            $params = [':login' => $login, ':email' => $email, ':password' => $password];

            //выполнение
            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);
            
            header('Location: ы../profile.php');

        } else{
            echo 'пароль не совподает';
        }
    } else{
        echo 'заполните все поля';
    }    
?>