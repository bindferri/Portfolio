<?php require_once "include/header.php";
      require_once "include/navbar.php";

    //Instantiating Skills
    $skills = new Skills();

    //Getting data from form
    if (isset($_POST['skills_create'])) {

    $skillsName = $_POST['skills_name'];
    $skillsImage = $_FILES['skills_image']['name'];
    $skillsImageTemp = $_FILES['skills_image']['tmp_name'];

    //Checking if inputs were filled
    if (!empty($skillsImage) && !empty($skillsName)) {
        //Moving file to folder
        move_uploaded_file($skillsImageTemp,"assets/skills_img/".$skillsImage);

        //Creating new skill
        $skills->createSkills($skillsName,$skillsImage,$_SESSION['id']);
    }

    //Reloading page
    redirect("languages.php");
    }
?>


    <section class="admin-content">
        <h3 class="admin__heading">Skills Customize</h3>

        <div class="container-content">
        <form action="" method="post" enctype="multipart/form-data" class="form-contact form--hero">
            <label>Skills Name:</label>
            <input type="text" name="skills_name">
            <label>Skills Image: </label>
            <input type="file" name="skills_image">
            <input type="submit" value="Create" class="btn form-contact__btn" name="skills_create">
        </form>

        <?php //Fetching skills data
        $allSkills = $skills->fetchAllByUser($_SESSION['id']);
            if ($allSkills){
        ?>
        <table class="admin-content__table">
            <tr>
                <th>Skills Name</th>
                <th>Skills Image</th>
            </tr>
            <?php

                  foreach ($allSkills as $skillItem){ ?>

                      <tr>
                          <td><?php echo $skillItem->skills_name ?></td>
                          <td><?php echo $skillItem->skills_image ?></td>
                          <td><a href="edit_languages.php?id=<?php echo $skillItem->skills_id ?>">Edit</a></td>
                          <td><a href="delete_languages.php?id=<?php echo $skillItem->skills_id?>">Delete</a></td>
                      </tr>

               <?php   }
            ?>

        </table>
                <?php } ?>
        </div>
    </section>
</div>

<?php require_once "include/footer.php" ?>