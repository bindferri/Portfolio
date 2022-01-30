<?php
require_once "include/header.php";
//Instantiating Project
$projects = new Project();

//Getting specific id to delete
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $projectData = $projects->selectById($id);
    if ($projectData->project_createdby !== $_SESSION['id']){
        redirect("index.php");
    }else{

        //Delete Function
        $projects->deleteItem($id);

        //Reloading Page
        redirect("projects.php");
    }
}


