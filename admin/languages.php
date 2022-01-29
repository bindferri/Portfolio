<?php require_once "include/header.php";
      require_once "include/navbar.php";
?>


    <section class="admin-content">
        <h3 class="admin__heading">Hero Customize</h3>

        <div class="container-content">
        <form action="" class="form-contact form--hero">
            <label>Programming Language Image: </label>
            <input type="file">
            <button class="btn form-contact__btn">Create</button>
        </form>

        <table class="admin-content__table">
            <tr>
                <th>Skills Name</th>
                <th>Skills Image</th>
            </tr>
            <?php $skills = new Skills();
                  $allSkills = $skills->fetchAll();
                  foreach ($allSkills as $skillItem){ ?>

                      <tr>
                          <td><?php echo $skillItem->skills_name ?></td>
                          <td><?php echo $skillItem->skills_image ?></td>
                          <td><a href="">Edit</a></td>
                          <td><a href="delete_languages.php?id=<?php echo $skillItem->skill_id?>">Delete</a></td>
                      </tr>

               <?php   }
            ?>

        </table>
        </div>
    </section>
</div>

<?php require_once "include/footer.php" ?>