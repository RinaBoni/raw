<?php //session_start(); ?>
<?php require_once 'vendor/conect.php'; ?>

<!DOCTYPE html>
<html lang = "ru">
    <head>
        <title>
            Профиль
        </title>
        <?php require_once 'parts/header.php';?>
        <link rel="stylesheet" href="css/profile-style.css"/>
        
    </head>
    <body>


        <header class="header">
            <?php require_once 'parts/head.php';?>
        </header>
        
        

        <div class="inf">
            <div class="container">
                <div class="inf_header">
                    
                    
                        <h2 class="inf_title">Добро пожаловать, <?php echo $_SESSION['user_login']; ?></h2>
                        <P>Ваш id <?php echo $_SESSION['user_id']; ?></P>
                        
                        
                        <h2 class="inf_title2">Информация о Вашей собаке</h2>
                        
                        <?php
                        

                        $sql = 'SELECT pets.id, pets.name, pets.weight, pets.activity, users.login FROM pets INNER JOIN users ON users.id=pets.id_user WHERE users.id = :id GROUP BY pets.id, pets.name, pets.weight, pets.activity, users.login;';

                        //результат sql запроса
                        $params = [':id' => $_SESSION['user_id']];

                        $stmt = $pdo->prepare($sql);
                        $stmt->execute($params);


                        //извлекаем результат при прмощи метода fetch
                        $pets=$stmt->fetch(PDO::FETCH_OBJ)
                        ?>
                            
                        
                            <div>
                                <h3>Кличка собаки </h3>
                                <p><?php echo $pets->name ?></p>
                                
                            </div>

                            <div>
                                <h3>Вес собаки </h3>
                                <p><?php echo $pets->weight ?></p>
                            </div>

                            <div>
                                <h3>Активность</h3>
                                <p><?php echo $pets->activity ?></p>
                            </div>
                            
                            <div>
                                <p></p>
                                <a class="inf_link" href="change.php">Изменить </a>

                                <a class="inf_link" href="add.php">Добавить </a>
                            </div>

                            <div>
                                <p></p>
                                <a class="inf_link" href="raw.php">Расчитать рацион</a>
                            </div>

                            <div>
                                <p></p>
                                <a class="inf_link" href="vendor/logout.php">Выход из аккаунта </a>
                                
                            </div>
                   
                </div>  <!--inf_header -->
            </div><!--container -->
        </div><!--inf -->
        <?php require_once 'vendor/print_raw.php';?>
    </body>
</html>