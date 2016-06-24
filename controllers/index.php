<?php
require_once('../models/model.php');
$result = getAllFromTable('blog');
$title = 'Главная';
require_once('../views/index.php');