<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/topbar.php' ?>

<div class="container text-center mt-5">
	<div class="row">
		<div class="col-6 mt-3">
			<?php
			include '../../config/koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"SELECT * FROM tb_dosen WHERE id_dosen='$id'");
			while($d = mysqli_fetch_array($data)){
				?>
				<div class="card" style="width: 70rem;">
					<div class="card-body">
						<h5 class="card-title">Data Lengkap Dosen</h5>
						<hr>
						<div class="h5 card-text">Nama Dosen : <?= $d['nama_dosen']?></div>
						<div class="card-text">Kode Dosen : <?= $d['id_dosen'] ?></div>
						<div class="card-text">Nama Panggilan : <?= $d['nama_panggilan'] ?></div>
						<div class="card-text">Email : <?= $d['email'] ?></div>
						<div class="card-text">Nama Matkul : <?= $d['nama_matkul'] ?></div>
						<div class="card-text">Jenis Kelamin : <?= $d['jenis_kelamin'] ?></div>
						<div class="card-text">Nomer Telepon : <?= $d['no_telp'] ?></div>
						<div class="card-text">Tempat dan Tanggal Lahir : <?= $d['tmpt_lahir'] ?>, <?= $d['tanggal_lahir'] ?></div>
						<div class="card-text">Agama : <?= $d['agama'] ?></div>
						<div class="card-text mb-2">Alamat : <?= $d['alamat'] ?></div>
						<div class="card-text mb-3"><img class="img-profile rounded-circle" src="../../assets/foto/dosen/<?= $d['image']; ?>" width='150' height='150'></div>
						<?php if ($_SESSION['level'] == "Admin" || $_SESSION['level'] == "Pembimbing"): ?>
							<a href="print/detail_print.php?id=<?= $id; ?>" class="btn btn-danger" target="_BLANK">Print Data</a> | 
						<?php endif; ?>
						<a href="index.php" class="btn btn-primary">Kembali</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php include '../../layout/footer.php' ?>