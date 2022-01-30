<?php require_once "include/header.php";
require_once "include/navbar.php";

//Instantiating Hero
$skills = new Skills();
$id = $_GET['id'];

//Getting specific Id and Data
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $skillsData = $skills->selectById($id);
    if ($skillsData->skills_createdby !== $_SESSION['id']){
        redirect("index.php");
    }
}


//Getting data from submit
if (isset($_POST['skills_update'])) {

    $skillsName = $_POST['skills_name'];
    $skillsImage = $_FILES['skills_image']['name'];
    $skillsImagetmp = $_FILES['skills_image']['tmp_name'];

    //If there is no photo selected , get the one that was uploaded
    if (empty($skillsImage)){
        $skillsImage = $skillsData->skills_image;
    }

    //Checking if inputs were filled
    if (!empty($skillsName) && !empty($skillsImage)) {

        //If there was a new photo , move to folder
        if ($skillsImage !== $skillsData->skills_image){
            move_uploaded_file($skillsImagetmp,"assets/skills_img/".$skillsImage);
        }

        //Updating hero in database
        $skills->updateSkills($skillsName,$skillsImage,$id);
    }

    //Reloading page
    redirect("edit_languages.php?id=".$id);
}
?>


    <section class="admin-content">
        <h3 class="admin__heading">Edit Hero</h3>

        <div class="container-content">
            <form action="" method="post" enctype="multipart/form-data" class="form-contact form--hero">
                <label>Skills Name:</label>
                <input type="text" name="skills_name" value="<?php echo $skillsData->skills_name ?>">
                <label>Skills Image: </label>
                <p class="update_p"><?php echo $skillsData->skills_image ?></p>
                <input type="file" name="skills_image">
                <input type="submit" value="Update" class="btn form-contact__btn" name="skills_update">
            </form>

    </section>
    </div>

<?php require_once "include/footer.php"; ?>