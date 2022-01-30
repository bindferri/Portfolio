<?php


class Footer extends ParentClass {

    //Declaring variables
    protected static $db;
    protected static $db_tableName = "footer";
    protected static $db_tableFields = ['footer_text','footer_facebook','footer_instagram','footer_github','footer_createdby'];

    //Class constructor
    public function __construct(){
        static::$db = new Database();
    }

    //Creating new footer method
    public function createFooter($param,$param2,$param3,$param4,$param5){
        $createContact = self::$db->query("INSERT INTO footer (footer_text,footer_fb,footer_instagram,footer_github,footer_createdby) VALUES 
                            ('$param','$param2','$param3','$param4','$param5')");
    }

    //Updating existing footer method
    public function updateFooter($param,$param2,$param3,$param4,$id){
        $updateFooter = self::$db->query("UPDATE footer SET footer_text = '$param',footer_fb = '$param2',footer_instagram = '$param3',footer_github = '$param4' WHERE footer_id = $id");
    }

}