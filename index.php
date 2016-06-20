<?php
require_once('connect.php');
// Выполнение SQL запроса
$query = 'SELECT * FROM blog';
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
// Вывод результатов в HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";