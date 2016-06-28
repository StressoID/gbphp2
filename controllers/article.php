<?
require_once('../models/model.php');

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    if (!empty($id)) {
        $article = getOneRow($id);
    }
}
$title = 'Детальная страница статьи';

ob_start();
// Внутренний шаблон.
$content = view_include('article.php', ['article' => $article]);

// Внешний шаблон.
$page = view_include(
    'main.php',
    array('title' => $title, 'content' => $content));
ob_end_flush();

echo $page;