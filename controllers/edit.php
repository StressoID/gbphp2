<?php
require_once('../models/model.php');

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    if (isset($_POST['submitArticle'])) {
        updateRow($_POST, $id);
    }
    if (!empty($id)) {
        $article = getOneRow($id);
    }
}
$title = 'Редактирование статьи';

require_once '../views/edit.php';
