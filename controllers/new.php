<?require_once '../models/model.php';

if (isset($_POST['submitAdd'])) {
    addRow($_POST);
}
$title = 'Добавление новой статьи';

require_once '../views/new.php';?>
