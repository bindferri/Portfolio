<?php require_once "include/init.php";

//Instantiating Session
$session = new Session();

//Destroying session method
$session->logout();

//Redirecting to homepage
redirect("../index.php");
