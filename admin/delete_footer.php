<?php
require_once "include/header.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

$footer = new Footer();

$footer->deleteItem($id);

redirect("footer.php");