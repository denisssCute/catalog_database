<?php
    $connect = mysqli_connect('localhost', 'root', '', 'testdb');
    if (!$connect) {
        die ('Ошибка подключени к БД!');
    }
?>