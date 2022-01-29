<?php


class Footer extends ParentClass {

    protected static $db;
    protected static $db_tableName = "footer";
    protected static $db_tableFields = ['footer_text','footer_facebook','footer_instagram','footer_github'];

    public function __construct(){
        static::$db = new Database();
    }

    public function createFooter($param,$param2,$param3,$param4){
        $createContact = self::$db->query("INSERT INTO footer (footer_text,footer_fb,footer_instagram,footer_github) VALUES 
                            ('$param','$param2','$param3','$param4')");
    }


}