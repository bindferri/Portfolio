<?php require_once "include/header.php";
require_once "include/navbar.php";
?>


    <section class="admin-content">
        <h3 class="admin__heading">Hero Customize</h3>

        <div class="container-content">
        <form action="" class="form-contact form--hero">
            <label>Get in Touch: </label>
            <input type="text">
            <label>Name: </label>
            <input type="text">
            <label>Adress: </label>
            <input type="text">
            <label>Email: </label>
            <input type="email">
            <button class="btn form-contact__btn">Create</button>
        </form>

        <table class="admin-content__table">
            <tr>
                <th>Footer Text</th>
                <th>Footer Facebook</th>
                <th>Footer Instagram</th>
                <th>Footer Github</th>
            </tr>

            <?php $footer = new Footer();
                  $allFooters = $footer->fetchAll();
                  foreach ($allFooters as $footerItem){ ?>

                      <tr>
                          <td><?php echo $footerItem->footer_text ?></td>
                          <td><?php echo $footerItem->footer_fb ?></td>
                          <td><?php echo $footerItem->footer_instagram ?></td>
                          <td><?php echo $footerItem->footer_github ?></td>
                          <td>Edit</td>
                          <td><a href="delete_footer.php?id=<?php echo $footerItem->footer_id?>">Delete</a></td>
                      </tr>

                 <?php }
            ?>
        </table>
        </div>

    </section>
    </div>

<?php require_once "include/footer.php"; ?>