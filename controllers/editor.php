<?php
require_once('../models/model.php');
$articles = getAllFromTable('blog');
$title = 'Консоль администратора';

ob_start();
// Внутренний шаблон.
$content = view_include('editor.php', ['articles' => $articles]);

// Внешний шаблон.
$page = view_include(
    'main.php',
    array('title' => $title, 'content' => $content));
ob_end_flush();

echo $page;