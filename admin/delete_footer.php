<?php
require_once "include/header.php";
//Instantiating Footer
$footer = new Footer();

//Getting specific id to delete
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $footerData = $footer->selectById($id);
    if ($footerData->footer_createdby !== $_SESSION['id']){
        redirect("index.php");
    }else{
        //Delete function
        $footer->deleteItem($id);

        //Reloading page
        redirect("footer.php");
    }
}



