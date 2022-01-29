<?php require_once "include/header.php";
      require_once "include/navbar.php";
?>


    <section class="admin-content">
        <h3 class="admin__heading">Hero Customize</h3>

        <div class="container-content">
        <form action="" class="form-contact form--hero">
            <label>Get in Touch Text: </label>
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
                <th>Hero Text</th>
                <th>Hero Button Text</th>
                <th>CV File</th>
                <th>Photo</th>
            </tr>
            <tr>
                <td>Bind Ferri Full Stack Developer</td>
                <td>Check my work</td>
                <td>img/cv.pdf</td>
                <td>img/bindferri.png</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>

            <?php $contact = new Contact();
                  $allContacts = $contact->fetchAll();
                  foreach ($allContacts as $itemContact){ ?>

                      <tr>
                          <td><?php echo $itemContact->contact_text ?></td>
                          <td><?php echo $itemContact->contact_name ?></td>
                          <td><?php echo $itemContact->contact_address ?></td>
                          <td><?php echo $itemContact->contact_email ?></td>
                          <td>Edit</td>
                          <td>Delete</td>
                      </tr>

              <?php    }
            ?>

        </table>
        </div>
    </section>
</div>

<?php require_once "include/footer.php"; ?>