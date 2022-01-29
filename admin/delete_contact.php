<?php
require_once "include/header.php";

//Getting contact id to delete
if (isset($_GET['id'])){
    $id = $_GET['id'];
}

//Instantiating contact
$contact = new Contact();

//deleting contact
$contact->deleteItem($id);

//reloading page
redirect("contact.php");