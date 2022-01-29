<?php


class Contact extends ParentClass {

    protected static $db;
    protected static $db_tableName = "contact";
    protected static $db_tableFields = ['contact_text','contact_name','contact_address','contact_email'];

    public function __construct(){
        static::$db = new Database();
    }
}