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

    public function deleteItem($id){
        static::$db->query("DELETE FROM ".static::$db_tableName." WHERE ".static::$db_tableName."_id = $id");
    }

    public function selectById($id){
        static::$db->query("SELECT * FROM ".static::$db_tableName." WHERE ".static::$db_tableName."_id = $id");
        return static::$db->fetchSingle();
    }

}