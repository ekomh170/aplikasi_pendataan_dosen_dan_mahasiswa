<?php 
include '../../config/akses_block.php';
include '../../config/uri.php';
include '../../layout/header.php';
include '../../layout/topbar.php';
?>

<center>
	<div class="container m-5">
		<div class="card">
			<div class="card-body">
				<div class="h1 font-weight-bold text-center mb-4">Data User</div>
				<div class="float-left">
					<a href="tambah.php" class="btn btn-success mb-2">+ Tambah Data</a>
					<a href="print/index_print.php" class="btn btn-success mb-2" target="_BLANK">Print</a>
				</div>
				<div class="float-right">
					<form class="form-inline" action="index.php" method="get">
						<div class="col-12">
							Form Pencarian Data :
							<?php if (@$_GET['kata_cari'] == @$_GET['kata_cari']): ?>				
								<input class="form-control mr-sm-2" type="text" placeholder="Cari Data = <?= @$_GET['kata_cari'];?>" aria-label="Search" name="kata_cari">
								<?php else: ?>
									<input class="form-control mr-sm-2" type="text" placeholder="Cari Data" aria-label="Search" name="kata_cari">
								<?php endif ?>
								<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari" value="cari">Cari</button>
							</div>
						</form>
					</div>
					<table class="table text-center">
						<thead class="thead-dark">
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Level</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<?php  
						include '../../config/koneksi.php';
						$no = 1;
						$data = mysqli_query($koneksi, "SELECT * FROM tb_user");
						foreach ($data as $value => $d) {
							?>
							<tbody>
								<tr>
									<th><?= $no++; ?></th>
									<td><?= $d['nama']; ?></td>
									<td><?= $d['username']; ?></td>
									<td><?= $d['level']; ?></td>
									<td class="text-center">
										<a href="ubah.php?id=<?= $d['idUser']; ?>"><button style="color: white;" class="btn btn-warning">Ubah</button></a>
										<a href="hapus.php?id=<?= $d['idUser']; ?>"><button class="btn btn-danger">Hapus</button></a>
									</td>
								</tr>
							</tbody>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</center>
</div>	

<?php 
include '../../layout/footer.php';
?>