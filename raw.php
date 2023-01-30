<?php //session_start(); ?>
<?php require_once 'vendor/conect.php';?>

<!DOCTYPE html>
<html lang = "ru">
    <head>
        <title>
            Рацион
        </title>
        <?php require_once 'parts/header.php';?>
        <link rel="stylesheet" href="css/profile-style.css"/>
        <link rel="stylesheet" href="css/raw-style.css"/>

    </head>
    <body>
        
        <header class="header">
            <?php require_once 'parts/head.php';?>
        </header>

        
        <div class="raw">
            <div class="container">
                <div class="raw_header">
                    <?php if(isset($_SESSION['user_login'])):?>
                        
                    <?php
                        $sql = 'SELECT pets.id, pets.name, pets.weight, pets.activity, users.login 
                                FROM pets INNER JOIN users ON users.id=pets.id_user WHERE users.id = :id 
                                GROUP BY pets.id, pets.name, pets.weight, pets.activity, users.login;';

                        //результат sql запроса
                        $params = [':id' => $_SESSION['user_id']];

                        $stmt = $pdo->prepare($sql);
                        $stmt->execute($params);

                        //извлекаем результат при прмощи метода fetch
                        $pets=$stmt->fetch(PDO::FETCH_OBJ);

                        if ($pets->activity === 'low'){
                            $porsion = $pets->weight * 10;
                        } elseif ($pets->activity === 'medium'){
                            $porsion = $pets->weight * 20;
                        } elseif ($pets->activity === 'high'){
                            $porsion = $pets->weight * 30;
                        }

                        $meat = ($porsion / 100) * 80;
                        $organs = ($porsion / 100) * 5;
                        $liver = ($porsion / 100) * 5;
                        $bones = ($porsion / 100) * 10;

                    ?>
                    
                    <?php
                        $sql = 'SELECT pets.id, pets.name, pets.weight, pets.activity, users.login FROM pets INNER JOIN users ON users.id=pets.id_user WHERE users.id = :id GROUP BY pets.id, pets.name, pets.weight, pets.activity, users.login;';

                        //результат sql запроса
                        $params = [':id' => $_SESSION['user_id']];

                        $stmt = $pdo->prepare($sql);
                        $stmt->execute($params);


                        //извлекаем результат при прмощи метода fetch
                        $pets=$stmt->fetch(PDO::FETCH_OBJ)
                    ?>
                        
                        <h2 class="raw_tittle">
                            <?php echo $pets->name ?>
                        </h2>    

                        <!-- здесь будет результат -->
                        <p class="raw_subtitle">
                            Порция (в г):
                            <span class="raw_text" id="porsion">
                                <?php echo $porsion ?>
                            </span>
                        </p>

                        <p class="raw_subtitle_ing">
                            Мясо (в г): 
                            <span class="raw_text" id="meat">
                                <?php echo $meat ?>
                            </span>
                        </p>

                        <p class="raw_subtitle_ing" >
                            Органы (в г): 
                            <span class="raw_text" id="organs">
                                <?php echo $organs ?>
                            </span>
                        </p>

                        <p class="raw_subtitle_ing">
                            Печень (в г): 
                            <span class="raw_text" id="liver">
                                <?php echo $liver ?>
                            </span>
                        </p>

                        <p class="raw_subtitle_ing">
                            Кости (в г): 
                            <span class="raw_text" id="bones">
                                <?php echo $bones ?>
                            </span>
                        </p>

                    <?php else: ?>
                        <?php include_once 'parts/noauth.php'; ?>
                    <?php endif; ?>

                </div>  <!--raw_header-->
            </div>  <!--container-->  
        </div> <!--raw-->

       
    </body>
</html>



