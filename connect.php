<?php
// Соединение, выбор базы данных
$dbconn = pg_connect("host=localhost dbname=gbphp user=postgres password=postgres")
or die('Could not connect: ' . pg_last_error());