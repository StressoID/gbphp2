<?php
require_once('../app/connect.php');

function getAllFromTable($tableName) {
    $query = 'SELECT blog.id, blog.name, blog.text FROM '.$tableName;
    $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
    return $result;
}

function getOneRow($id) {
    $id = pg_escape_string($id);
    $sql = "select blog.id, blog.name, blog.text from blog where id=$id";
    $result = pg_query($sql) or die('Ошибка запроса: ' . pg_last_error());
    return pg_fetch_array($result, NULL, PGSQL_ASSOC);
}

function updateRow($fields, $id) {
    $fields = prepareFields($fields);
    $sql = '';
    foreach ($fields as $key => $field) {
        $sql .= ' '.$key." = '".$field."'," ;
    }
    $sql = substr($sql, 0, -1);
    $sql = "update blog set $sql where id = $id";
    return $result = pg_query($sql) or die('Ошибка запроса: ' . pg_last_error());
}

function addRow($fields) {
    $fields = prepareFields($fields);
    $keys = [];
    $values = [];
    foreach ($fields as $key => $field) {
        $keys[] = $key;
        $values[] = $field;
    }
    $sql = 'insert into blog ('.implode(',',$keys).') values (\''.implode("','",$values).'\')';
    return $result = pg_query($sql) or die('Ошибка запроса: ' . pg_last_error());

}

function prepareFields($fields) {
    foreach ($fields as $key => $field) {
        if (strpos($key, 'submit') !== false) continue;
        $readyFields[$key] = trim(pg_escape_string($field));
    }
    return $readyFields;
}

function deleteRow($id) {
    $id = pg_escape_string($id);
    $sql = 'delete from blog where id='.$id;
    return $result = pg_query($sql) or die('Ошибка запроса: ' . pg_last_error());
}