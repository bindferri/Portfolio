<?php
$page =  basename($_SERVER['PHP_SELF']);
?>
<!-- Navbar Component -->
<div class="container">
    <section class="menu">
        <div class="items">
            <ul>
                <li  <?php echo $page === 'index.php' ? 'class = active' : '' ?>><a href="index.php"><i class="fas fa-chart-pie"></i>Dashboard</a></li>
                <li <?php echo $page === 'hero.php' ? 'class = active' : '' ?>><i class="fas fa-home"></i><a href="hero.php">Hero</a></li>
                <li <?php echo $page === 'projects.php' ? 'class = active' : '' ?>><i class="far fa-file-chart-pie"></i><a href="projects.php">Projects</a></li>
                <li <?php echo $page === 'contact.php' ? 'class = active' : '' ?>><i class="fas fas fa-address-book"></i><a href="contact.php">Contact</a></li>
                <li <?php echo $page === 'footer.php' ? 'class = active' : '' ?>><i class="fas fas fa-address-book"></i><a href="footer.php">Footer</a></li>
                <li <?php echo $page === 'languages.php' ? 'class = active' : '' ?>><i class="fas fa-language"></i><a href="languages.php">Skills</a></li>
            </ul>
        </div>
    </section>