<?php
require_once "include/header.php";
//Instantiating Hero
$hero = new Hero();

//Getting specific id to delete
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $heroData = $hero->selectById($id);
    if ($heroData->hero_createdby !== $_SESSION['id']){
        redirect("index.php");
    }else{
        //Delete Function
        $hero->deleteItem($id);

        //reloading page
        redirect("hero.php");
    }
}



