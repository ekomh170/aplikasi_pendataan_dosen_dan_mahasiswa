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
				<div class="h1 font-weight-bold text-center mb-4">Data Mahasiswa</div>
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
								<th scope="col">Kode Mhs</th>
								<th scope="col">Nama Mhs</th>
								<th scope="col">Panggilan</th>
								<th scope="col">Jurusan</th>
								<th scope="col">Tahun Akademik</th>
								<th scope="col" class="text-center">Aksi</th>
							</tr>
						</thead>
						<?php 
						$no = 1;
						include '../../config/koneksi.php';

						if(isset($_GET['kata_cari'])){
							$nim_mhs = $_GET['kata_cari'];
							$nama = $_GET['kata_cari'];
							$nama_panggilan = $_GET['kata_cari'];
							$nama_jurusan = $_GET['kata_cari'];
							$nama_tahun_akademik = $_GET['kata_cari'];
							$data = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE nim_mhs LIKE '%".$nim_mhs."%' OR nama LIKE '%".$nama."%'");			
						}else{
							$data = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
						}

						foreach ($data as $value => $d) {
							?>
							<tbody>
								<tr>
									<th scope="row"><?=$no++;?></th>
									<td><?=$d['nim_mhs']; ?></td>
									<td><?=$d['nama']; ?></td>
									<td><?=$d['nama_panggilan']; ?></td>
									<td><?=$d['nama_jurusan']; ?></td>
									<td><?=$d['nama_tahun_akademik']; ?></td>
									<td>
										<a href="detail.php?id=<?= $d['nim_mhs']; ?>"><button class="btn btn-success">Detail</button></a>
										<?php if ($_SESSION['level'] == "Admin" || $_SESSION['level'] == "Pembimbing"): ?>
											<a href="ubah.php?id=<?= $d['nim_mhs']; ?>"><button style="color: white;" class="btn btn-warning">Ubah</button></a>
										<?php endif; ?>
										<a href="hapus.php?id=<?= $d['nim_mhs']; ?>"><button  class="btn btn-danger">Hapus</button></a>
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