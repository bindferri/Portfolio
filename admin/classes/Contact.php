<?php


class Contact extends ParentClass {

    //Declaring variables
    protected static $db;
    protected static $db_tableName = "contact";
    protected static $db_tableFields = ['contact_text','contact_name','contact_address','contact_email'];

    //Class constructor
    public function __construct(){
        static::$db = new Database();
    }

    //Creating new contact method
    public function createContact($param,$param2,$param3,$param4){
            $createContact = self::$db->query("INSERT INTO contact (contact_text,contact_name,contact_address,contact_email) VALUES 
                            ('$param','$param2','$param3','$param4')");
    }

    //Updating existing contact method
    public function updateContact($param,$param2,$param3,$param4,$id){
        $updateContact = self::$db->query("UPDATE contact SET contact_text = '$param',contact_name = '$param2',contact_address = '$param3',contact_email = '$param4' WHERE contact_id = '$id'");
    }
}