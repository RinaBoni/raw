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
    </head>
    <body>
        
        <header class="header">
            <?php require_once 'parts/head.php';?>
        </header>

        
        <div class="inf">
        <div class="container">
        <div class="inf_header">
        <?php if(isset($_SESSION['user_login'])):?>

            
            
            
        <?php
                    

            $sql = 'SELECT pets.id, pets.name, pets.weight, pets.activity, users.login FROM pets INNER JOIN users ON users.id=pets.id_user WHERE users.id = :id GROUP BY pets.id, pets.name, pets.weight, pets.activity, users.login;';

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
        
        <?php require_once 'vendor/print_raw.php';?>
            
            
            
            <!-- здесь будет результат -->
            <h2 class="inf_title">Порция (в г)</h2>
            <pclass="inf_title" id="porsion"><?php echo $porsion ?></p>

            <p class="inf_title">Мясо (в г)</p>
            <p class="inf_title" id="meat"><?php echo $meat ?> </p>

            <p class="inf_title" >Органы (в г)</p>
            <p class="inf_title" id="organs"><?php echo $organs ?></p>

            <p class="inf_title">Печень (в г)</p>
            <p class="inf_title" id="liver"><?php echo $liver ?></p>

            <p class="inf_title">Кости (в г)</p>
            <p class="inf_title" id="bones"><?php echo $bones ?></p>

            

        <?php else: ?>

            <?php include_once 'parts/noauth.php'; ?>

        <?php endif; ?>
        </div>  
        </div>    
        </div>

       
    </body>
</html>



