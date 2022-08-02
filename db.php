<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'testdb');

    $mysql = new mysqli (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql->connect_erno) exit ('Ошибка при подлючении к БД');
    $mysql->set_charset('utf8');
    $mysql->close(); 
?>  