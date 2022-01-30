<?php require_once "admin/include/init.php";
    require_once "include/header.php";

    //Counters
    $countSkills = 0;
    $countProject = 1;

    //Checking if user is signed in and fetching data for specific user
    if (isset($_SESSION['id'])) {
        $hero = new Hero();
        $heroResult = $hero->fetchAllByUser($_SESSION['id']);
        $project = new Project();
        $projectResult = $project->fetchAllByUser($_SESSION['id']);
        $skills = new Skills();
        $skillsResult = $skills->fetchAllByUser($_SESSION['id']);
        $contact = new Contact();
        $contactResult = $contact->fetchAllByUser($_SESSION['id']);
        $footer = new Footer();
        $footerResult = $footer->fetchAllByUser($_SESSION['id']);
    }
?>



<section class="hero">
    <div class="hero__text">
        <h5 class="hero__text--heading"><?php echo isset($heroResult[0]->hero_text) ? $heroResult[0]->hero_text : "Bind Ferri <br> Full Stack Developer" ?></h5>
        <div class="hero__buttons">
        <a class="btn hero__link" href="#projects"><?php echo isset($heroResult[0]->hero_button_text) ? $heroResult[0]->hero_button_text : "Check my work" ?></a>
        <a href="admin/assets/hero_files/<?php echo isset($heroResult[0]->hero_cv) ? $heroResult[0]->hero_cv : "CV-BIND_FERRI.pdf"?>" download="CV"><button class="btn hero__link">Download CV</button></a>
        </div>
    </div>
    <picture class="hero__picture">
        <!--        <source type="image/webp" srcset="img/hero.webp">-->
        <!--        <source type="image/jpg" srcset="img/hero.jpg">-->
        <img class="hero__img" src="admin/assets/hero_files/<?php echo isset($heroResult[0]->hero_photo) ? $heroResult[0]->hero_photo : "bindferritransparent.png" ?>" alt="">
    </picture>
</section>

<section class="projects1" id="projects">

    <h2 class="section__header">Projects</h2>

    <?php
    if (isset($_SESSION['id'])){
    foreach ($projectResult as $projectItem){
        if ($countProject % 2 != 0){ ?>
    <div class="projects2">
    <img class="projects2__img" src="admin/assets/project_img/<?php echo $projectItem->project_main_photo ?>" alt="">
    <div class="projects2__content">
        <h5 class="projects__heading"><?php echo $projectItem->project_name ?></h5>
        <p><?php echo $projectItem->project_excerpt ? $projectItem->project_excerpt : trimContent($projectItem->project_content) ?></p>
        <a href="single-project.php?id=<?php echo $projectItem->project_id?>" class="orange">Read More...</a>
    </div>
    </div>
    <?php $countProject++; }else{  ?>

    <div class="projects2 reverse">
    <div class="projects2__content">
        <h5 class="projects__heading"><?php echo $projectItem->project_name ?></h5>
        <p><?php echo $projectItem->project_excerpt ? $projectItem->project_excerpt : trimContent($projectItem->project_content) ?></p>

        <a href="single-project.php?id=<?php echo $projectItem->project_id?>" class="aqua">Read More...</a>
    </div>
    <img class="projects2__img" src="admin/assets/project_img/<?php echo $projectItem->project_main_photo ?>" alt="">
    </div>
    <?php $countProject++; } } }else{
        require_once "include/projects.php";
    } ?>


</section>

<section class="knowledge" id="about-me">
    <h2 class="section__header">Skills</h2>

    <?php
    if (isset($_SESSION['id'])){
    foreach ($skillsResult as $skillItem){
        if ($countSkills % 3 === 0){
        ?>
    <div class="languages">
    <?php } ?>
        <img src="admin/assets/skills_img/<?php echo $skillItem->skills_image ?>" alt="">
        <?php $countSkills++;
        if ($countSkills % 3 === 0){
        ?>
    </div>
    <?php } } } else{
        require_once "include/skills.php";
    } ?>
</section>

<section class="contact" id="contact">
    <h2 class="contact__heading">Contact Me</h2>
    <p class="contact__heading--p">&#8212;<span class="contact-p__color">get in touch</span>&#8212;</p>

    <div class="contact-form">
        <div class="contact-info">
            <div class="contact-info__text">
                <h4>Get in Touch</h4>
                <p><?php echo isset($contactResult[0]->contact_text) ? $contactResult[0]->contact_text : "For more information please feel free to contact me" ?></p>
            </div>

            <div class="contact-info__info">
                <i class="fas fa-user-alt"></i>
                <div class="contact-info__card">
                    <h5>Name</h5>
                    <p><?php echo isset($contactResult[0]->contact_name) ? $contactResult[0]->contact_name : "Bind Ferri" ?></p>
                </div>
            </div>

            <div class="contact-info__info">
                <i class="fas fa-map-marker-alt"></i>
                <div class="contact-info__card">
                    <h5>Address</h5>
                    <p><?php echo isset($contactResult[0]->contact_address) ? $contactResult[0]->contact_address : "Prishtine,Kosove"?></p>
                </div>
            </div>

            <div class="contact-info__info">
                <i class="fas fa-envelope"></i>
                <div class="contact-info__card">
                    <h5>Email</h5>
                    <p><?php echo isset($contactResult[0]->contact_email) ? $contactResult[0]->contact_email : "bindferri@gmail.com" ?></p>
                </div>
            </div>
        </div>

        <form class="form-contact" method="post" action="mail.php">
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


<?php require_once "include/footer.php" ?>

