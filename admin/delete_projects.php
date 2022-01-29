<?php
require_once "include/header.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

$projects = new Project();

$projects->deleteItem($id);

redirect("projects.php");