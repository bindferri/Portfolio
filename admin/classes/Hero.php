<?php


class Hero extends ParentClass {

    //Declaring variables
    protected static $db;
    protected static $db_tableName = "hero";
    protected static $db_tableFields = ['hero_text','hero_button_text','hero_cv','hero_photo','hero_createdby'];
    public $id;
    public $heroText;
    public $hero_buttonText;
    public $heroCV;
    public $heroPhoto;

    //Class constructor
    public function __construct(){
        static::$db = new Database();
    }

    //Creating new hero method
    public function createHero($param,$param2,$param3,$param4,$param5){
        $createHero = self::$db->query("INSERT INTO hero (hero_text,hero_button_text,hero_cv,hero_photo,hero_createdby) VALUES ('$param','$param2','$param3','$param4','$param5')");
    }

    //Updating existing hero method
    public function updateHero($param,$param2,$param3,$param4,$id){
        $updateHero = self::$db->query("UPDATE hero SET hero_text = '$param',hero_button_text = '$param2',hero_cv = '$param3',hero_photo = '$param4' WHERE hero_id = '$id'");
    }

}