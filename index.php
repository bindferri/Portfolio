<?php require_once "admin/include/init.php";
    require_once "include/header.php";
    $countSkills = 0;
    $countProject = 1;
    $hero = new Hero();
    $heroResult = $hero->fetchAllByUser($_SESSION['id']);
    $project = new Project();
    $projectResult = $project->fetchAllByUser($_SESSION['id']);
    $skills = new Skills();
    $skillsResult = $skills->fetchAllByUser($_SESSION['id']);
    $contact = new Contact();
    $contactResult = $contact->fetchAllByUser($_SESSION['id']);
    print_r($contactResult);
?>



<section class="hero">
    <div class="hero__text">
        <h5 class="hero__text--heading"><?php echo $heroResult[0]->hero_text ?></h5>
        <div class="hero__buttons">
        <a href="#projects"><button class="btn hero__link"><?php echo $heroResult[0]->hero_button_text ?></button></a>
        <a href="admin/assets/hero_files/<?php echo $heroResult[0]->hero_cv?>" download="CV"><button class="btn hero__link">Download CV</button></a>
        </div>
    </div>
    <picture class="hero__picture">
        <!--        <source type="image/webp" srcset="img/hero.webp">-->
        <!--        <source type="image/jpg" srcset="img/hero.jpg">-->
        <img class="hero__img" src="admin/assets/hero_files/<?php echo $heroResult[0]->hero_photo ?>" alt="">
    </picture>
</section>

<section class="projects1" id="projects">

    <h2 class="section__header">Projects</h2>

    <?php foreach ($projectResult as $projectItem){
        if ($countProject % 2 != 0){ ?>
    <div class="projects2">
    <img class="projects2__img" src="admin/assets/project_img/<?php echo $projectItem->project_main_photo ?>" alt="">
    <div class="projects2__content">
        <h5 class="projects__heading"><?php echo $projectItem->project_name ?></h5>
        <p><?php echo $projectItem->project_excerpt ?></p>
        <a href="#" class="orange">Read More...</a>
    </div>
    </div>
    <?php $countProject++; }else{  ?>

    <div class="projects2 reverse">
    <div class="projects2__content">
        <h5 class="projects__heading"><?php echo $projectItem->project_name ?></h5>
        <p><?php echo $projectItem->project_excerpt ?></p>

        <a href="#" class="aqua">Read More...</a>
    </div>
    <img class="projects2__img" src="admin/assets/project_img/<?php echo $projectItem->project_main_photo ?>" alt="">
    </div>
    <?php $countProject++; } } ?>


</section>

<section class="knowledge" id="about-me">
    <h2 class="section__header">Skills</h2>

    <?php foreach ($skillsResult as $skillItem){
        if ($countSkills % 3 === 0){
        ?>
    <div class="languages">
    <?php } ?>
        <img src="admin/assets/skills_img/<?php echo $skillItem->skills_image ?>" alt="">
        <?php $countSkills++; }
        if ($countSkills === 1 || $countSkills % 3 === 0){
        ?>
    </div>
    <?php } ?>
</section>

<section class="contact" id="contact">
    <h2 class="contact__heading">Contact Me</h2>
    <p class="contact__heading--p">&#8212;<span class="contact-p__color">get in touch</span>&#8212;</p>

    <div class="contact-form">
        <div class="contact-info">
            <div class="contact-info__text">
                <h4>Get in Touch</h4>
                <p><?php echo $contactResult[0]->contact_text ?></p>
            </div>

            <div class="contact-info__info">
                <i class="fas fa-user-alt"></i>
                <div class="contact-info__card">
                    <h5>Name</h5>
                    <p><?php echo $contactResult[0]->contact_name ?></p>
                </div>
            </div>

            <div class="contact-info__info">
                <i class="fas fa-map-marker-alt"></i>
                <div class="contact-info__card">
                    <h5>Address</h5>
                    <p><?php echo $contactResult[0]->contact_address ?></p>
                </div>
            </div>

            <div class="contact-info__info">
                <i class="fas fa-envelope"></i>
                <div class="contact-info__card">
                    <h5>Email</h5>
                    <p><?php echo $contactResult[0]->contact_email ?></p>
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