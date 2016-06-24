<?php

require_once('../models/model.php');
$articles = getAllFromTable('blog');
$title = 'Консоль администратора';
require_once('../views/editor.php');