<?php require_once "admin/include/init.php";
    $hero = new Hero();
    $heroResult = $hero->fetchSingle(45);
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
        <i class="fas fa-bars menu_icon"></i>
        <ul class="navbar__menu">
            <li><a href="#about-me">About Me</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php">Log In</a></li>
        </ul>
    </nav>
</header>


<section class="hero">
    <div class="hero__text">
        <h5 class="hero__text--heading"><?php echo $heroResult->hero_text ?></h5>
        <div class="hero__buttons">
        <a href="#projects"><button class="btn hero__link">Check out my work</button></a>
        <a href="img/CV-BIND_FERRI.pdf" download="CV"><button class="btn hero__link">Download CV</button></a>
        </div>
    </div>
    <picture class="hero__picture">
        <!--        <source type="image/webp" srcset="img/hero.webp">-->
        <!--        <source type="image/jpg" srcset="img/hero.jpg">-->
        <img class="hero__img" src="img/bindferritransparent.png" alt="">
    </picture>
</section>

<section class="projects1" id="projects">
    <h2 class="section__header">Projects</h2>
    <div class="projects2">
    <img class="projects2__img" src="img/omnifood.png" alt="">
    <div class="projects2__content">
        <h5 class="projects__heading">Omni Food</h5>
        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ex excepturi numquam quidem quos sint suscipit tempora tenetur vel. Atque beatae culpa eligendi est ex nihil quis rem temporibus voluptatem.</span></p>
        <a href="#" class="orange">Read More...</a>
    </div>
    </div>

    <div class="projects2 reverse">
    <div class="projects2__content">
        <h5 class="projects__heading">Ferrify</h5>
        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ex excepturi numquam quidem quos sint suscipit tempora tenetur vel. Atque beatae culpa eligendi est ex nihil quis rem temporibus voluptatem.</span></p>

        <a href="#" class="aqua">Read More...</a>
    </div>
    <img class="projects2__img" src="img/ferrify.png" alt="">
    </div>

    <div class="projects2">
    <img class="projects2__img" src="img/clarius.png" alt="">
    <div class="projects2__content">
        <h5 class="projects__heading">Clarius</h5>
        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ex excepturi numquam quidem quos sint suscipit tempora tenetur vel. Atque beatae culpa eligendi est ex nihil quis rem temporibus voluptatem.</span></p>
        <a href="#" class="grey">Read More...</a>
    </div>
    </div>

    <div class="projects2 reverse">
    <div class="projects2__content">
        <h5 class="projects__heading">Forkify</h5>
        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ex excepturi numquam quidem quos sint suscipit tempora tenetur vel. Atque beatae culpa eligendi est ex nihil quis rem temporibus voluptatem.</span></p>
        <a href="#" class="red">Read More...</a>
    </div>
    <img class="projects2__img" src="img/forkify.png" alt="">
    </div>

    <div class="projects2">
    <img class="projects2__img" src="img/cms.png" alt="">
    <div class="projects2__content">
        <h5 class="projects__heading">CMS</h5>
        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ex excepturi numquam quidem quos sint suscipit tempora tenetur vel. Atque beatae culpa eligendi est ex nihil quis rem temporibus voluptatem.</span></p>
        <a href="#">Read More...</a>
    </div>
    </div>
</section>

<section class="knowledge" id="about-me">
    <h2 class="section__header">Skills</h2>
    
    <div class="languages">
        <img src="img/html.png" alt="">
        <img src="img/css.png" alt="">
        <img src="img/javascript.png" alt="">
    </div>
    <div class="languages">
        <img src="img/php.png" alt="">
        <img src="img/wordpress.png" alt="">
        <img src="img/java.png" alt="">
    </div>
</section>

<section class="contact" id="contact">
    <h2 class="contact__heading">Contact Me</h2>
    <p class="contact__heading--p">&#8212;<span class="contact-p__color">get in touch</span>&#8212;</p>

    <div class="contact-form">
        <div class="contact-info">
            <div class="contact-info__text">
                <h4>Get in Touch</h4>
                <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam qui quis ullam velit, voluptas voluptates.
                    Ipsam qui quis ullam velit, voluptas voluptates.</span></p>
            </div>

            <div class="contact-info__info">
                <i class="fas fa-user-alt"></i>
                <div class="contact-info__card">
                    <h5>Name</h5>
                    <p>Bind Ferri</p>
                </div>
            </div>

            <div class="contact-info__info">
                <i class="fas fa-map-marker-alt"></i>
                <div class="contact-info__card">
                    <h5>Adress</h5>
                    <p>Prishtine,Kosove</p>
                </div>
            </div>

            <div class="contact-info__info">
                <i class="fas fa-envelope"></i>
                <div class="contact-info__card">
                    <h5>Email</h5>
                    <p>bindferri@gmail.com</p>
                </div>
            </div>
        </div>

        <form class="form-contact">
            <h4>Message me</h4>
            <div class="contact-input">
                <input type="text" name="contact_name" placeholder="Name">
                <input type="email" name="contact_email" placeholder="Email">
            </div>
            <input type="text" name="contact_subject" placeholder="Subject">
            <textarea name="contact_message" id="" cols="30" rows="10" placeholder="Message"></textarea>
            <button class="btn form-contact__btn">Send Message</button>
        </form>
    </div>
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

<div class="login hidden">
    <button class="close-login">&times;</button>
    <h2 class="login__heading">Do You Have An Account?</h2>
    <form class="login__form">
        <label>Username: </label>
        <input type="text">
        <label>Password: </label>
        <input type="password">
        <button class="btn login__btn">Log In</button>
    </form>
    <a href="#" class="login__register">Register</a>
</div>
<div class="overlay hidden"></div>

<script src="js/script.js"></script>
</body>
</html>