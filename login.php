<?php
 require_once "admin/include/init.php";
 $user = new User();
 $session = new Session();
 if (isset($_POST['login'])){
     $username = $_POST['login_name'];
     $password = $_POST['login_password'];


     if (!empty($username) && !empty($password)){
         if ($user->verifyLogIn($username,$password)){
             $currentUser = $user->fetchSingleByUsername($username);
             $_SESSION['id'] = $currentUser->user_id;
             $session->login(true);
             redirect("admin/index.php");
         }else{
             echo "NO";
         }
     }
 }
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
        <img src="img/logo-2.png" alt="">
        <i class="fas fa-bars menu_icon"></i>
        <ul class="navbar__menu">
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
    <div class="test">
        <hr>
    </div>
</header>

<section class="register login-page">
    <form class="form-contact" method="post" enctype="multipart/form-data">
        <h4>Log In</h4>
        <input type="text" name="login_name" placeholder="Username">
        <input type="password" name="login_password" placeholder="Password">
        <input type="submit" class="btn form-contact__btn" value="Log In" name="login">
    </form>
</section>

<footer class="footer">
    <div class="footer__social-media">
        <ul class="navbar__menu center">
            <li><a href="https://www.facebook.com/brindiii/" target="_blank"><img src="img/facebook.png" alt=""></a></li>
            <li><a href="https://www.instagram.com/bindferri/" target="_blank"><img src="img/instagram.png" alt=""></a></li>
            <li><a href="https://github.com/bindferri" target="_blank"><img src="img/github.png" alt=""></a></li>
        </ul>
    </div>
    <div>
        <p class="footer__content">2022 &copy; BIND FERRI - ALL RIGHTS RESERVED</p>
    </div>
</footer>

</body>
</html>