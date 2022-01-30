<?php require_once "include/header.php" ;
      require_once "include/navbar.php";

      //Instantiating Hero
      $hero = new Hero();

      $allHero = $hero->fetchAllByUser($_SESSION['id']);


      //Getting data from submit
      if (isset($_POST['hero_create'])){

          $heroText = $_POST['hero_text'];
          $heroButtonText = $_POST['hero_button_text'];
          $heroCV = $_FILES['hero_cv_file']['name'];
          $heroCVtmp = $_FILES['hero_cv_file']['tmp_name'];
          $heroPhoto = $_FILES['hero_photo']['name'];
          $heroPhototmp = $_FILES['hero_photo']['tmp_name'];

          //Checking if inputs were filled
          if (!empty($heroText) && !empty($heroButtonText) && !empty($heroCV) && !empty($heroPhoto)){
              if (!$allHero){
              //Moving files to folder
              move_uploaded_file($heroPhototmp,"assets/hero_files/".$heroPhoto);
              move_uploaded_file($heroCVtmp,"assets/hero_files/".$heroCV);

              //Creating new hero in database
              $hero->createHero($heroText,$heroButtonText,$heroCV,$heroPhoto,$_SESSION['id']);
              }
          }

          //Reloading Page
          redirect("hero.php");
      }
?>


    <section class="admin-content">
        <h3 class="admin__heading">Hero Customize - Maximum 1</h3>

        <div class="container-content">
        <form action="" method="post" enctype="multipart/form-data" class="form-contact form--hero">
            <label>Hero Text:</label>
            <input type="text" name="hero_text">
            <label>Hero Button Text: </label>
            <input type="text" name="hero_button_text">
            <label>CV File</label>
            <input type="file" name="hero_cv_file">
            <label>Your Photo:</label>
            <input type="file" name="hero_photo">
            <input type="submit" value="Create" class="btn form-contact__btn" name="hero_create">
        </form>

         <?php if ($allHero){ ?>
        <table class="admin-content__table">
            <tr>
                <th>Hero Text</th>
                <th>Hero Button Text</th>
                <th>CV File</th>
                <th>Photo</th>
            </tr>

            <?php
                  //Fetching hero data

                  foreach ($allHero as $heroItem){ ?>
                      <tr>
                          <td><?php echo $heroItem->hero_text ?></td>
                          <td><?php echo $heroItem->hero_button_text ?></td>
                          <td><?php echo $heroItem->hero_cv ?></td>
                          <td><?php echo $heroItem->hero_photo ?></td>
                          <td><a href="edit_hero.php?id=<?php echo $heroItem->hero_id?>">Edit</a></td>
                          <td><a href="delete_hero.php?id=<?php echo $heroItem->hero_id?>">Delete</a></td>
                      </tr>
                 <?php }
            ?>
        </table>
            <?php } ?>
    </div>
    </section>
</div>

<?php require_once "include/footer.php" ?>