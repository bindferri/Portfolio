<?php
require_once "include/header.php";

//Getting specific id to delete
if (isset($_GET['id'])){
    $id = $_GET['id'];
}

//Instantiating Project
$projects = new Project();

//Delete Function
$projects->deleteItem($id);

//Reloading Page
redirect("projects.php");