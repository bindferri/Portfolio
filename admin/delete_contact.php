<?php
require_once "include/header.php";

//Instantiating contact
$contact = new Contact();

//Getting contact id to delete
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $contactData = $contact->selectById($id);
    if ($contactData->contact_createdby !== $_SESSION['id']){
        redirect("index.php");
    }else{
        //deleting contact
        $contact->deleteItem($id);

        //reloading page
        redirect("contact.php");
    }
}



