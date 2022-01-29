<?php require_once "include/header.php";
require_once "include/navbar.php";

//Instantiating Contact
$contact = new Contact();
$id = $_GET['id'];

//Getting specific Id and Data
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $contactData = $contact->selectById($id);
}


//Getting data from submit
if (isset($_POST['contact_update'])) {

    $contactText = $_POST['contact_text'];
    $contactName = $_POST['contact_name'];
    $contactAddress = $_POST['contact_address'];
    $contactEmail = $_POST['contact_email'];

    //Checking if inputs were filled
    if (!empty($contactText) && !empty($contactName) && !empty($contactAddress) && !empty($contactEmail)) {

        //Updating contact in database
        $contact->updateContact($contactText,$contactName,$contactAddress,$contactEmail,$id);
    }

    //Reloading page
    redirect("edit_contact.php?id=".$id);
}
?>


    <section class="admin-content">
        <h3 class="admin__heading">Edit Contact</h3>

        <div class="container-content">
            <form action="" method="post" enctype="multipart/form-data" class="form-contact form--hero">
                <label>Get in Touch Text: </label>
                <input type="text" name="contact_text" value="<?php echo $contactData->contact_text ?>">
                <label>Name: </label>
                <input type="text" name="contact_name" value="<?php echo $contactData->contact_name ?>">
                <label>Address: </label>
                <input type="text" name="contact_address" value="<?php echo $contactData->contact_address ?>">
                <label>Email: </label>
                <input type="email" name="contact_email" value="<?php echo $contactData->contact_email ?>">
                <input type="submit" value="Update" class="btn form-contact__btn" name="contact_update">
            </form>

    </section>
    </div>

<?php require_once "include/footer.php"; ?>