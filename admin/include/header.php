<?php require_once "init.php";
    $session = new Session();
    $session->checkSignIn() ?  : redirect("../login.php");
?>

<!-- Header Component -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bind Ferri - Minimalist Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<header>
    <nav class="navbar">
        <a href="../index.php"><img src="../img/logo-2.png" alt=""></a>
        <ul class="navbar__menu">
            <li><a class="open-overlay" href="logout.php">Log Out</a></li>
        </ul>
    </nav>
    <div class="test">
        <hr>
    </div>
</header>
