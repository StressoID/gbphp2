<?php
require_once('connect.php');
$id = htmlspecialchars($_GET['id']);
if (!empty($id)) {
    $zapis = "delete from blog where id= $id";
    $result = pg_query($zapis) or die('Ошибка запроса: ' . pg_last_error());
}?>
<a href="index.php">Посмотреть все записи</a>