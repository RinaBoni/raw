<?php
require_once 'conect.php';

//sql запрос
// $sql = 'SELECT pets.id, pets.name, pets.weight, pets.activity, users.login FROM pets INNER JOIN users ON users.id=pets.id_user GROUP BY pets.id, pets.name, pets.weight, pets.activity, users.login;';
$sql = 'SELECT pets.id, pets.name, pets.weight, pets.activity, users.login FROM pets INNER JOIN users ON users.id=pets.id_user WHERE user.id = :user_id GROUP BY pets.id, pets.name, pets.weight, pets.activity, users.login;';

//результат sql запроса
$params = [':user_id' => $_SESSION['user_id']];

$stmt = $pdo->prepare($sql);
$stmt->execute($params);


//извлекаем результат при прмощи метода fetch
while ($pets=$result->fetch(PDO::FETCH_OBJ)):
    ?>
    <div class="pet_container" id=<?php echo 'pet_'.$pets->id;?> >
        <h3 class="user_login"><?php echo $pets->login ?></h3>    
        <h3 class="pet_name"><?php echo $pets->name ?></h3>
        <h4 class="pet_weight"><?php echo $pets->weight ?> </h4>
        <h4 class="pet_activity"><?php echo $pets->activity ?> </h4>
    </div>
    <hr>
<?php endwhile; ?>

<?php
    // $sql1 = 'SELECT id, login, password FROM users ';


    // $stmt = $pdo->query($sql);
    // // $stmt->execute($params);
            
    // //результат запроса
    
    // while ($user = $stmt->fetch(PDO::FETCH_OBJ)):
        ?>
       
            <!-- <h3 class="user_login"><?php echo $user->id; ?></h3> 
            <h3 class="user_login">id пользователей</h3>      
            -->
       
    <?php //endwhile; ?>
  