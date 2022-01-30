<?php


class ParentClass{

    //fetching all data method
    public function fetchAll(){
        static::$db->query("SELECT * FROM ".static::$db_tableName);
        return static::$db->fetchAll();
    }

    //fetching all data method
    public function fetchAllByUser($id){
        static::$db->query("SELECT * FROM ".static::$db_tableName." WHERE ".static::$db_tableName."_createdby = '$id'");
        return static::$db->fetchAll();
    }

    //fetching all data method
    public function fetchSingle($id){
        static::$db->query("SELECT * FROM ".static::$db_tableName." WHERE ".static::$db_tableName."_id = '$id'");
        return static::$db->fetchSingle();
    }
    public function fetchSingleByUsername($username){
        static::$db->query("SELECT * FROM ".static::$db_tableName." WHERE ".static::$db_tableName."_username = '$username'");
        return static::$db->fetchSingle();
    }

    //Counting data method
    public function countItems(){
        $count = static::$db->query("SELECT * FROM ".static::$db_tableName);
        return mysqli_num_rows($count);
    }

    //Delete data method
    public function deleteItem($id){
        static::$db->query("DELETE FROM ".static::$db_tableName." WHERE ".static::$db_tableName."_id = $id");
    }

    //Fetch specific data method
    public function selectById($id){
        static::$db->query("SELECT * FROM ".static::$db_tableName." WHERE ".static::$db_tableName."_id = $id");
        return static::$db->fetchSingle();
    }


}