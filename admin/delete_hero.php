<?php
require_once "include/header.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

$hero = new Hero();

$hero->deleteItem($id);

redirect("hero.php");