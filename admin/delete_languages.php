<?php
require_once "include/header.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

$skills = new Skills();

$skills->deleteItem($id);

redirect("languages.php");