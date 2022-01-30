<?php require_once "include/header.php";
require_once "include/navbar.php";

//Instantiating Footer
$footer = new Footer();

//Fetching footer data
$allFooters = $footer->fetchAllByUser($_SESSION['id']);

//Getting data from submit
if (isset($_POST['footer_create'])) {

    $footerText = $_POST['footer_text'];
    $footerFb = $_POST['footer_facebook'];
    $footerInsta = $_POST['footer_instagram'];
    $footerGithub = $_POST['footer_github'];

    //Checking if inputs were filled
    if (!empty($footerText) && !empty($footerFb) && !empty($footerInsta) && !empty($footerGithub)) {
        if (!$allFooters){
            //Creating footer in database
            $footer->createFooter($footerText, $footerFb, $footerInsta, $footerGithub,$_SESSION['id']);
        }
    }

    //Reloading page
    redirect("footer.php");
}
?>


    <section class="admin-content">
        <h3 class="admin__heading">Footer Customize - Maximum 1</h3>

        <div class="container-content">
        <form action="" method="post" enctype="multipart/form-data" class="form-contact form--hero">
            <label>Footer Text: </label>
            <input type="text" name="footer_text">
            <label>Facebook Link: </label>
            <input type="text" name="footer_facebook">
            <label>Instagram Link: </label>
            <input type="text" name="footer_instagram">
            <label>Github Link: </label>
            <input type="text" name="footer_github">
            <input type="submit" value="Create" class="btn form-contact__btn" name="footer_create">
        </form>

            <?php if ($allFooters){ ?>
        <table class="admin-content__table">
            <tr>
                <th>Footer Text</th>
                <th>Footer Facebook</th>
                <th>Footer Instagram</th>
                <th>Footer Github</th>
            </tr>

            <?php

                  foreach ($allFooters as $footerItem){ ?>

                      <tr>
                          <td><?php echo $footerItem->footer_text ?></td>
                          <td><?php echo $footerItem->footer_fb ?></td>
                          <td><?php echo $footerItem->footer_instagram ?></td>
                          <td><?php echo $footerItem->footer_github ?></td>
                          <td><a href="edit_footer.php?id=<?php echo $footerItem->footer_id?>">Edit</td>
                          <td><a href="delete_footer.php?id=<?php echo $footerItem->footer_id?>">Delete</a></td>
                      </tr>

                 <?php }
            ?>
        </table>
                    <?php } ?>
        </div>

    </section>
    </div>

<?php require_once "include/footer.php"; ?>