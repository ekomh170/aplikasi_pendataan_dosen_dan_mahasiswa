<?php include 'config/uri.php' ?>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap-reboot.min.css.map">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">
	<title>Halaman Utama</title>
</head>
<body>
	<div class="gambar">
		<div class="container">
			<div class="card">
				<div class="card-header text-white font-weight-bold h3" style="background: black;">
					Universitas Pertahanan
				</div>				
				<div class="card-body" style="background-image: url('assets/img/bg-img-1.jpeg');background-repeat: no-repeat;
	background-size: 100%;">
					<div class="text1 h1 text-center text-black mb-auto">APPS</div>
					<div class="text2 h3 text-center text-black">Pendataan</div>
					<div class="text2 h3 text-center text-black">Dosen Dan Mahasiswa</div>
					<img src="assets/img/unhan-logo.png" alt="unhan1">
					<img src="assets/img/unhan-logo-2.png" alt="unhan2">
					<img src="assets/img/unhan-logo.png" alt="unhan3">
					<div class="mt-5">
						<a href="auth/login.php" style="text-decoration-line: none;"><button type="button" class="btn btn btn-lg text-white btn-block mb-2" style="background-color: black;">Form Login</button></a>
						<a href="auth/daftar.php" style="text-decoration-line: none;"><button type="button" class="btn btn btn-lg text-white btn-block mb-2" style="background-color: black;">Form Daftar</button></a>
						<?php
						@session_start();
						if (@$_SESSION['email']): ?>
							<a href="system/informasi_surat/index.php" style="text-decoration-line: none;"><button type="button" class="btn btn-warning btn-lg btn-block text-black mb-2">Kembali Ke Halaman APPS</button></a>
							<a href="auth/keluar_akun.php" style="text-decoration-line: none;"><button type="button" class="btn btn-danger btn-lg btn-block mb-2 text-black mb-2">Keluar Akun</button></a>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="<?= base_url(); ?>assets/js/bootstrap.bundle.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
</html>