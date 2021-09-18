<?php 
include '../../config/akses_block.php';
include '../../config/uri.php';
include '../../layout/header.php'; 
include '../../layout/topbar.php'; 
?>

<?php  @session_start(); ?>
<center>
	<div class="container m-5">
		<div class="card">
			<div class="card-body">
				<div class="h1 font-weight-bold text-center mb-4">Data Dosen</div>
				<div class="float-left">
					<a href="tambah.php" type="button" class="btn btn-success mb-2" >+ Tambah Data</a>
					<?php if ($_SESSION['level'] == "Admin" || $_SESSION['level'] == "Pembimbing"): ?>
						<a href="print/index_print.php" class="btn btn-success mb-2" target="_BLANK">Print</a>
					<?php endif; ?>
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
								<th scope="col">No</th>
								<th scope="col">Kode Dosen</th>
								<th scope="col">Nama Dosen</th>
								<th scope="col">Nama Matkul</th>
								<th scope="col">Jenis Kelamin</th>
								<th scope="col">Agama</th>	
								<th scope="col">No Telepon</th>
								<th scope="col" class="text-center">Aksi</th>
							</tr>
						</thead>
						<?php 
						include '../../config/koneksi.php';
						$no = 1;
						$data = mysqli_query($koneksi, "SELECT * FROM tb_dosen");
						foreach ($data as $value => $d) {
							?>
							<tbody>
								<tr>
									<th scope="row"><?=$no++;?></th>
									<td><?=$d['id_dosen']; ?></td>
									<td><?=$d['nama_dosen']; ?></td>
									<td><?=$d['nama_matkul']; ?></td>
									<td><?=$d['jenis_kelamin']; ?></td>
									<td><?=$d['agama']; ?></td>
									<td><?=$d['no_telp']; ?></td>
									<td>
										<a href="detail.php?id=<?= $d['id_dosen']; ?>"><button class="btn btn-success">Detail</button></a>
										<?php if ($_SESSION['level'] == "Admin" || $_SESSION['level'] == "Pembimbing"): ?>
											<a href="ubah.php?id=<?= $d['id_dosen']; ?>"><button style="color: white;" class="btn btn-warning">Ubah</button></a>
										<?php endif; ?>
										<a href="hapus.php?id=<?= $d['id_dosen']; ?>"><button  class="btn btn-danger">Hapus</button></a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</center>
	<?php 
	include '../../layout/footer.php'; 
	?>
