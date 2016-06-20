<?php
require_once('connect.php');

$zapis = "insert into blog (name,code) values ('zapis_insert_1', 'code_zapis_insert_1')";
$result = pg_query($zapis) or die('Ошибка запроса: ' . pg_last_error());?>
<a href="index.php">Посмотреть все записи</a>
