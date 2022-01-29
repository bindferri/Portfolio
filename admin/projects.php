<?php require_once "include/header.php";
      require_once "include/navbar.php";

      //Instantiating Project
      $project = new Project();

      //Getting Data Submit In Form
      if (isset($_POST['project_create'])){

          $projectName = $_POST['project_name'];
          $projectExc = $_POST['project_excerpt'];
          $projectContent = $_POST['project_content'];
          $projectMainPhoto = $_FILES['project_main_photo']['name'];
          $projectMainPhototmp = $_FILES['project_main_photo']['tmp_name'];
          $projectSecondPhoto = $_FILES['project_second_photo']['name'];
          $projectSecondPhototmp = $_FILES['project_second_photo']['tmp_name'];
          $projectThirdPhoto = $_FILES['project_third_photo']['name'];
          $projectThirdPhototmp = $_FILES['project_third_photo']['tmp_name'];

           //Checking if necessary data are filled
          if (!empty($projectName) && !empty($projectContent) && !empty($projectMainPhoto)){

              //moving photo to a temp folder
              move_uploaded_file($projectMainPhototmp,"project_files/".$projectMainPhoto);

              //checking for optional photos and moving to temp folder
              if ($projectSecondPhoto){
                  move_uploaded_file($projectSecondPhototmp,"project_files/".$projectSecondPhoto);
              }

              if ($projectThirdPhoto){
                  move_uploaded_file($projectThirdPhototmp,"project_files/".$projectThirdPhoto);
              }

              //Creating new project in database
              $project->createProject($projectName,$projectExc,$projectContent,$projectMainPhoto,$projectSecondPhoto,$projectThirdPhoto);
          }

          //Reloading the page
          redirect("projects.php");
      }
?>


    <section class="admin-content">
        <h3 class="admin__heading">Project Customize</h3>

        <div class="container-content">
        <form action="" method="post" enctype="multipart/form-data" class="form-contact form--hero">
            <label>Project Name:</label>
            <input type="text" name="project_name">
            <label>Project Excerpt: </label>
            <input type="text" name="project_excerpt">
            <label>Project Content: </label>
            <textarea name="project_content" id="" cols="30" rows="10"></textarea>
            <label>Main Photo: </label>
            <input type="file" name="project_main_photo">
            <label>Second Photo: </label>
            <input type="file" name="project_second_photo">
            <label>Third Photo: </label>
            <input type="file" name="project_third_photo">
            <input type="submit" value="Create" class="btn form-contact__btn" name="project_create">
        </form>

        <table class="admin-content__table">
            <tr>
                <th>Project Name</th>
                <th>Project Excerpt</th>
                <th>Project Content</th>
                <th>Main Photo</th>
                <th>Second Photo</th>
                <th>Third Photo</th>
            </tr>
            <tr>
                <td>Bind Ferri Full Stack Developer</td>
                <td>Check my work</td>
                <td>img/cv.pdf</td>
                <td>img/bindferri.png</td>
                <td>img/bindferri.png</td>
                <td>img/bindferri.png</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>

            <?php
                  //Fetching All Data From Project
                  $allProjects = $project->fetchAll();
                  foreach ($allProjects as $projectItem){ ?>
            <tr>
                      <td><?php echo $projectItem->project_name ?></td>
                      <td><?php echo $projectItem->project_excerpt ?></td>
                      <td><?php echo $projectItem->project_content ?></td>
                      <td><?php echo $projectItem->project_main_photo ?></td>
                      <td><?php echo $projectItem->project_second_photo ?></td>
                      <td><?php echo $projectItem->project_third_photo ?></td>
                      <td>Edit</td>
                      <td><a href="delete_projects.php?id=<?php echo $projectItem->project_id?>">Delete</a></td>
            </tr>

                 <?php }
            ?>
        </table>
        </div>
    </section>
</div>

<?php require_once "include/footer.php" ?>