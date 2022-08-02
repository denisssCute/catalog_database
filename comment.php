<?php
require_once 'config/connect.php';

// $title = $_POST['title'];
// $description = $_POST['description'];
// $price = $_POST['price'];
$goods_id = $_GET['id'];
$good = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id`='$goods_id'");
$good = mysqli_fetch_assoc($good);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Отзывы</title>
</head>
<body>

    <a href="/">Главная</a>

    <hr>

    <h2><?= $good['title']?></h2>
    <p><?= $good['description']?></p>
    <p><strong>Цена:</strong><?= $good['price']?></p>

    <hr>

    <h3>Добавить комментарий</h3>
    <form action="vendor/add_coment.php" method="post">
        <input type="hidden" name="id" value="<?= $good['id'] ?>"><!-- тот самый скрытый инпут  !-->
        <textarea placeholder="Комментарий" name="comment"></textarea>
        <button type="submit">Отправить</button>
    </form>

    <hr>

    <h3>Комментарии</h3>
        <ul>
            <?php
                $coments = mysqli_query($connect, "SELECT * FROM `comment` WHERE `goods_id`='$goods_id'");
                $coments = mysqli_fetch_all($coments);
                foreach ($coments as $coment) {
            ?>
                    <li><?= $coment[1]?></li>  
            <?php
                }
            ?>

        </ul>
</body>
</html>