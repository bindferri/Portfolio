<?php
$page =  basename($_SERVER['PHP_SELF']);
?>
<!-- Navbar Component -->
<div class="container">
    <section class="menu">
        <div class="items">
            <ul>
                <a href="index.php" <?php echo $page === 'index.php' ? 'class = active' : '' ?>><i class="fas fa-chart-pie"></i>Dashboard</a>
                <a href="hero.php" <?php echo $page === 'hero.php' ? 'class = active' : '' ?>><i class="fas fa-home" ></i>Hero</a>
                <a href="projects.php" <?php echo $page === 'projects.php' ? 'class = active' : '' ?>><i class="far fa-file-chart-pie"></i>Projects</a>
                <a href="contact.php" <?php echo $page === 'contact.php' ? 'class = active' : '' ?>><i class="fas fas fa-address-book"></i>Contact</a>
                <a href="footer.php" <?php echo $page === 'footer.php' ? 'class = active' : '' ?>><i class="fas fas fa-address-book"></i>Footer</a>
                <a href="languages.php" <?php echo $page === 'languages.php' ? 'class = active' : '' ?>><i class="fas fa-language"></i>Skills</a>
            </ul>
        </div>
    </section>