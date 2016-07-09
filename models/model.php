<?php

class Model extends PDO {

    private static $instance;

    public static function getInstance() {
        if (self::$instance == null)
            self::$instance = new Model("pgsql:host=localhost;dbname=gbphp;", 'postgres', 'postgres');

        return self::$instance;
    }

    public function getAllFromTable($tableName) {
        return self::$instance->query('SELECT * FROM '.$tableName);
    }

    public function getAllFromTableByFID($tableName, $id) {
        $filter = key($id).' in ('.implode(',',$id).')';
        return self::$instance->query('SELECT * FROM '.$tableName.' where '.$filter);
    }

    public function getOneRow($id) {
        $stmt = self::$instance->prepare('select blog.id, blog.name, blog.text from blog where id= :blog_id');
        $stmt->execute(array('blog_id' => $id));
        return $stmt->fetch(PDO::FETCH_LAZY);
   }

    public function updateRow($fields, $id) {
        $fields = $this->prepareFields($fields);
        $sql = '';
        foreach ($fields as $key => $field) {
            $sql .= ' '.$key." = '".$field."'," ;
        }
        $sql = substr($sql, 0, -1);
        $sql = "update blog set $sql where id = :id";
        $stmt = self::$instance->prepare($sql);
        $stmt->execute(array('id' => $id));
    }

    public function addRow($fields, $tableName) {
        $fields = $this->prepareFields($fields);
        $keys = [];
        $values = [];
        foreach ($fields as $key => $field) {
            $keys[] = $key;
            $values[] = $field;
        }
        $sql = 'insert into '.$tableName.' ('.implode(',',$keys).') values (\''.implode("','",$values).'\')';
        self::$instance->exec($sql);

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
        $sql = 'delete from comments where blog_id = :id';
        $stmt = self::$instance->prepare($sql);
        $stmt->execute(array('id' => $id));
        $sql = 'delete from blog where id= :id';
        $stmt = self::$instance->prepare($sql);
        $stmt->execute(array('id' => $id));
    }
}