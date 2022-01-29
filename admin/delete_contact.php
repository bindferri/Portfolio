<?php
require_once "include/header.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

$contact = new Contact();

$contact->deleteItem($id);

redirect("contact.php");