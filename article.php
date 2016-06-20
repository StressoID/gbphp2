<?php
require_once('connect.php');
$id = htmlspecialchars($_GET['id']);

if (!empty($id)) {
    $query = 'SELECT * FROM blog where id='.$id;
    $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
    echo "<table>\n";
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
}
