<?php
    $connect_coment = mysqli_connect('localhost', 'root', '', 'testdb');
    if (!$connect_coment) {
        die ('Ошибка подключени к БД!');
    }
?>