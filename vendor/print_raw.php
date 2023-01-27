<?php
require_once 'conect.php';

//sql запрос
$sql = 'SELECT pets.id, pets.name, pets.weight, pets.activity, users.login FROM pets INNER JOIN users ON users.id=pets.id_user GROUP BY pets.id, pets.name, pets.weight, pets.activity, users.login;';

//результат sql запроса
$result = $pdo->query($sql);

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