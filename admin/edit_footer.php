<?php require_once "include/header.php";
require_once "include/navbar.php";

//Instantiating Footer
$footer = new Footer();
$id = $_GET['id'];

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $footerData = $footer->selectById($id);
}


//Getting data from submit
if (isset($_POST['footer_update'])) {

    $footerText = $_POST['footer_text'];
    $footerFb = $_POST['footer_facebook'];
    $footerInsta = $_POST['footer_instagram'];
    $footerGithub = $_POST['footer_github'];

    //Checking if inputs were filled
    if (!empty($footerText) && !empty($footerFb) && !empty($footerInsta) && !empty($footerGithub)) {

        //Creating footer in database
        $footer->updateFooter($footerText, $footerFb, $footerInsta, $footerGithub,$id);
    }

    //Reloading page
    redirect("edit_footer.php?id=".$id);
}
?>


    <section class="admin-content">
        <h3 class="admin__heading">Edit Footer</h3>

        <div class="container-content">
            <form action="" method="post" enctype="multipart/form-data" class="form-contact form--hero">
                <label>Footer Text: </label>
                <input type="text" name="footer_text" value="<?php echo $footerData->footer_text ?>">
                <label>Facebook Link: </label>
                <input type="text" name="footer_facebook" value="<?php echo $footerData->footer_fb ?>">
                <label>Instagram Link: </label>
                <input type="text" name="footer_instagram" value="<?php echo $footerData->footer_instagram ?>">
                <label>Github Link: </label>
                <input type="text" name="footer_github" value="<?php echo $footerData->footer_github ?>">
                <input type="submit" value="Update" class="btn form-contact__btn" name="footer_update">
            </form>
        </div>

    </section>
    </div>

<?php require_once "include/footer.php"; ?>