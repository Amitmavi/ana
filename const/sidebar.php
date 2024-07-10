<?php


echo"functionworks";
function generateSidebar($activePage) {
    ?>
    <div class="slider">
        <header>ANA</header>
        <a class="<?= ($activePage == 'dashboard') ? 'active' : ''; ?>" href="dashboard.php"><i class="fa-solid fa-qrcode"></i><span>Dashboard</span></a>
        <a class="<?= ($activePage == 'social') ? 'active' : ''; ?>" href="/ana/Social/social.php"><i class="fa-solid fa-globe"></i><span>Social</span></a>
        <a class="<?= ($activePage == 'teachers') ? 'active' : ''; ?>" href="teachers.php"><i class="fa-solid fa-users"></i><span>Teachers</span></a>
        <a class="<?= ($activePage == 'students') ? 'active' : ''; ?>" href="students.php"><i class="fa-solid fa-user"></i><span>Students</span></a>
        <a class="<?= ($activePage == 'media') ? 'active' : ''; ?>" href="media.php"><i class="fa-regular fa-folder"></i><span>Media</span></a>
        <a class="<?= ($activePage == 'setting') ? 'active' : ''; ?>" href="setting.php"><i class="fa-solid fa-gear"></i><span>Setting</span></a>
        <a class="<?= ($activePage == 'info') ? 'active' : ''; ?>" href="info.php"><i class="fa-solid fa-info"></i><span>Info</span></a>
        <a class="<?= ($activePage == 'contact') ? 'active' : ''; ?>" href="contact.php"><i class="fa-regular fa-envelope"></i><span>Contact</span></a>
        <a class="<?= ($activePage == 'logout') ? 'active' : ''; ?>" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i><span>Log Out</span></a>
    </div>

    <!-- Include your CSS and other important links here -->
    <link rel="stylesheet" href="/template.css">
    <!-- Additional links go here if needed -->
    <?php
}
?>
