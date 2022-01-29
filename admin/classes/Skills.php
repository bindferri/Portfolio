<?php


class Skills extends ParentClass {

    protected static $db;
    protected static $db_tableName = "skills";
    protected static $db_tableFields = ['skills_image','skills_name'];

    public function __construct(){
        static::$db = new Database();
    }

}