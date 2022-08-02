<?php
require_once '../config/connect.php';

$goods_id = $_POST['id'];
$comment = $_POST['comment'];


mysqli_query($connect, "INSERT INTO `comment` (`id`, `comment`, `goods_id`) VALUES (NULL, '$comment', '$goods_id')");

header('Location: /start_php/comment.php?id=' . $goods_id);