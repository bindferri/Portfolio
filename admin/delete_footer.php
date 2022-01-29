<?php
require_once "include/header.php";

//Getting specific id to delete
if (isset($_GET['id'])){
    $id = $_GET['id'];
}

//Instantiating Footer
$footer = new Footer();

//Delete function
$footer->deleteItem($id);

//Reloading page
redirect("footer.php");