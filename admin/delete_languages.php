<?php
require_once "include/header.php";

//Getting specific id to delete
if (isset($_GET['id'])){
    $id = $_GET['id'];
}

//Instantiating Skills
$skills = new Skills();

//Delete Function
$skills->deleteItem($id);

//Reloading Page
redirect("languages.php");