<?php require_once "admin/include/init.php";
$session = new Session();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bind Ferri - Minimalist Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<header>
    <nav class="navbar">
        <a href="index.php"><img src="img/logo-2.png" alt=""></a>
        <i class="fas fa-bars menu_icon toggle"></i>
        <ul class="navbar__menu">
            <li><a href="#about-me">About Me</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
            <?php if (isset($_SESSION['id'])){ ?>
            <li><a href="admin/index.php">Admin</a></li>
            <?php } ?>
            <li><a href="<?php echo isset($_SESSION['id']) ? "admin/logout.php" : "login.php" ?>"><?php echo isset($_SESSION['id']) ? "Log Out" : "Log In" ?></a></li>
        </ul>
    </nav>
</header>
