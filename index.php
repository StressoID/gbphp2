<?php

ini_set('error_reporting', E_ERROR);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

function __autoload($classname){
    include_once("controllers/$classname.php");
}

$action = 'action';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'Index';

(new C_Page())->Request($action);
