<?php


class Project extends ParentClass {

    protected static $db;
    protected static $db_tableName = "project";
    protected static $db_tableFields = ['project_name','project_excerpt','project_content','project_main_photo','project_second_photo','project_third_photo'];
    public $id;
    public $projectName;
    public $projectExcerpt;
    public $projectContent;
    public $projectMainPhoto;
    public $projectSecondPhoto;
    public $projectThirdPhoto;

    public function __construct(){
        static::$db = new Database();
    }

    public function createProject($param,$param2,$param3,$param4,$param5,$param6){
        $createHero = self::$db->query("INSERT INTO project (project_name,project_excerpt,project_content,project_main_photo,project_second_photo,project_third_photo)
                    VALUES ('$param','$param2','$param3','$param4','$param5','$param6')");
    }
}