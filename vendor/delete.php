<?php
require_once '../config/connect.php';
$id = $_GET['id'];


mysqli_query($connect, "DELETE FROM goods WHERE `goods`.`id` = '$id'");
mysqli_query($connect, "DELETE FROM comment WHERE `comment`.`goods_id` = '$id'");
header('Location: ../index.php');