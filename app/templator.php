<?php
function view_include($fileName, $vars = array())
{
    extract($vars);

    ob_start();
    include '../views/'.$fileName;
    return ob_get_clean();
}
