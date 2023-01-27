<?php
require_once 'conect.php';

//sql запрос
$sql = 'SELECT pets.id, pets.name, pets.weight, pets.activity,  FROM pets INNER JOIN users USING (id);FROM pets';

$result = $pdo->query($sql);

while ($pets=$result->fetch(PDO::FETCH_OBJ)):
    ?>
    <div class="pet_container" id=<?php echo 'pet_'.$pets->id;?> >
        <h3 class="pet_name"><?php echo $pets->name ?></h3>
        <h4 class="pet_weight"><?php echo $pets->weight ?> </h4>
        <h4 class="pet_activity"><?php echo $pets->activity ?> </h4>
    </div>
    <hr>
<?php endwhile; ?>