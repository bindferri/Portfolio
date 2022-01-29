<?php


class Hero extends ParentClass {

    protected static $db;
    protected static $db_tableName = "hero";
    protected static $db_tableFields = ['hero_text','hero_button_text','hero_cv','hero_photo'];
    public $id;
    public $heroText;
    public $hero_buttonText;
    public $heroCV;
    public $heroPhoto;

    public function __construct(){
        static::$db = new Database();
    }

    public function fetchAllHero(){
        static::$db->query("SELECT * FROM hero");
        return static::$db->fetchAll();
    }

    public function createHero($param,$param2,$param3,$param4){
        $createHero = self::$db->query("INSERT INTO hero (hero_text,hero_button_text,hero_cv,hero_photo) VALUES ('$param','$param2','$param3','$param4')");
    }

}