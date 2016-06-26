<?php
require_once('../models/model.php');
$result = getAllFromTable('blog');

$title = 'Главная';

// Внутренний шаблон.
$content = view_include('index.php', ['result' => $result]);

// Внешний шаблон.
$page = view_include(
    'main.php',
    array('title' => $title, 'content' => $content));

echo $page;