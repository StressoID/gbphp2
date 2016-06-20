<?php
require_once('connect.php');

$id = htmlspecialchars($_GET['id']);

if (!empty($id)) {
    $sql = "update blog set name = 'zapis_update', code='zapis_update' where id=$id";
    $result = pg_query($sql) or die('Ошибка запроса: ' . pg_last_error());
}?>
<a href="index.php">Посмотреть все записи</a>