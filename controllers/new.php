<?require_once '../models/model.php';

if (isset($_POST['submitAdd'])) {
    addRow($_POST);
}
$title = 'Добавление новой статьи';
ob_start();
// Внутренний шаблон.
$content = view_include('new.php');

// Внешний шаблон.
$page = view_include(
    'main.php',
    array('title' => $title, 'content' => $content));
ob_end_flush();

echo $page;
