<?php


class Skills extends ParentClass {

    protected static $db;
    protected static $db_tableName = "skills";
    protected static $db_tableFields = ['skills_image','skills_name'];

    public function __construct(){
        static::$db = new Database();
    }

    public function createSkills($param,$param2){
        $createHero = self::$db->query("INSERT INTO skills (skills_name,skills_image) VALUES ('$param','$param2')");
    }

    public function updateSkills($param,$param2,$id){
        $createHero = self::$db->query("UPDATE skills SET skills_name = '$param',skills_image = '$param2' WHERE skills_id = $id");
    }

}