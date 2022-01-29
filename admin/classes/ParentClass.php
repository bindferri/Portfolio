<?php


class ParentClass{

    public function fetchAll(){
        static::$db->query("SELECT * FROM ".static::$db_tableName);
        return static::$db->fetchAll();
    }

    public function countItems(){
        $count = static::$db->query("SELECT * FROM ".static::$db_tableName);
        return mysqli_num_rows($count);
    }

}