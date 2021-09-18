<?php 
@session_start();
$url = explode('/', $_SERVER['REQUEST_URI']); ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">APPS Pendataan Dosen Dan Mahasiswa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
       <?php if ($_SESSION['level'] == "Admin"): ?>
         <?php if ($url[3] == "user") { ?>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url(); ?>system/user/index.php">User</a>
          <?php } ?>
        <?php endif ?>
        <?php if ($_SESSION['level'] == "Admin"): ?>
          <?php if ($url[3] != "user") { ?>
            <a class="nav-link" href="<?= base_url(); ?>system/user/index.php">User</a>
          <?php } ?>
        <?php endif ?>
      </li>  
      <li class="nav-item">
        <?php if ($url[3] == "dosen") { ?>
          <a class="nav-link active" href="<?= base_url(); ?>system/dosen/index.php">Dosen</a>
        <?php } ?>
        <?php if ($url[3] != "dosen") { ?>
          <a class="nav-link" href="<?= base_url(); ?>system/dosen/index.php">Dosen</a>
        <?php } ?>
      </li>
      <li class="nav-item">
        <?php if ($url[3] == "mahasiswa") { ?>
          <a class="nav-link active" href="<?= base_url(); ?>system/mahasiswa/index.php">Mahasiswa</a>
        <?php } ?>
        <?php if ($url[3] != "mahasiswa") { ?>
          <a class="nav-link" href="<?= base_url(); ?>system/mahasiswa/index.php">Mahasiswa</a>
        <?php } ?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>auth/logout.php">Keluar Akun</a>
      </li>
    </ul>
  </div>
</div>
</nav>