<?php


class Footer extends ParentClass {

    protected static $db;
    protected static $db_tableName = "footer";
    protected static $db_tableFields = ['footer_text','footer_facebook','footer_instagram','footer_github'];

    public function __construct(){
        static::$db = new Database();
    }
}