<?
require_once('../models/model.php');

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    if (!empty($id)) {
        $article = getOneRow($id);
    }
}
$title = 'Детальная страница статьи';

require_once '../views/article.php';
?>