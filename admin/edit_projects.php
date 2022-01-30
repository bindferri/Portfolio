<?php require_once "include/header.php";
require_once "include/navbar.php";

//Instantiating Hero
$project = new Project();
$id = $_GET['id'];

//Getting specific Id and Data
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $projectData = $project->selectById($id);
    if ($projectData->project_createdby !== $_SESSION['id']){
        redirect("index.php");
    }
}


//Getting data from submit
if (isset($_POST['project_update'])) {

    $projectName = $_POST['project_name'];
    $projectExcerpt = $_POST['project_excerpt'];
    $projectContent = $_POST['project_content'];
    $projectMainPhoto = $_FILES['project_main_photo']['name'];
    $projectMainPhototmp = $_FILES['project_main_photo']['tmp_name'];
    $projectSecondPhoto = $_FILES['project_second_photo']['name'];
    $projectSecondPhototmp = $_FILES['project_second_photo']['tmp_name'];
    $projectThirdPhoto = $_FILES['project_third_photo']['name'];
    $projectThirdPhototmp = $_FILES['project_third_photo']['tmp_name'];

    //If there is no photo selected , get the one that was uploaded
    if (empty($projectMainPhoto)){
        $projectMainPhoto = $projectData->project_main_photo;
    }

    //If there is no photo selected , get the one that was uploaded
    if (empty($projectSecondPhoto)){

        //If there was a photo uploaded
        if ($projectData->project_second_photo){
            $projectSecondPhoto = $projectData->project_second_photo;
        }
    }

    //If there is no photo selected , get the one that was uploaded
    if (empty($projectThirdPhoto)){
        //If there was a photo uploaded
        if ($projectData->project_third_photo){
            $projectThirdPhoto = $projectData->project_third_photo;
        }
    }

    //Checking if inputs were filled
    if (!empty($projectName) && !empty($projectMainPhoto) && !empty($projectContent)) {

        //If there was a new photo , move to folder
        if ($projectMainPhoto !== $projectData->project_main_photo){
            move_uploaded_file($projectMainPhototmp,"assets/project_img/".$projectMainPhoto);
        }

        //If there was a new photo , move to folder
        if ($projectSecondPhoto){
            if ($projectSecondPhoto !== $projectData->project_second_photo){
                move_uploaded_file($projectSecondPhototmp,"assets/project_img/".$projectSecondPhoto);
            }
        }

        //If there was a new photo , move to folder
        if ($projectThirdPhoto){
            if ($projectThirdPhoto !== $projectData->project_third_photo){
                move_uploaded_file($projectThirdPhototmp,"assets/project_img/".$projectThirdPhoto);
            }
        }

        //Updating hero in database
        $project->updateProject($projectName,$projectExcerpt,$projectContent,$projectMainPhoto,$projectSecondPhoto,$projectThirdPhoto,$id);
    }

    //Reloading page
    redirect("edit_projects.php?id=".$id);
}
?>


    <section class="admin-content">
        <h3 class="admin__heading">Edit Project</h3>

        <div class="container-content">
            <form action="" method="post" enctype="multipart/form-data" class="form-contact form--hero">
                <label>Project Name:</label>
                <input type="text" name="project_name" value="<?php echo $projectData->project_name ?>">
                <label>Project Excerpt: </label>
                <input type="text" name="project_excerpt" value="<?php echo $projectData->project_excerpt ?>">
                <label>Project Content: </label>
                <textarea name="project_content" id="" cols="30" rows="10"><?php echo $projectData->project_content ?></textarea>
                <label>Main Photo: </label>
                <p class="update_p"><?php echo $projectData->project_main_photo ?></p>
                <input type="file" name="project_main_photo">
                <label>Second Photo: </label>
                <p class="update_p"><?php echo $projectData->project_second_photo ?></p>
                <input type="file" name="project_second_photo">
                <label>Third Photo: </label>
                <p class="update_p"><?php echo $projectData->project_third_photo ?></p>
                <input type="file" name="project_third_photo">
                <input type="submit" value="Update" class="btn form-contact__btn" name="project_update">
            </form>

    </section>
    </div>

<?php require_once "include/footer.php"; ?>