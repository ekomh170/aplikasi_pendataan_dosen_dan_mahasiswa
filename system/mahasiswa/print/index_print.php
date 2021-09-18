<?php 
include '../../config/akses_block.php';
include '../../config/uri.php';
include '../../layout/header.php'; 
include '../../layout/topbar.php'; 
?>
<div class="container m-5">
	<div class="h1 font-weight-bold text-center">Data Mahasiswa</div>
	<table class="table text-center mt-5">
		<thead class="thead-dark">
			<tr>
				<th scope="col">No</th>
				<th scope="col">Kode Mhs</th>
				<th scope="col">Nama Mhs</th>
				<th scope="col">Panggilan</th>
				<th scope="col">Jurusan</th>
				<th scope="col">Tahun Akademik</th>
			</tr>
		</thead>
		<?php 
		include '../../config/koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
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
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<script>
	window.print();
</script>

<?php 
include '../../layout/footer.php'; 
?>