<?php
require_once('../models/model.php');
$result = getAllFromTable('blog');

$title = 'Главная';

ob_start();
// Внутренний шаблон.
$content = view_include('index.php', ['result' => $result]);

// Внешний шаблон.
$page = view_include(
    'main.php',
    array('title' => $title, 'content' => $content));
ob_end_flush();

echo $page;