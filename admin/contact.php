<?php require_once "include/header.php";
      require_once "include/navbar.php";

    //Instantiating Contact
    $contact = new Contact();

    //Getting Data from submit
    if (isset($_POST['contact_create'])){

    $contactText = $_POST['contact_text'];
    $contactName = $_POST['contact_name'];
    $contactAddress = $_POST['contact_address'];
    $contactEmail = $_POST['contact_email'];

    //checking if inputs were filled
    if (!empty($contactText) && !empty($contactName) && !empty($contactAddress) && !empty($contactEmail)){

        //creating new contact in database
        $contact->createContact($contactText,$contactName,$contactAddress,$contactEmail,$_SESSION['id']);
    }

    //reloading page
    redirect("contact.php");
    }


?>


    <section class="admin-content">
        <h3 class="admin__heading">Contact Customize</h3>

        <div class="container-content">
        <form action="" method="post" enctype="multipart/form-data" class="form-contact form--hero">
            <label>Get in Touch Text: </label>
            <input type="text" name="contact_text">
            <label>Name: </label>
            <input type="text" name="contact_name">
            <label>Address: </label>
            <input type="text" name="contact_address">
            <label>Email: </label>
            <input type="email" name="contact_email">
            <input type="submit" value="Create" class="btn form-contact__btn" name="contact_create">
        </form>

        <table class="admin-content__table">
            <tr>
                <th>Contact Text</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
            </tr>

            <?php
                  //Fetching contact data
                  $allContacts = $contact->fetchAllByUser($_SESSION['id']);
                  foreach ($allContacts as $itemContact){ ?>

                      <tr>
                          <td><?php echo $itemContact->contact_text ?></td>
                          <td><?php echo $itemContact->contact_name ?></td>
                          <td><?php echo $itemContact->contact_address ?></td>
                          <td><?php echo $itemContact->contact_email ?></td>
                          <td><a href="edit_contact.php?id=<?php echo $itemContact->contact_id ?>">Edit</a></td>
                          <td><a href="delete_contact.php?id=<?php echo $itemContact->contact_id?>">Delete</a></td>
                      </tr>

              <?php    }
            ?>

        </table>
        </div>
    </section>
</div>

<?php require_once "include/footer.php"; ?>