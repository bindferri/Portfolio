<?php require_once "include/header.php";
      require_once "include/navbar.php";

      //Instantiating classes
      $hero = new Hero();
      $contact = new Contact();
      $project = new Project();
      $skills = new Skills();
      $footer = new Footer();

      //Counting how many were created
      $heroCount = $hero->countItems();
      $projectCount = $project->countItems();
      $contactCount = $contact->countItems();
      $skillsCount = $skills->countItems();
      $footerCount = $footer->countItems();
?>


 <section class="admin-content">
    <h3 class="admin__heading">Dashboard</h3>

    <div class="admin-card">
        <div class="admin-car__icon">
            <i class="fas fa-home"></i>

        <div class="admin-card__text">
            <h3><?php echo $heroCount ?></h3>
            <span>Heroes Created</span>
        </div>
        </div>

        <div class="admin-car__icon">
        <i class="far fa-file-chart-pie"></i>

        <div class="admin-card__text">
            <h3><?php echo $projectCount ?></h3>
            <span>Projects Created</span>
        </div>
        </div>

        <div class="admin-car__icon">
        <i class="fas fa-address-card"></i>

        <div class="admin-card__text">
            <h3>8,267</h3>
            <span>About Created</span>
        </div>
        </div>


        <div class="admin-car__icon">
            <i class="fas fa-language"></i>

            <div class="admin-card__text">
                <h3><?php echo $skillsCount ?></h3>
                <span>Skills Created</span>
            </div>
        </div>

        <div class="admin-car__icon">
            <i class="fas fa-address-book"></i>

            <div class="admin-card__text">
                <h3><?php echo $contactCount ?></h3>
                <span>Contact Created</span>
            </div>
        </div>

        <div class="admin-car__icon">
            <i class="fas fa-address-book"></i>

            <div class="admin-card__text">
                <h3><?php echo $footerCount ?></h3>
                <span>Footer Created</span>
            </div>
        </div>
    </div>

     <!-- Chart -->
     <div id="columnchart_material" class="chart"></div>

 </section>
</div>

<?php require_once "include/footer.php"?>
