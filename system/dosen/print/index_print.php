<?php 
include '../../../config/akses_block.php';
include '../../../config/uri.php';
include '../../../layout/header.php'; 
include '../../../layout/topbar.php'; 
?>
<div class="container m-5">
	<div class="h1 font-weight-bold text-center mb-5">Data Dosen</div>
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
			</tr>
		</thead>
		<?php 
		include '../../../config/koneksi.php';
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
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<script>
	window.print();
</script>

<?php 
include '../../../layout/footer.php'; 
?>