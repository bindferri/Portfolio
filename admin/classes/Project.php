<?php


class Project extends ParentClass {

    //Declaring variables
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

    //Class constructor
    public function __construct(){
        static::$db = new Database();
    }

    //Creating new project
    public function createProject($param,$param2,$param3,$param4,$param5,$param6){
        $createProject = self::$db->query("INSERT INTO project (project_name,project_excerpt,project_content,project_main_photo,project_second_photo,project_third_photo)
                    VALUES ('$param','$param2','$param3','$param4','$param5','$param6')");
    }

    //Updating existing method
    public function updateProject($param,$param2,$param3,$param4,$param5,$param6,$id){
        $updateProject = self::$db->query("UPDATE project SET project_name = '$param',project_excerpt = '$param2',
                         project_content = '$param3',project_main_photo = '$param4',project_second_photo = '$param5',
                          project_third_photo = '$param6' WHERE project_id = '$id'");
    }
}