<?php

require_once('../models/model.php');
$articles = deleteRow($_GET['id']);
header('Location: editor.php');