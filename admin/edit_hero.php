<?php require_once "include/header.php";
require_once "include/navbar.php";

//Instantiating Hero
$hero = new Hero();
$id = $_GET['id'];

//Getting specific Id and Data
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $heroData = $hero->selectById($id);
}


//Getting data from submit
if (isset($_POST['hero_update'])) {

    $heroText = $_POST['hero_text'];
    $heroButtonText = $_POST['hero_button_text'];
    $heroCV = $_FILES['hero_cv_file']['name'];
    $heroCVtmp = $_FILES['hero_cv_file']['tmp_name'];
    $heroPhoto = $_FILES['hero_photo']['name'];
    $heroPhototmp = $_FILES['hero_photo']['tmp_name'];

    if (empty($heroPhoto)){
        $heroPhoto = $heroData->hero_photo;
    }

    if (empty($heroCV)){
        $heroCV = $heroData->hero_cv;
    }

    //Checking if inputs were filled
    if (!empty($heroText) && !empty($heroButtonText) && !empty($heroCV) && !empty($heroPhoto)) {

        move_uploaded_file($heroCVtmp,"hero_files/".$heroCV);
        move_uploaded_file($heroPhototmp,"hero_files/".$heroPhoto);

        //Updating hero in database
        $hero->updateHero($heroText,$heroButtonText,$heroCV,$heroPhoto,$id);
    }

    //Reloading page
    redirect("edit_hero.php?id=".$id);
}
?>


    <section class="admin-content">
        <h3 class="admin__heading">Edit Hero</h3>

        <div class="container-content">
            <form action="" method="post" enctype="multipart/form-data" class="form-contact form--hero">
                <label>Hero Text:</label>
                <input type="text" name="hero_text" value="<?php echo $heroData->hero_text ?>">
                <label>Hero Button Text: </label>
                <input type="text" name="hero_button_text" value="<?php echo $heroData->hero_button_text ?>">
                <label>CV File</label>
                <p class="update_p"><?php echo $heroData->hero_cv ?></p>
                <input type="file" name="hero_cv_file" value="<?php echo $heroData->hero_cv ?>">
                <label>Your Photo:</label>
                <p class="update_p"><?php echo $heroData->hero_photo ?></p>
                <input type="file" name="hero_photo" value="<?php echo $heroData->hero_photo ?>">
                <input type="submit" value="Create" class="btn form-contact__btn" name="hero_update">
            </form>

    </section>
    </div>

<?php require_once "include/footer.php"; ?>