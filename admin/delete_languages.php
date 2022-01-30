<?php
require_once "include/header.php";
//Instantiating Skills
$skills = new Skills();

//Getting specific id to delete
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $skillsData = $skills->selectById($id);
    if ($skillsData->skills_createdby !== $_SESSION['id']){
        redirect("index.php");
    }else{
        //Delete Function
        $skills->deleteItem($id);

        //Reloading Page
        redirect("languages.php");
    }
}



