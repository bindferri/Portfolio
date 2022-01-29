<?php require_once "include/header.php";
      require_once "include/navbar.php";
      $project = new Project();

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

          if (!empty($projectName) && !empty($projectContent) && !empty($projectMainPhoto)){
              $project->createProject($projectName);
          }
      }
?>


    <section class="admin-content">
        <h3 class="admin__heading">Hero Customize</h3>

        <div class="container-content">
        <form action="" class="form-contact form--hero">
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
                      <td>Delete</td>
            </tr>

                 <?php }
            ?>
        </table>
        </div>
    </section>
</div>

<?php require_once "include/footer.php" ?>