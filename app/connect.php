<?php
$dbconn = pg_connect("host=localhost dbname=gbphp user=stressoid password=stressoid")
or die('Could not connect: ' . pg_last_error());

require_once 'templator.php';