<?php
require_once '../config/connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, "INSERT INTO `goods` (`id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')");

header('Location: ../index.php'); //фигня, которая сразу позволяет после отправки формы вернуться на ту же страницу
                            //(и, как я понял, ещё и перерендерить её, так что добавленный контент появится)