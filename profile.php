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
                <?php if(isset($_SESSION['user_login'])):?>
                    
                        <h2 class="inf_title">Добро пожаловать, <?php echo $_SESSION['user_login']; ?></h2>
                            <P class="inf_text">Ваш id: <?php echo $_SESSION['user_id']; ?></P>
                        
                        
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
                        <?php 
                            if (empty($pets->name) ):                            
                        ?>
                        <div>
                            <p></p>
                            <a class="inf_link" href="add.php">Добавить </a>
                        </div>

                        <?php else:
                        ?>
                        <div>
                                <p class="inf_h3">
                                    Имя: 
                                    <span class="inf_text">
                                        <?php echo $pets->name ?>
                                    </span>
                                </p>
                            </div>

                            <div>
                                <p class="inf_h3">
                                    Вес: 
                                    <span class="inf_text">
                                        <?php echo $pets->weight ?>
                                    </span>
                                </p>
                            </div>

                            <div>
                                <p class="inf_h3">
                                    Активность: 
                                    <span class="inf_text">
                                        <?php 
                                            if ($pets->activity === 'low'){
                                                echo 'Низкая активность';
                                            } elseif ($pets->activity === 'medium'){
                                                echo 'Средняя активность';
                                            } elseif ($pets->activity === 'high'){
                                                echo 'Высокая активность';
                                            }
                                        ?>
                                    </span>
                                </p>    
                            </div>
                            
                            <div>
                                <p></p>
                                <a class="inf_link" href="change.php">Изменить </a>
                            </div>

                        <div>
                            <a class="inf_link_porsion" href="raw.php">Расчитать рацион</a>
                        </div>
                        <?php endif;?>
                            

                        <div class="footer">
                            <div class="container">
                                <div class="footer_inner">
                                    <div></div>
                                    <a class="inf_link_logout" href="vendor/logout.php">Выход из аккаунта </a>
                                </div><!--footer_inner-->
                            </div><!--container-->
                        </div><!--footer-->
                        <?php else: ?>
                        <?php include_once 'parts/noauth.php'; ?>
                    <?php endif; ?>
                   
                </div>  <!--inf_header -->
            </div><!--container -->
        </div><!--inf -->
    </body>
</html>