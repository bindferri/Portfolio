<?php
require_once "include/header.php";

//Getting specific id to delete
if (isset($_GET['id'])){
    $id = $_GET['id'];
}

//Instantiating Hero
$hero = new Hero();

//Delete Function
$hero->deleteItem($id);

//reloading page
redirect("hero.php");