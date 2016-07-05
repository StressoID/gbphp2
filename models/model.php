<?php

class Model {

    public function __construct()
    {
        $dbconn = pg_connect("host=localhost dbname=gbphp user=postgres password=postgres")
        or die('Could not connect: ' . pg_last_error());
    }

    public function getAllFromTable($tableName) {
        $query = 'SELECT blog.id, blog.name, blog.text FROM '.$tableName;
        $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
        return $result;
    }

    public function getOneRow($id) {
        $id = pg_escape_string($id);
        $sql = "select blog.id, blog.name, blog.text from blog where id=$id";
        $result = pg_query($sql) or die('Ошибка запроса: ' . pg_last_error());
        return pg_fetch_array($result, NULL, PGSQL_ASSOC);
    }

    public function updateRow($fields, $id) {
        $fields = $this->prepareFields($fields);
        $sql = '';
        foreach ($fields as $key => $field) {
            $sql .= ' '.$key." = '".$field."'," ;
        }
        $sql = substr($sql, 0, -1);
        $sql = "update blog set $sql where id = $id";
        return $result = pg_query($sql) or die('Ошибка запроса: ' . pg_last_error());
    }

    public function addRow($fields) {
        $fields = $this->prepareFields($fields);
        $keys = [];
        $values = [];
        foreach ($fields as $key => $field) {
            $keys[] = $key;
            $values[] = $field;
        }
        $sql = 'insert into blog ('.implode(',',$keys).') values (\''.implode("','",$values).'\')';
        return $result = pg_query($sql) or die('Ошибка запроса: ' . pg_last_error());

    }

    public function prepareFields($fields) {
        foreach ($fields as $key => $field) {
            if (strpos($key, 'submit') !== false) continue;
            $readyFields[$key] = trim(pg_escape_string($field));
        }
        return $readyFields;
    }

    public function deleteRow($id) {
        $id = pg_escape_string($id);
        $sql = 'delete from blog where id='.$id;
        return $result = pg_query($sql) or die('Ошибка запроса: ' . pg_last_error());
    }

}